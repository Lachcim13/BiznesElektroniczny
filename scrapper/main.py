from selenium import webdriver
from selenium.common import exceptions
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from bs4 import BeautifulSoup
import json
import requests
import os
import time
from selenium.webdriver.chrome.service import Service

def download_image(image_url, name, suffix=""):
    if image_url == "" or image_url is None:
        return ""
    try:
        img_data = requests.get(image_url, timeout=5).content
        image_filename = f"{name}{suffix}.jpg"
        image_path = os.path.join(images_folder, image_filename)

        with open(image_path, 'wb') as img_file:
            img_file.write(img_data)

        return image_path
    except requests.exceptions.Timeout:
        print(f"Przekroczono czas oczekiwania na {image_url}")
    except requests.exceptions.RequestException as e:
        print(f"Wystąpił błąd: {e}")
    except Exception as e:
        print(f"Failed to download image for product {name}: {e}")
        return ""

def download_product_data(product_soup):
    # PRODUCT NAME
    name_element = product_soup.find("h1", class_="h1")
    name = name_element.get_text(strip=True) if name_element else ""

    # PRICE
    price_element = product_soup.find("span", class_="current-price-value")
    price_content = price_element["content"] if price_element else ""

    # DESCRIPTION
    description_elements = product_soup.find_all("div", class_="product-description")

    # SHORT DESCRIPTION
    description_element = description_elements[0].find_all("p") if len(description_elements) > 0 else []
    if len(description_element) == 2:
        description_title_short = description_element[0].get_text(strip=True)
        description_short = description_element[1].get_text(strip=True)
    elif len(description_element) == 1:
        description_title_short =  ""
        description_short = description_element[0].get_text(strip=True)
    else:
        description_title_short = ""
        description_short = ""

    # LONG DESCRIPTION
    description_element = description_elements[1].find_all("p") if len(description_elements) > 1 else []
    description_long_paragraphs = [p.get_text(strip=True) for p in description_element if p.get_text(strip=True)]
    description_long = "\n".join(description_long_paragraphs)

    # DETAILED DATA
    composition = ""
    size = ""
    weight = ""
    length = ""
    crochet_size = ""
    needle_size = ""
    detailed_data_element = product_soup.find("dl", class_="data-sheet")
    detailed_data_names = detailed_data_element.find_all("dt")
    detailed_data_values = detailed_data_element.find_all("dd")
    for detailed_data_name, detailed_data_value in zip(detailed_data_names, detailed_data_values):
        detail_name = detailed_data_name.get_text(strip=True)
        if detail_name == "Skład:":
            composition = detailed_data_value.get_text(strip=True)
        elif detail_name == "Rozmiar:":
            size = detailed_data_value.get_text(strip=True)
        elif detail_name == "Waga motka:":
            weight = detailed_data_value.get_text(strip=True)
        elif detail_name == "Długość:":
            length = detailed_data_value.get_text(strip=True)
        elif detail_name == "Zalecany rozmiar szydełka:":
            crochet_size = detailed_data_value.get_text(strip=True)
        elif detail_name == "Zalecany rozmiar drutów:":
            needle_size = detailed_data_value.get_text(strip=True)

    # FLAGS
    tax_element = product_soup.find("div", class_="tax-shipping-delivery-label")
    tax = str(tax_element.contents[0]).strip() if tax_element else ""


    # IMAGES
    image_element = product_soup.find("img", class_="thumb js-thumb selected js-thumb-selected")
    medium_image_url = image_element["data-image-medium-src"] if image_element else ""
    large_image_url = image_element["data-image-large-src"] if image_element else ""

    # DOWNLOAD IMAGES
    medium_image_path = download_image(medium_image_url, name, suffix="_medium")
    large_image_path = download_image(large_image_url, name, suffix="_large")

    # STORE PRODUCT DATA
    product_data = {
        "name": name,
        "tax": tax,
        "price_content": price_content,
        "description_title_short": description_title_short,
        "description_short": description_short,
        "description_long": description_long,
        "composition": composition,
        "size": size,
        "weight": weight,
        "length": length,
        "crochet_size": crochet_size,
        "needle_size": needle_size,
        "medium_image_path": medium_image_path,
        "large_image_path": large_image_path
    }

    return product_data

