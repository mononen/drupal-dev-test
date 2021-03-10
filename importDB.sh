#!/bin/bash

cat db-backups/backup-latest-dev.sql | docker exec -i db /usr/bin/mysql -u root --password=root_password drupal
