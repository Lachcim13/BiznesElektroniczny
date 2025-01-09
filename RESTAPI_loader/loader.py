import random
import requests
from lxml import etree
import base64
from pathlib import Path
import json
import re
import os


API_URL = "https://localhost:8443/api"
API_KEY = "L7SW4H4NYKZB1D8EB6MK3B1XFQH5XNKZ"

lang_id_str = "2"

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


def get_weight_str(weight_str):
    weight = 0.0
    match = re.search(r'\d+', weight_str)
    if match:
        weight = float(f"0.{match.group()}")
    return str(weight)


def check_feature_value(feature_id, search_value):
    endpoint = f"{API_URL}/product_feature_values"
    params = {
        "filter[id_feature]": feature_id,
        "filter[value]": search_value
    }

    response = requests.get(endpoint, params=params, headers=headers, verify=False)
    if response.status_code == 200 or response.status_code == 201 or response.status_code == 204:
        data = json.loads(response.text)
        if data == [] or data is None:
            return False, None
        id = data['product_feature_values'][0].get('id', None)
        if id is None:
            return False, None
        return True, id
    else:
        print(f"Error: {response.status_code}, {response.text}")
        return False, None

def create_feature_value(feature_name, value):
    if value is None or value == "":
        return "", ""
    feature_id = int(get_feature_id_as_str_by_name(feature_name))

    val_exists, val_id = check_feature_value(feature_id, value)

    if val_exists:
        return feature_id, val_id

    prestashop = etree.Element('prestashop', xmlns_xlink="http://www.w3.org/1999/xlink")
    product_feat_val_element = etree.SubElement(prestashop, "product_feature_value")
    etree.SubElement(product_feat_val_element, "id_feature").text = str(feature_id)
    product_feat_val_element = etree.SubElement(product_feat_val_element, "value")
    etree.SubElement(product_feat_val_element, "language", id=lang_id_str).text = value

    tree = etree.ElementTree(prestashop)
    xml_data = etree.tostring(tree.getroot(), pretty_print=True, xml_declaration=True, encoding="UTF-8")

    response = requests.post(f"{API_URL}/product_feature_values", headers=headers, data=xml_data, verify=False)
    if response.status_code != 200 and response.status_code != 201:
        print(response.status_code)
        print(response.text)
        return None, None

    data = json.loads(response.text)
    feature_value_id = data['product_feature_value']['id']
    return feature_id, feature_value_id

def get_img_path(current_path):
    if current_path == '' or current_path is None:
        return None
    current_path = current_path.replace("\\", "/")
    relative_path = Path(f"{current_path}")
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
    response = requests.post(f"{API_URL}/categories", headers=headers, data=xml_data, verify=False)

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
            verify=False
        )

        if img_response.status_code == 201 or img_response.status_code == 200:
            print(f"Cover image successfully added to category {id}!")
        else:
            print(f"Error uploading cover image: {img_response.status_code}, {img_response.text}")

        return id
    else:
        print(f"Error creating category: {response.text}")
        return None