def download_category_data(driver, name, category_soup, category_link, sub = False):
    # CATEGORY DESCRIPTION
    description_element = category_soup.find("div", id="category-description")
    if description_element:
        description_spans = description_element.find_all("span")
        description_texts = [s.get_text(strip=True) for s in description_spans if s.get_text(strip=True)]
        description = " ".join(description_texts)
    else:
        description = ""

    # CATEGORY IMAGE
    image_element = category_soup.find("img", class_="img-res")
    image_url = image_element["src"] if image_element else f""

    # DOWNLOAD IMAGES
    image_path = download_image(image_url, name, suffix="_image")

    category_data = {
        "name": name,
        "description": description,
        "image_path": image_path
    }

    # NOT SUBCATEGORY
    if not sub:
        subcategories = category_soup.find_all("div", class_="subcategory-image")
        subcategory_data_list = []

        for subcategory in subcategories:
            link = subcategory.find("a")["href"]
            driver.get(link)
            WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "h1")))
            subcategory_soup = BeautifulSoup(driver.page_source, "html.parser")

            # CATEGORY NAME
            name_element = subcategory_soup.find("h1", class_="h1")
            name = name_element.get_text(strip=True) if name_element else ""

            if name in categories_names:
                subcategory_data = download_category_data(driver, name, subcategory_soup, link, True)
                subcategory_data_list.append(subcategory_data)
                print(f"Added (sub)category {subcategory_data['name']}")

        driver.get(category_link)
        WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "h1")))

        category_data["subcategories"] = subcategory_data_list

    # SUBCATEGORY
    if sub:
        product_data_list = []

        while True:
            WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "js-product")))
            soup = BeautifulSoup(driver.page_source, "html.parser")
            products = soup.find_all("div", class_="js-product")

            for product in products:
                # DOWNLOAD DATA
                element = product.find("h2", class_="h3 product-title")
                link = element.find("a")["href"]
                driver.get(link)
                try:
                    WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "h1")))
                except exceptions.TimeoutException as e:
                    print(f"ERROR: {e.msg}")
                    continue

                product_soup = BeautifulSoup(driver.page_source, "html.parser")
                product_data = download_product_data(product_soup)
                product_data_list.append(product_data)
                print(f"Added product {product_data['name']}")

            driver.get(category_link)
            WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "js-product")))

            # CHECK NEXT PAGE
            next_page_button = soup.find("a", rel="next")
            if next_page_button:
                next_url = next_page_button["href"]
                driver.get(next_url)
            else:
                break

        category_data["products"] = product_data_list

    return category_data

def generate(url= "", categories_names = [""]):
    # DRIVER CONFIGURATION
    options = webdriver.ChromeOptions()
    #options.add_argument('--headless')
    options.add_argument('--disable-gpu')
    options.add_argument('--no-sandbox')
    service = Service(executable_path='/usr/bin/chromedriver')
    driver = webdriver.Chrome(service=service, options=options)
    driver.get(url)

    # CREATE FOLDER FOR IMAGES
    global images_folder
    images_folder = "../scrapper_results/downloaded_images"
    os.makedirs(images_folder, exist_ok=True)

    # FINDING MAIN PAGE CATEGORIES
    WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "category")))
    soup = BeautifulSoup(driver.page_source, "html.parser")
    categories = soup.find_all("a", class_="dropdown-item", attrs={"data-depth": "0"})

    category_data_list = []

    for category in categories:
        # LOADING CATEGORY PAGE
        link = category["href"]
        driver.get(link)
        WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "h1")))
        category_soup = BeautifulSoup(driver.page_source, "html.parser")

        # CATEGORY NAME
        name_element = category_soup.find("h1", class_="h1")
        name = name_element.get_text(strip=True) if name_element else ""

        if name in categories_names:
            category_data = download_category_data(driver, name, category_soup, link)
            category_data_list.append(category_data)
            # SAVE TO JSON FILE
            with open("../scrapper_results/" + name + "_merino.json", "w", encoding="utf-8") as file:
                json.dump({"categories": category_data_list}, file, ensure_ascii=False, indent=4)

    driver.quit()
    print("Products have been saved to the file and images have been downloaded.")


if __name__ == "__main__":
    url = "https://karolinaszydelko.pl"
    categories_names = ["Włóczki", "Włóczki Merino"]

    start_time = time.time()
    generate(url, categories_names)
    end_time = time.time()
    elapsed_time = end_time - start_time
    print(f"Scrapping took: {elapsed_time} seconds")
