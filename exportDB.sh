#!/bin/bash

timestamp() {
	date +"%Y-%m-%d_%H-%M-%S"
	# date +"%T" # current time
}

docker exec db /usr/bin/mysqldump -u root --password=root_password drupal > db-backups/backup-$(timestamp)-dev.sql
