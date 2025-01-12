import string
from selenium import webdriver
from selenium.webdriver import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC, wait
import time
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.support.wait import WebDriverWait
import random


def add_products_to_cart(driver, categories, url):
    for category in categories:
        driver.get(url + category)
        added_products = 0
        while added_products < 5:
            try:
                products = driver.find_elements(By.CLASS_NAME, "product-miniature")

                product = random.choice(products)
                product.click()

                quantity_box = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.NAME, "qty")))

                driver.execute_script("arguments[0].value=''", quantity_box)

                max_quantity_element = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.ID, "product-availability")))
                max_quantity_text = max_quantity_element.find_element(By.TAG_NAME, "span").text.strip()

                import re
                max_quantity_match = re.search(r'\d+', max_quantity_text)
                max_quantity = int(max_quantity_match.group(0))

                quantity_box.send_keys(str(random.randint(1, min(5, max_quantity))))

                add_to_cart = WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.CLASS_NAME, "add-to-cart")))
                add_to_cart.click()
                added_products += 1
                print(f"Product number {added_products} added to cart")
                time.sleep(2)
                driver.get(url + category)
            except Exception as e:
                print("Product not available, choosing another one...")
                driver.get(url + category)
    print("Products added to cart")

def search_and_add_random_product(driver, product_name):
    #B
    search_box = driver.find_element(By.NAME, "s")
    search_box.send_keys(product_name)
    search_box.send_keys(Keys.RETURN)
    time.sleep(3)
    products = driver.find_elements(By.CLASS_NAME, "product-miniature")
    random.choice(products).click()
    add_to_cart = driver.find_element(By.CLASS_NAME, "add-to-cart")
    add_to_cart.click()
    print("Added random product to cart by product name")

def remove_products_from_cart(driver, url):
    #C
    driver.get(url + "/index.php?controller=cart&action=show")
    for i in range(3):
        remove_buttons = driver.find_elements(By.CLASS_NAME, "remove-from-cart")
        remove_buttons[0].click()
        time.sleep(1)
    print("Removed products from cart")

def register_new_account(driver, url):
    #D
    driver.get(url + "/index.php?controller=authentication&create_account=1")

    gender_choice = random.choice(["field-id_gender-1", "field-id_gender-2"])
    driver.find_element(By.ID, gender_choice).click()
    driver.find_element(By.NAME, "firstname").send_keys("Jan")
    driver.find_element(By.NAME, "lastname").send_keys("Kowalski")
    driver.find_element(By.NAME, "email").send_keys(''.join(random.choices(string.ascii_lowercase + string.digits, k=10)) + "@gmail.com")
    driver.find_element(By.NAME, "password").send_keys("password123")
    driver.find_element(By.NAME, "birthday").send_keys("1990-01-01")

    required_checkboxes = ["psgdpr"]
    for checkbox in required_checkboxes:
        checkbox_element = driver.find_element(By.NAME, checkbox)
        if not checkbox_element.is_selected():
            checkbox_element.click()


    optional_checkboxes = ["newsletter"]
    for checkbox in optional_checkboxes:
        if random.choice([True, False]):
            checkbox_element = driver.find_element(By.NAME, checkbox)
            if not checkbox_element.is_selected():
                checkbox_element.click()

    submit_button = driver.find_element(By.CLASS_NAME, "form-control-submit")
    submit_button.click()

    time.sleep(3)
    print("Registered new account")

def checkout_order(driver, url):
    #E
    driver.get(url + "/index.php?controller=order")

    #driver.find_element(By.ID, "field-id_gender-1").click()
    #driver.find_element(By.ID, "field-firstname").send_keys("Jan")
    #driver.find_element(By.ID, "field-lastname").send_keys("Kowalski")
    #driver.find_element(By.ID, "field-email").send_keys("jan.kowalski@gmail.com")
    #driver.find_element(By.NAME, "psgdpr").click()
    #driver.find_element(By.NAME, "customer_privacy").click()
    #driver.find_element(By.CLASS_NAME, "continue").click()

    driver.find_element(By.ID, "field-address1").send_keys("ul. Przykładowa 1")
    driver.find_element(By.ID, "field-postcode").send_keys("10-001")
    driver.find_element(By.ID, "field-city").send_keys("Warszawa")
    driver.find_element(By.NAME, "confirm-addresses").click()

    #G
    carrier_buttons = driver.find_elements(By.CSS_SELECTOR, ".delivery-option.js-delivery-option label")

    for label in carrier_buttons:
        if "Kurier-kurierowy" in label.text:
            label.click()
            break
    driver.find_element(By.NAME, "confirmDeliveryOption").click()
    #F
    payment_option = driver.find_element(By.ID, "payment-option-2")
    payment_option.click()
    driver.find_element(By.NAME, "conditions_to_approve[terms-and-conditions]").click()
    #H
    button = driver.find_element(By.CSS_SELECTOR, "button.btn.btn-primary.center-block")
    button.click()
    print("Checkout order")

def check_order_status(driver, url):
    #I
    driver.get(url + "/index.php?controller=history")
    driver.find_element(By.CSS_SELECTOR, "td.text-sm-center.order-actions a[data-link-action='view-order-details']").click()
    status = driver.find_element(By.CLASS_NAME, "label.label-pill.bright").text
    print(f"Order status: {status}")
    print("Checked order status")

def download_invoice(driver, url):
    #J
    driver.get(url + "/index.php?controller=history")
    driver.find_element(By.CSS_SELECTOR, "td.text-sm-center.order-actions a[data-link-action='view-order-details']").click()
    driver.find_element(By.CSS_SELECTOR, "a[href*='controller=pdf-invoice']").click()
    print("Downloaded invoice")

def generate(url, categories):
    options = webdriver.ChromeOptions()
    #options.add_argument('--headless')
    options.add_argument('--disable-gpu')
    options.add_argument('--no-sandbox')
    service = Service(executable_path='/usr/bin/chromedriver')
    driver = webdriver.Chrome(service=service, options=options)
    driver.get(url)
    button1 = driver.find_element(By.ID, "details-button")
    if button1 is not None:
        button1.click()
        driver.find_element(By.ID, "proceed-link").click()

    try:
        register_new_account(driver, url)
        add_products_to_cart(driver, categories, url)
        search_and_add_random_product(driver, "La Passion Freesia 48 różowy")
        remove_products_from_cart(driver, url)
        checkout_order(driver, url)
        check_order_status(driver, url)
        download_invoice(driver, url)
    finally:
        driver.quit()
        print("Testing ended")


if __name__ == "__main__":
    url = "https://localhost:19319"
    categories = ["/index.php?id_category=349&controller=category", "/index.php?id_category=340&controller=category"]

    start_time = time.time()
    generate(url, categories)
    end_time = time.time()
    elapsed_time = end_time - start_time
    print(f"Testing took: {elapsed_time} seconds")

