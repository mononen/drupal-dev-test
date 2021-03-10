#!/bin/bash

echo "------------------STARTING LOCAL DEVELOPMENT ENVIRONMENT------------------"

echo "------------------importing latest database------------------"

./importDB.sh

echo "------------------changing execution permissions------------------"

sudo chmod 777 -R ./drupal-src/web/sites/

echo "------------------composing site up------------------"

docker-compose up -d
