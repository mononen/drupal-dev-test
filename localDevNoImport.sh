#!/bin/bash

echo "------------------STARTING LOCAL DEVELOPMENT ENVIRONMENT WITHOUT LOADING NEWEST DATABASE------------------"

echo "WARNING: ENSURE THAT YOU DON'T WANT THE LATEST DATABASE IMPORTED"

echo "------------------changing execution permissions------------------"

sudo chmod 777 -R ./drupal-src/web/sites/

echo "------------------composing site up------------------"

docker-compose up -d
