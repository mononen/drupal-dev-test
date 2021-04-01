#!/bin/bash

#utility function for timestamping stuff
timestamp() {
	date +"%Y-%m-%d_%H-%M-%S"
	# date +"%T" # current time
}

echo "------------------REBUILDING DRUPAL CACHES------------------"
# rebuilding caches with drush in 'drew pal' container
docker exec drupal drush cr

echo "------------------SPINNING SITE DOWN------------------"
#spinning site down
docker-compose down

#removing the last file named 'backup-latest-dev.sql'
echo "------------------removing previous 'latest' database file------------------"
printf "Removing..."
rm db-backups/backup-latest-dev.sql
printf "\t \t [OK]\n"

#creating a new sql backup
echo "------------------creating new backup------------------"

docker exec db /usr/bin/mysqldump -u root --password=root_password drupal > db-backups/backup-latest-dev.sql

echo "Backup Complete"

echo "------------------copying newest backup and labelling correctly------------------"
printf "Copying..."

loggedTime=$(timestamp)

cp db-backups/backup-latest-dev.sql db-backups/backup-$loggedTime-dev.sql

printf "\t \t [OK]\n"

echo "------------------BUILDING IMAGE------------------"
#building docker image. Image build will copy db to it.
docker build -t adoah/aidockerfiles:site-demo ./

#prompting user if they want to commit the full repo or not
echo "Do you want to auto commit the full repo (default/ Y) or have you already committed something, and only want to add the database backups? (N)"

read userin

if [ ${userin^^} = 'N' ]
then
	echo "------------------adding latest dev backup to github------------------"
	git add db-backups/backup-latest-dev.sql
	echo "------------------committing to git------------------"
	git commit -m "script automated prod push"
	echo "------------------pushing to git------------------"
	git push
else
	echo "------------------adding everything to github------------------"
	git add .
	echo "------------------committing to git------------------"
	git commit -m "script automated prod push"
	echo "------------------pushing to git------------------"
	git push
fi

echo "------------------PUSHING TO DOCKER HUB------------------"

docker push adoah/aidockerfiles:site-demo
