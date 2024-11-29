import random
import requests
from lxml import etree
import base64
from pathlib import Path
import json

API_URL = "http://localhost:8080/api"
API_KEY = "L7SW4H4NYKZB1D8EB6MK3B1XFQH5XNKZ"

lang_id_str = str("2")

encoded_api_key = base64.b64encode(f"{API_KEY}:".encode()).decode()

headers = {
    "Authorization": f"Basic {encoded_api_key}",
    "Content-Type": "application/xml",
    "Output-Format": "JSON"
}

def get_feature_id_as_str_by_name(feature_name):
    features_dict = {
        "Skład:": 4,
        "Rozmiar:": 5,
        "Waga motka:": 6,
        "Długość:": 7,
        "Zalecany rozmiar szydełka:": 8,
        "Zalecany rozmiar drutów:": 10
    }
    id = features_dict[feature_name]
    if id is None:
        print(f"Feature {feature_name} not found")
    return str(id)


def get_img_path(current_path):
    if current_path == '':
        return None
    relative_path = Path(f"../scrapper/{current_path}")
    return relative_path.resolve()


def create_category(name, description, cover_img_path, parent_id=2):
    prestashop = etree.Element('prestashop', xmlns_xlink="http://www.w3.org/1999/xlink")
    category_element = etree.SubElement(prestashop, 'category')

    name_element = etree.SubElement(category_element, "name")
    name_lang = etree.SubElement(name_element, "language", id=lang_id_str)
    name_lang.text = name

    description_element = etree.SubElement(category_element, "description")
    description_lang = etree.SubElement(description_element, "language", id=lang_id_str)
    description_lang.text = description

    active_element = etree.SubElement(category_element, "active")
    active_element.text = "1"

    if parent_id:
        parent_element = etree.SubElement(category_element, "id_parent")
        parent_element.text = str(parent_id)

    link_element = etree.SubElement(category_element, "link_rewrite")

    link_rewrite_language = etree.SubElement(link_element, 'language', id=lang_id_str)
    link_rewrite_language.text = name.lower().replace(" ", "-")


    tree = etree.ElementTree(prestashop)
    xml_data = etree.tostring(tree.getroot(), pretty_print=True, xml_declaration=True, encoding="UTF-8")
    response = requests.post(f"{API_URL}/categories", headers=headers, data=xml_data)

    if response.status_code == 201:
        print(f"Category '{name}' created successfully.")
        id = response.json()["category"]["id"]
        url = f"{API_URL}/images/categories/{id}"

        if get_img_path(cover_img_path) is None:
            return id

        img_headers = {
            "Authorization": f"Basic {encoded_api_key}"
        }
        img_files = {
            'image': open(get_img_path(cover_img_path), 'rb')
        }

        img_response = requests.post(
            url,
            files=img_files,
            headers=img_headers,
        )

        if img_response.status_code == 201 or img_response.status_code == 200:
            print(f"Cover image successfully added to category {id}!")
        else:
            print(f"Error uploading cover image: {img_response.status_code}, {img_response.text}")

        return id
    else:
        print(f"Error creating category: {response.text}")
        return None


