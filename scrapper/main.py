from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from bs4 import BeautifulSoup
import json
import requests
import os
from selenium.webdriver.chrome.service import Service

def download_image(image_url, product_id, suffix=""):
    try:
        img_data = requests.get(image_url).content
        image_filename = f"{product_id}{suffix}.jpg"
        image_path = os.path.join(images_folder, image_filename)

        with open(image_path, 'wb') as img_file:
            img_file.write(img_data)

        return image_path
    except Exception as e:
        print(f"Failed to download image for product {product_id}: {e}")
        return "No image"

def download_data(driver, product):
    # OPEN PRODUCT PAGE
    product_id = product.find("article", class_="product-miniature")["data-id-product"]
    element = product.find("h2", class_="h3 product-title")
    link = element.find("a")["href"] if element else "No link"
    driver.get(link)
    WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "product-description")))
    product_soup = BeautifulSoup(driver.page_source, "html.parser")

    # PRODUCT NAME
    name_element = product_soup.find("h1", class_="h1")
    name = name_element.get_text(strip=True) if name_element else "No name"

    # PRICE
    price_element = product_soup.find("span", class_="current-price-value")
    price_content = price_element["content"] if price_element else "No price content"
    price = price_element.get_text(strip=True) if price_element else "No price"

    # DESCRIPTION
    description_elements = product_soup.find_all("div", class_="product-description")

    # SHORT DESCRIPTION
    description_element = description_elements[0].find_all("p") if len(description_elements) > 0 else []
    description_title_short = description_element[0].get_text(strip=True) if len(description_element) > 0 else "No short description title"
    description_short = description_element[1].get_text(strip=True) if len(description_element) > 1 else "No short description"

    # LONG DESCRIPTION
    description_element = description_elements[1].find_all("p") if len(description_elements) > 1 else []
    description_long_paragraphs = [p.get_text(strip=True) for p in description_element if p.get_text(strip=True)]
    description_long = "\n".join(description_long_paragraphs)

    # DETAILED DATA
    composition = "No composition"
    size = "No size"
    weight = "No weight"
    length = "No length"
    crochet_size = "No crochet size"
    needle_size = "No needle size"
    detailed_data_element = product_soup.find("dl", class_="data-sheet")
    detailed_data_names = detailed_data_element.find_all("dt")
    detailed_data_values = detailed_data_element.find_all("dd")
    for detailed_data_name, detailed_data_value in zip(detailed_data_names, detailed_data_values):
        name = detailed_data_name.get_text(strip=True)
        if name == "Skład:":
            composition = detailed_data_value.get_text(strip=True)
        elif name == "Rozmiar:":
            size = detailed_data_value.get_text(strip=True)
        elif name == "Waga motka:":
            weight = detailed_data_value.get_text(strip=True)
        elif name == "Długość:":
            length = detailed_data_value.get_text(strip=True)
        elif name == "Zalecany rozmiar szydełka:":
            crochet_size = detailed_data_value.get_text(strip=True)
        elif name == "Zalecany rozmiar drutów:":
            needle_size = detailed_data_value.get_text(strip=True)

    # FLAGS
    out_of_stock_element = product_soup.find("li", class_="product-flag out_of_stock")
    out_of_stock = out_of_stock_element.get_text(strip=True) if out_of_stock_element else "No out of stock"
    tax_element = product_soup.find("div", class_="tax-shipping-delivery-label")
    tax = tax_element.get_text(strip=True) if tax_element else "No tax"
    delivery_element = product_soup.find("span", class_="delivery-information")
    delivery = delivery_element.get_text(strip=True) if delivery_element else "No delivery"

    # IMAGES
    image_element = product_soup.find_all("img", class_="thumb js-thumb selected js-thumb-selected")
    medium_image_url_1 = image_element[0]["data-image-medium-src"] if len(image_element) >= 1 else f"No medium image 1"
    large_image_url_1 = image_element[0]["data-image-large-src"] if len(image_element) >= 1 else f"No large image 1"
    medium_image_url_2 = image_element[1]["data-image-medium-src"] if len(image_element) == 2 else f"No medium image 2"
    large_image_url_2 = image_element[1]["data-image-large-src"] if len(image_element) == 2 else f"No large image 2"

    # DOWNLOAD IMAGES
    medium_image_path_1 = download_image(medium_image_url_1, product_id, suffix="_medium1")
    large_image_path_1 = download_image(large_image_url_1, product_id, suffix="_large1")
    medium_image_path_2 = download_image(medium_image_url_2, product_id, suffix="_medium2")
    large_image_path_2 = download_image(large_image_url_2, product_id, suffix="_large2")

    # STORE PRODUCT DATA
    product_data = {
        "product_id": product_id,
        "name": name,
        "link": link,
        "tax": tax,
        "delivery": delivery,
        "price": price,
        "price_content": price_content,
        "out_of_stock": out_of_stock,
        "description_title_short": description_title_short,
        "description_short": description_short,
        "description_long": description_long,
        "composition": composition,
        "size": size,
        "weight": weight,
        "length": length,
        "crochet_size": crochet_size,
        "needle_size": needle_size,
        "medium_image_url_1": medium_image_url_1,
        "large_image_url_1": large_image_url_1,
        "medium_image_url_2": medium_image_url_2,
        "large_image_url_2": large_image_url_2,
        "medium_image_path_1": medium_image_path_1,
        "large_image_path_1": large_image_path_1,
        "medium_image_path_2": medium_image_path_2,
        "large_image_path_2": large_image_path_2
    }

    return product_data

def main(url= ""):
    # DRIVER CONFIGURATION
    options = webdriver.ChromeOptions()
    options.add_argument('--headless')
    options.add_argument('--disable-gpu')
    options.add_argument('--no-sandbox')

    # Specify the chromedriver path using the Service object
    service = Service(executable_path='/usr/bin/chromedriver')

    driver = webdriver.Chrome(service=service, options=options)
    driver.get(url)

    # CREATE FOLDER FOR IMAGES
    global images_folder
    images_folder = "downloaded_images"
    os.makedirs(images_folder, exist_ok=True)

    product_data_list = []

    while True:
        WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "js-product")))
        soup = BeautifulSoup(driver.page_source, "html.parser")
        products = soup.find_all("div", class_="js-product")

        for product in products:
            # DOWNLOAD DATA
            product_data = download_data(driver, product)
            product_data_list.append(product_data)

            driver.back()
            WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "js-product")))

        # CHECK NEXT PAGE
        next_page_button = soup.find("a", rel="next")
        if next_page_button:
            next_url = next_page_button["href"]
            driver.get(next_url)
            WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "js-product")))  # Wait for products to load on the next page
        else:
            break

    # SAVE TO JSON FILE
    with open("products.json", "w", encoding="utf-8") as file:
        json.dump(product_data_list, file, ensure_ascii=False, indent=4)

    driver.quit()
    print("Products have been saved to the file products.json and images have been downloaded.")


if __name__ == "__main__":
    url = "https://karolinaszydelko.pl/20-cotton-spaghetti"
    main(url)
