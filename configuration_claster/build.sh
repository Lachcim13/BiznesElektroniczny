#!/bin/bash
docker stack deploy -c docker-compose.yml BE_193192 --with-registry-auth

echo "Running SQL dump..."
docker exec -i $(docker ps --filter "name=admin-mysql_db" -q)  mysql -uroot -pstudent BE_193192 < dump.sql
docker exec -i $(docker ps --filter "name=admin-mysql_db" -q)  mysql -uroot -pstudent -e "UPDATE ps_configuration SET value = \"localhost:19319\" WHERE name LIKE \"%SHOP_DOMAIN%\"" BE_193192
docker exec -i $(docker ps --filter "name=admin-mysql_db" -q)  mysql -uroot -pstudent -e "UPDATE ps_shop_url SET domain = \"localhost:19319\", domain_ssl = \"localhost:19319\" WHERE id_shop = 1" BE_193192

echo "Services are up and SQL dump has been applied."