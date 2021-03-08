#!/bin/bash

mysql -u root -D drupal --password=root_password -e  "show tables" -s | egrep "^cache_" | xargs -I "@@" echo mysql -u root --password=root_password -D drupal -e "DELETE FROM @@"

mysql -u root -D drupal --password=root_password -e  "show tables" -s | egrep "^cache_" | xargs -I "@@" mysql -u root --password=root_password -D drupal -e "DELETE FROM @@"