def create_product(name, price, review, description_short, description_long, composition, length,
                   weight, size, crochet_size,
                   needle_size, category_id, subcategory_id, medium_image_path, large_image_path):
    prestashop = etree.Element('prestashop', xmlns_xlink="http://www.w3.org/1999/xlink")
    product_element = etree.SubElement(prestashop,"product")

    #TODO: delivery
    price_element = etree.SubElement(product_element, "price")
    price_element.text = str(price)

    description_short_element = etree.SubElement(product_element, "description_short")
    description_short_lang = etree.SubElement(description_short_element, "language", id=lang_id_str)
    description_short_lang.text = description_short

    description_long_element = etree.SubElement(product_element, "description")
    description_long_lang = etree.SubElement(description_long_element, "language", id=lang_id_str)
    description_long_lang.text = description_long

    associations = etree.SubElement(product_element, "associations")
    categories = etree.SubElement(associations, "categories")

    category_element_main = etree.SubElement(categories, "category")
    etree.SubElement(category_element_main, "id").text = str(category_id)

    category_element_sub = etree.SubElement(categories, "category")
    etree.SubElement(category_element_sub, "id").text = str(subcategory_id)

    etree.SubElement(product_element, "id_category_default").text = "2"


    features_elements = etree.SubElement(associations, "product_features")

    composition_feature = etree.SubElement(features_elements, "product_feature")
    etree.SubElement(composition_feature, "id").text = get_feature_id_as_str_by_name("Skład:")
    etree.SubElement(composition_feature, "custom").text = "1"
    composition_value_element = etree.SubElement(composition_feature, "value")
    etree.SubElement(composition_value_element, "language", id=lang_id_str).text = str(composition)


    weight_feature = etree.SubElement(features_elements, "product_feature")
    etree.SubElement(weight_feature, "id").text = get_feature_id_as_str_by_name("Waga motka:")
    etree.SubElement(weight_feature, "custom").text = "1"
    weight_value_element = etree.SubElement(weight_feature, "value")
    etree.SubElement(weight_value_element, "language", id=lang_id_str).text = str(weight)


    size_feature = etree.SubElement(features_elements, "product_feature")
    etree.SubElement(size_feature, "id").text = get_feature_id_as_str_by_name("Rozmiar:")
    etree.SubElement(size_feature, "custom").text = "1"
    size_value_element = etree.SubElement(size_feature, "value")
    etree.SubElement(size_value_element, "language", id=lang_id_str).text = str(size)


    crochet_size_feature = etree.SubElement(features_elements, "product_feature")
    etree.SubElement(crochet_size_feature, "id").text = get_feature_id_as_str_by_name("Zalecany rozmiar szydełka:")
    etree.SubElement(crochet_size_feature, "custom").text = "1"
    crochet_value_element = etree.SubElement(crochet_size_feature, "value")
    etree.SubElement(crochet_value_element, "language", id=lang_id_str).text = str(crochet_size)


    needle_size_feature = etree.SubElement(features_elements, "product_feature")
    etree.SubElement(needle_size_feature, "id").text = get_feature_id_as_str_by_name("Zalecany rozmiar drutów:")
    etree.SubElement(needle_size_feature, "custom").text = "1"
    needle_value_element = etree.SubElement(needle_size_feature, "value")
    etree.SubElement(needle_value_element, "language", id=lang_id_str).text = str(needle_size)


    length_feature = etree.SubElement(features_elements, "product_feature")
    etree.SubElement(length_feature, "id").text = get_feature_id_as_str_by_name("Długość:")
    etree.SubElement(length_feature, "custom").text = "1"
    length_value_element = etree.SubElement(length_feature, "value")
    etree.SubElement(length_value_element, "language", id=lang_id_str).text = str(length)

    etree.SubElement(product_element, "state").text = "1"

    images_element = etree.SubElement(product_element, "images")
    medium_images_element = etree.SubElement(images_element, "image")
    large_images_element = etree.SubElement(images_element, "image")
    medium_images_element.text = str(get_img_path(medium_image_path))
    large_images_element.text = str(get_img_path(large_image_path))

    active_element = etree.SubElement(product_element, "active")
    active_element.text = "1"

    tree = etree.ElementTree(prestashop)
    xml_data = etree.tostring(tree.getroot(), pretty_print=True, xml_declaration=True, encoding="UTF-8")

    response = requests.post(f"{API_URL}/products", headers=headers, data=xml_data)

    if response.status_code == 201:
        print(f"Product '{name}' created successfully.")
        id = response.json()["product"]["id"]

        rev_prestashop = etree.Element('prestashop', xmlns_xlink="http://www.w3.org/1999/xlink")
        product_comment_element = etree.SubElement(rev_prestashop, 'product_comment')
        etree.SubElement(product_comment_element, 'id_product').text = str(id)
        etree.SubElement(product_comment_element, 'grade').text = str(review)

        rev_xml_data = etree.tostring(rev_prestashop, pretty_print=True, encoding="UTF-8", xml_declaration=True)
        rev_response = requests.post(f"{API_URL}/product_comments", headers=headers, data=rev_xml_data)

        stock_prestashop = etree.Element('prestashop')
        stock_available_element = etree.SubElement(stock_prestashop, 'stock_available')

        quantity = random.randint(0, 10)
        stock_id_response = requests.get(f"{API_URL}/stock_availables?filter[id_product]={id}", headers=headers)
        stock_id = json.loads(stock_id_response.text)["stock_availables"][0]["id"]

        etree.SubElement(stock_available_element, 'id').text = str(stock_id)
        etree.SubElement(stock_available_element, 'id_product').text = str(id)
        etree.SubElement(stock_available_element, 'id_product_attribute').text = "0"
        etree.SubElement(stock_available_element, 'quantity').text = str(quantity)
        etree.SubElement(stock_available_element, 'id_shop').text = "1"
        etree.SubElement(stock_available_element, 'depends_on_stock').text = "0"
        etree.SubElement(stock_available_element, 'out_of_stock').text = "0"

        stock_xml_data = etree.tostring(stock_prestashop, pretty_print=True, encoding="UTF-8", xml_declaration=True)

        #etree.ElementTree(stock_prestashop).write("stock.xml")

        stock_response = requests.put(f"{API_URL}/stock_availables/{stock_id}", headers=headers, data=stock_xml_data)
        print(f"Stock adding: {stock_response.text}")
    else:
        print(f"Error creating product: {response.text}")



source_data = {
    "categories": [
        {
            "name": "FRANEK_DEBIL_KATEGORIAaaaaaaaa",
            "description": "XD",
            "image_path": "downloaded_images/Włóczki_image.jpg",
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

category_ids = {}
for category in source_data["categories"]:
    category_id = create_category(category["name"], category["description"], category["image_path"])
    if category_id:
        category_ids[category["name"]] = category_id
        for subcategory in category["subcategories"]:
            subcategory_id = create_category(subcategory["name"], subcategory["description"], subcategory["image_path"], category_id)
            if subcategory_id:
                for product in subcategory["products"]:
                    create_product(
                        product["name"],
                        product["price_content"],
                        product["review"],
                        product["description_short"],
                        product["description_long"],
                        product["composition"],
                        product["length"],
                        product["weight"],
                        product["size"],
                        product["crochet_size"],
                        product["needle_size"],
                        category_id,
                        subcategory_id,
                        product["medium_image_path"],
                        product["large_image_path"]
                    )
