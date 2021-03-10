#!/bin/bash

echo "------------------STOPPING LOCAL DEVELOPMENT ENVIRONMENT WITHOUT EXPORTING DATABASE------------------"

docker-compose down

echo "again, please make sure to run 'toProd.sh' or 'exportDB.sh' before committing if you need the database exported."
echo "and especially run 'toProd.sh' if you're pushing to production."
