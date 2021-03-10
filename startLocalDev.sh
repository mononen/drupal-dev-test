#!/bin/bash

./importDB.sh

sudo chmod 777 -R ./drupal-src/web/sites/

docker-compose up -d
