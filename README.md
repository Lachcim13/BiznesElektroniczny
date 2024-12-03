# Biznes Elektroniczny - Sklep Internetowy oparty na PrestaShop

## Opis Projektu
Projekt jest sklepem internetowym opartym na platformie PrestaShop. Został zrealizowany przez zespół składający się z trzech członków. Sklep wykorzystuje Docker do uruchomienia środowiska i PrestaShop 1.7.8 do zarządzania sprzedażą.

## Wykorzystane Technologie
- **PrestaShop**: Wersja 1.7.8
- **Docker**

## Zespół
- **Maciej Góralczyk** – 193302
- **Franciszek Gwarek** – 193192
- **Michał Hawrylik** – 193465

## Jak Uruchomić Projekt

Aby uruchomić projekt lokalnie, postępuj zgodnie z poniższymi krokami:

1. Upewnij się, że masz odpowiednie uprawnienia do plików:
sudo chmod -R 777 ./

2. Włącz dockera oraz załaduj
cd configuration
docker compose up -d

3. Jeżeli chcesz wgrać bazę danych
docker exec -i some-mysql mariadb -uroot -padmin prestashop < dump.sql


## Jak Zapisać Zmiany W Bazie
docker exec some-mysql mariadb-dump -uroot -padmin prestashop --ignore-table=prestashop.ps_employee_account > dump.sql