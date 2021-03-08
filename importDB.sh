#!/bin/bash

cat db-backups/$1 | docker exec -i db /usr/bin/mysql -u root --password=root_password drupal
