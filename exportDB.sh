#!/bin/bash

timestamp() {
	date +"%Y-%m-%d_%H-%M-%S"
	# date +"%T" # current time
}
echo "------------------EXPORTING DATABASE------------------"

echo "------------------removing previous 'latest' database file------------------"

rm db-backups/backup-latest-dev.sql

echo "------------------creating new backup------------------"

docker exec db /usr/bin/mysqldump -u root --password=root_password drupal > db-backups/backup-latest-dev.sql

echo "------------------copying newest backup and labelling correctly------------------"

cp db-backups/backup-latest-dev.sql db-backups/backup-$(timestamp)-dev.sql
