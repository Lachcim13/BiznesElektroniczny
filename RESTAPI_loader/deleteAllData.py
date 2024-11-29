import requests
import base64

API_URL = "http://localhost:8080/api"
API_KEY = "L7SW4H4NYKZB1D8EB6MK3B1XFQH5XNKZ"
encoded_api_key = base64.b64encode(f"{API_KEY}:".encode()).decode()

headers = {
    "Authorization": f"Basic {encoded_api_key}",
    "Content-Type": "application/xml"
}

def fetch_ids(resource):
    response = requests.get(f"{API_URL}/{resource}", headers=headers)
    if response.status_code == 200:
        data = response.json()
        return [item["id"] for item in data.get(resource, [])]
    else:
        print(f"Error fetching {resource}: {response.status_code} - {response.text}")
        return []


def delete_resource(resource, resource_id):
    url = f"{API_URL}/{resource}/{resource_id}"
    response = requests.delete(url, headers=headers)
    if response.status_code == 200 or response.status_code == 204:
        print(f"Deleted {resource} with ID {resource_id}")
    else:
        print(f"Error deleting {resource} with ID {resource_id}: {response.status_code} - {response.text}")


print("Deleting all categories...")
category_ids = fetch_ids("categories")
for category_id in category_ids:
    if category_id != 2:
        delete_resource("categories", category_id)

print("Deleting all products...")
product_ids = fetch_ids("products")
for product_id in product_ids:
    delete_resource("products", product_id)


print("Deleting all stock availables...")
stock_ids = fetch_ids("stock_availables")
for stock_id in stock_ids:
    delete_resource("stock_availables", stock_id)

print("All resources deleted successfully!")