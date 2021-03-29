#!/bin/bash

docker exec -i db /usr/bin/mysql -u root -D drupal --password=root_password -e  "show tables" -s | egrep "^cache_" | xargs -I "@@" mysql -u root --password=root_password -D drupal -e "DELETE FROM @@"

# docker exec -i db /usr/bin/mysql -u root -D drupal --password=root_password -e  "show tables" -s | egrep "^cache_" | xargs -I "@@" mysql -u root --password=root_password -D drupal -e "DELETE FROM @@"

