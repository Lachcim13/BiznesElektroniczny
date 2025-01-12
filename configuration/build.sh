#!/bin/bash
docker-compose up -d

echo "Waiting for MySQL container to be ready..."
until docker exec admin-mysql_db mariadb -uroot -padmin --silent -e "SELECT 1"; do
  echo "Waiting for MySQL to be ready..."
  sleep 5
done

echo "Running SQL dump..."
docker exec -i admin-mysql_db mariadb -uroot -padmin prestashop < dump.sql

echo "Services are up and SQL dump has been applied."