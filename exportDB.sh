#!/bin/bash

timestamp() {
	date +"%Y-%m-%d_%H-%M-%S"
	# date +"%T" # current time
}

rm db-backups/backup-latest-dev.sql

docker exec db /usr/bin/mysqldump -u root --password=root_password drupal > db-backups/backup-latest-dev.sql

cp db-backups/backup-latest-dev.sql db-backups/backup-$(timestamp)-dev.sql
