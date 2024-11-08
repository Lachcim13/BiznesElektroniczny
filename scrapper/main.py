from selenium import webdriver
from bs4 import BeautifulSoup
import json
import time
import requests
import os

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

# Selenium setup
options = webdriver.ChromeOptions()
options.add_argument('--headless')
driver = webdriver.Chrome(options=options)

# Initial page URL
url = "https://karolinaszydelko.pl/20-cotton-spaghetti"
driver.get(url)
time.sleep(3)

# Folder for downloaded images
images_folder = "downloaded_images"
os.makedirs(images_folder, exist_ok=True)

# List to store product data
products_list = []

while True:
    soup = BeautifulSoup(driver.page_source, "html.parser")
    products = soup.find_all("div", class_="js-product")

    for product in products:
        product_id = product.find("article", class_="product-miniature")["data-id-product"]

        # Name and product page link
        element = product.find("h2", class_="h3 product-title")
        link = element.find("a")["href"] if element else "No link"

        # Go to product detail page to scrape more details
        driver.get(link)
        time.sleep(2)
        product_soup = BeautifulSoup(driver.page_source, "html.parser")

        #NAME
        name_element = product_soup.find("h1", class_="h1")
        name = name_element.get_text(strip=True) if name_element else "No name"

        #PRICE
        price_span = product_soup.find("span", class_="current-price-value")
        price = price_span.get_text(strip=True) if price_span else "No price"

        #DESCRIPTION
        description_div = product_soup.find("div", class_="product-description")
        description_elements = description_div.find_all("p")

        description_title = description_elements[0].get_text(strip=True) if description_elements[0] else "No description title"
        description = description_elements[1].get_text(strip=True) if description_elements[1] else "No description"

        #IMAGES
        image_element = product_soup.find("img", class_="thumb js-thumb selected js-thumb-selected")
        medium_image_url = image_element["data-image-medium-src"] if image_element else "No medium image"
        large_image_url = image_element["data-image-large-src"] if image_element else "No large image"

        #DOWNLOAD IMAGES
        #medium_image_path = download_image(medium_image_url, product_id, suffix="_medium")
        #large_image_path = download_image(large_image_url, product_id, suffix="_large")

        #FLAGS
        out_of_stock_flag_li = product_soup.find("li", class_="out_of_stock")
        out_of_stock_flag = out_of_stock_flag_li.get_text(strip=True) if out_of_stock_flag_li else "No flag"

        # Storing the product data
        product_data = {
            "product_id": product_id,
            "name": name,
            "link": link,
            "price": price,
            "description_title": description_title,
            "description": description,
            "medium_image_url": medium_image_url,
            "large_image_url": large_image_url,
            #"medium_image_path": medium_image_path,
            #"large_image_path": large_image_path,
            "out_of_stock_flag": out_of_stock_flag
        }

        products_list.append(product_data)
        # Return to the original listing page
        driver.back()
        time.sleep(2)

    # Check for a "next" button to navigate pages
    next_page_button = soup.find("a", rel="next")
    if next_page_button:
        next_url = next_page_button["href"]
        driver.get(next_url)
        time.sleep(3)
    else:
        break

# Save scraped data to JSON
with open("products.json", "w", encoding="utf-8") as file:
    json.dump(products_list, file, ensure_ascii=False, indent=4)

# Close the browser
driver.quit()

print("Products have been saved to the file products.json and images have been downloaded.")
