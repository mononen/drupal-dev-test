#!/bin/bash

echo "------------------BUILDING AND PUSHING TO PRODUCTION------------------"

./buildpush.sh

echo "------------------adding latest dev backup to github------------------"
git add db-backups/backup-latest-dev.sql
echo "------------------committing to git------------------"
git commit -m "script automated prod push"
echo "------------------pushing to git------------------"
git push
