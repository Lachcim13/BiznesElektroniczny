#!/bin/bash
#docker-compose up -d
docker stack deploy -c docker-compose.yml BE_193192 --withregistry-auth

echo "Running SQL dump..."
docker exec -i admin-mysql_db mysql -uroot -pstudent BE_193192 < dump.sql

echo "Services are up and SQL dump has been applied."