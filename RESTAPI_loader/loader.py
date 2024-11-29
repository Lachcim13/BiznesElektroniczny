import requests
from lxml import etree
import base64

API_URL = "http://localhost:8080/api"
API_KEY = "S2FUL63SM5RSFFJ6HQF5CW97Z6ZPG6TB"

encoded_api_key = base64.b64encode(f"{API_KEY}:".encode()).decode()

headers = {
    "Authorization": f"Basic {encoded_api_key}",
    "Content-Type": "application/xml",
    "Output-Format": "JSON"
}


def create_category(name, description, parent_id=2):
    prestashop = etree.Element('prestashop', xmlns_xlink="http://www.w3.org/1999/xlink")
    category_element = etree.SubElement(prestashop, 'category')

    name_element = etree.SubElement(category_element, "name")
    name_lang = etree.SubElement(name_element, "language", id="1")
    name_lang.text = name

    description_element = etree.SubElement(category_element, "description")
    description_lang = etree.SubElement(description_element, "language", id="1")
    description_lang.text = description

    #TODO: category image

    active_element = etree.SubElement(category_element, "active")
    active_element.text = "1"

    if parent_id:
        parent_element = etree.SubElement(category_element, "id_parent")
        parent_element.text = str(parent_id)

    link_element = etree.SubElement(category_element, "link_rewrite")

    link_rewrite_language = etree.SubElement(link_element, 'language', id="1")
    link_rewrite_language.text = name.lower().replace(" ", "-")


    tree = etree.ElementTree(prestashop)
    xml_data = etree.tostring(tree.getroot(), pretty_print=True, xml_declaration=True, encoding="UTF-8")
    print(xml_data)
    response = requests.post(f"{API_URL}/categories", headers=headers, data=xml_data)

    if response.status_code == 201:
        print(f"Category '{name}' created successfully.")
        return response.json()["category"]["id"]  # Returning the ID of category
    else:
        print(f"Error creating category: {response.text}")
        return None


def create_product(name, price, description_short, description_long, composition,
                   weight, size, crochet_size,
                   needle_size, category_id, medium_image_path, large_image_path):
    prestashop = etree.Element('prestashop', xmlns_xlink="http://www.w3.org/1999/xlink")
    product_element = etree.SubElement(prestashop,"product")

    #TODO: Features

    images_element = etree.SubElement(product_element, "images")
    medium_images_element = etree.SubElement(images_element, "image")
    large_images_element = etree.SubElement(images_element, "image")
    medium_images_element.text = medium_image_path
    large_images_element.text = large_image_path


    product_element = etree.SubElement(product_element, "id_category_default")
    product_element.text = str(category_id)

    active_element = etree.SubElement(product_element, "active")
    active_element.text = "1"

    tree = etree.ElementTree(prestashop)
    xml_data = etree.tostring(tree.getroot(), pretty_print=True, xml_declaration=True, encoding="UTF-8")

    response = requests.post(f"{API_URL}/products", headers=headers, data=xml_data)

    if response.status_code == 201:
        print(f"Product '{name}' created successfully.")
    else:
        print(f"Error creating product: {response.text}")


# Source data - Example
source_data = {
    "categories": [
        {
            "name": "FRANEK_DEBIL_KATEGORIA",
            "description": "XD",
            "image_path": "downloaded_images/Wczki_image.jpg",
            "subcategories": [
                {
                    "name": "Włóczki z kaszmirem",
                    "description": "",
                    "image_path": "",
                    "products": [
                        {
                            "name": "Phil Laine Cachemire PHILDAR 1446",
                            "tax": "Brutto",
                            "delivery": "Realizacja zamówień w 24h",
                            "price": "29,90zł",
                            "price_content": "29.9",
                            "out_of_stock": "Obecnie brak na stanie",
                            "review": 0,
                            "description_title_short": "Włóczka Phil Laine Cachemire Phildar",
                            "description_short": "Włóczka Phil Laine Cachemire to wysokiej jakości luksusowa włóczka o szlachetnym składzie 80% wełna i 20% kaszmir. Phil Laine Cachemire w 25 gramowym motku posiada 100 metrów. Jest to niesamowicie delikatna i całkowicie niegryząca włóczka.",
                            "description_long": "Phil Laine Cachemire francuskiej marki Phildar jest wysokiej jakości włóczką wyprodukowaną we Włoszech. Wełna kaszmirska pochodzi z puchu bardzo wytrzymałej na zimno rasy kóz kaszmirskich zamieszkałych w górskich terenach Chin i Mongolii. Wełna kaszmirska charakteryzuje się wyjątkową delikatnością i o wiele większym utrzymaniem ciepła niż wełna owcza. Włóczka ta doskonale nadaję się na robótki jesienno-zimowe takie jak delikatne sweterki, chusty, eleganckie szale(nawet ślubne) lub poncza. Bardzo polecam ją na zimowe komplety: czapki, kominy i szaliki. Śmiało można z tej włóczki dziergać i szydełkować robótki dla dzieci i niemowląt.",
                            "composition": "80% wełna, 20% kaszmir",
                            "size": "",
                            "weight": "25g",
                            "length": "100 m",
                            "crochet_size": "3,5 mm",
                            "needle_size": "3,5 mm",
                            "medium_image_path": "downloaded_images/Phil Laine Cachemire PHILDAR 1446_medium.jpg",
                            "large_image_path": "downloaded_images/Phil Laine Cachemire PHILDAR 1446_large.jpg"
                        }
                    ]
                }
            ]
        }
    ]
}

# Creating categories and subcategories
category_ids = {}
for category in source_data["categories"]:
    category_id = create_category(category["name"], category["description"])
    if category_id:
        category_ids[category["name"]] = category_id
        for subcategory in category["subcategories"]:
            subcategory_id = create_category(subcategory["name"], subcategory["description"], category_id)
            if subcategory_id:
                for product in subcategory["products"]:
                    create_product(
                        product["name"],
                        product["price_content"],
                        product["description_short"],
                        product["description_long"],
                        product["composition"],
                        product["weight"],
                        product["size"],
                        product["crochet_size"],
                        product["needle_size"],
                        subcategory_id,
                        product["medium_image_path"],
                        product["large_image_path"]
                    )