def create_product(name, price, description_short, description_long, composition, length,
                   weight, size, crochet_size,
                   needle_size, category_id, subcategory_id, medium_image_path, large_image_path):
    prestashop = etree.Element('prestashop', xmlns_xlink="http://www.w3.org/1999/xlink")
    product_element = etree.SubElement(prestashop,"product")


    name_element = etree.SubElement(product_element, "name")
    etree.SubElement(name_element, "language", id=lang_id_str).text = name

    price_element = etree.SubElement(product_element, "price")
    price_element.text = str(round(float(price) / 1.23, 2))

    etree.SubElement(product_element, "weight").text = get_weight_str(weight)

    etree.SubElement(product_element, "show_price").text = "1"
    etree.SubElement(product_element, "additional_delivery_times").text = "1"

    etree.SubElement(product_element, "available_for_order").text = "1"

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

    category_element_def = etree.SubElement(categories, "category")
    etree.SubElement(category_element_def, "id").text = "2"
    etree.SubElement(product_element, "id_shop_default").text = "1"
    etree.SubElement(product_element, "id_category_default").text = "2"

    features_elements = etree.SubElement(associations, "product_features")

    temp_feature_id, temp_feature_value_id = None, None

    temp_feature_id, temp_feature_value_id = create_feature_value("Skład:", composition)
    if temp_feature_id != "" and temp_feature_value_id != "":
        composition_feature = etree.SubElement(features_elements, "product_feature")
        etree.SubElement(composition_feature, "id").text = str(temp_feature_id)
        etree.SubElement(composition_feature, "id_feature_value").text = str(temp_feature_value_id)


    temp_feature_id, temp_feature_value_id = create_feature_value("Waga motka:", weight)
    if temp_feature_id != "" and temp_feature_value_id != "":
        weight_feature = etree.SubElement(features_elements, "product_feature")
        etree.SubElement(weight_feature, "id").text = str(temp_feature_id)
        etree.SubElement(weight_feature, "id_feature_value").text = str(temp_feature_value_id)


    temp_feature_id, temp_feature_value_id = create_feature_value("Rozmiar:", size)
    if temp_feature_id != "" and temp_feature_value_id != "":
        size_feature = etree.SubElement(features_elements, "product_feature")
        etree.SubElement(size_feature, "id").text = str(temp_feature_id)
        etree.SubElement(size_feature, "id_feature_value").text = str(temp_feature_value_id)


    temp_feature_id, temp_feature_value_id = create_feature_value("Zalecany rozmiar szydełka:", crochet_size)
    if temp_feature_id != "" and temp_feature_value_id != "":
        crochet_size_feature = etree.SubElement(features_elements, "product_feature")
        etree.SubElement(crochet_size_feature, "id").text = str(temp_feature_id)
        etree.SubElement(crochet_size_feature, "id_feature_value").text = str(temp_feature_value_id)


    temp_feature_id, temp_feature_value_id = create_feature_value("Zalecany rozmiar drutów:", needle_size)
    if temp_feature_id != "" and temp_feature_value_id != "":
        needle_size_feature = etree.SubElement(features_elements, "product_feature")
        etree.SubElement(needle_size_feature, "id").text = str(temp_feature_id)
        etree.SubElement(needle_size_feature, "id_feature_value").text = str(temp_feature_value_id)


    temp_feature_id, temp_feature_value_id = create_feature_value("Długość:", length)
    if temp_feature_id != "" and temp_feature_value_id != "":
        length_feature = etree.SubElement(features_elements, "product_feature")
        etree.SubElement(length_feature, "id").text = str(temp_feature_id)
        etree.SubElement(length_feature, "id_feature_value").text = str(temp_feature_value_id)

    etree.SubElement(product_element, "state").text = "1"

    active_element = etree.SubElement(product_element, "active")
    active_element.text = "1"

    etree.SubElement(product_element, 'id_tax_rules_group').text = "1"

    tree = etree.ElementTree(prestashop)
    tree.write("product.xml", pretty_print=True)
    xml_data = etree.tostring(tree.getroot(), pretty_print=True, xml_declaration=True, encoding="UTF-8")

    response = requests.post(f"{API_URL}/products", headers=headers, data=xml_data, verify=False)

    if response.status_code == 201:
        print(f"Product '{name}' created successfully.")
        id = response.json()["product"]["id"]

        #Images
        #TODO: Upload medium photo
        #medium_image_text = str(get_img_path(medium_image_path))
        large_images_text = str(get_img_path(large_image_path))

        url = f"{API_URL}/images/products/{id}"

        if large_images_text is not None:
            img_headers = {
                "Authorization": f"Basic {encoded_api_key}"
            }

            img_ok = True
            img_files = None
            if os.path.exists(large_images_text):
                img_files = {
                    'image': open(large_images_text, 'rb')
                }
            else:
                print(f"File not found: {large_images_text}")
                img_ok = False

            if img_ok:
                img_response = requests.post(
                    url,
                    files=img_files,
                    headers=img_headers,
                    verify=False
                )

                if img_response.status_code == 201 or img_response.status_code == 200:
                    print(f"Cover image successfully added to product {id}!")
                else:
                    print(f"Error uploading cover image: {img_response.status_code}, {img_response.text}")
            else:
                print(f"Error uploading cover image: {name}, bad image")
        #Stock
        stock_prestashop = etree.Element('prestashop')
        stock_available_element = etree.SubElement(stock_prestashop, 'stock_available')

        quantity = random.randint(0, 10)
        stock_id_response = requests.get(f"{API_URL}/stock_availables?filter[id_product]={id}", headers=headers, verify=False)
        stock_id = json.loads(stock_id_response.text)["stock_availables"][0]["id"]

        etree.SubElement(stock_available_element, 'id').text = str(stock_id)
        etree.SubElement(stock_available_element, 'id_product').text = str(id)
        etree.SubElement(stock_available_element, 'id_product_attribute').text = "0"
        etree.SubElement(stock_available_element, 'quantity').text = str(quantity)
        etree.SubElement(stock_available_element, 'id_shop').text = "1"
        etree.SubElement(stock_available_element, 'depends_on_stock').text = "0"
        etree.SubElement(stock_available_element, 'out_of_stock').text = "0"

        stock_xml_data = etree.tostring(stock_prestashop, pretty_print=True, encoding="UTF-8", xml_declaration=True)
        stock_response = requests.put(f"{API_URL}/stock_availables/{stock_id}", headers=headers, data=stock_xml_data, verify=False)
        #print(stock_response.text)
    else:
        print(f"Error creating product: {response.text}")

    #requests.put(f"{API_URL}/products/{response.json()["product"]["id"]}", headers=headers, data=xml_data, verify=False)


def generate():
    filename = "Włóczki.json"
    with open(f"../scrapper_results/{filename}", 'r') as file:
        source_data = json.load(file)
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

def update_products():
    response = requests.get(f"{API_URL}/products", headers=headers, verify=False)
    data = json.loads(response.content)
    for product in data["products"]:
        id = product["id"]
        product_response = requests.get(f"{API_URL}/products/{id}", headers=headers, verify=False)
        print(product_response.content)
        price = json.loads(product_response.content)["product"]["price"]
        product_name = json.loads(product_response.content)["product"]["name"]
        prestashop = etree.Element('prestashop')
        product_element = etree.SubElement(prestashop, 'product')


        price = float(price) / 1.23
        price = round(price, 2)

        etree.SubElement(product_element, 'id').text = str(id)
        etree.SubElement(product_element, 'name').text = str(product_name)
        etree.SubElement(product_element, 'state').text = "1"
        etree.SubElement(product_element, 'active').text = "1"
        etree.SubElement(product_element, 'id_default_category').text = "2"
        etree.SubElement(product_element, 'id_tax_rules_group').text = "1"
        etree.SubElement(product_element, 'price').text = str(price)
        xml_data = etree.tostring(prestashop, pretty_print=True, encoding="UTF-8", xml_declaration=True)
        response = requests.put(f"{API_URL}/products/{id}", headers=headers, data=xml_data, verify=False)
        print(response.content)
        print("")


#update_products()
print("Zaczynam wstawianie")
generate()
print("Zakonczylem wstawianie")