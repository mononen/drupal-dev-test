#!/bin/bash

./exportDB.sh

echo "------------------BUILDING REPO------------------"

docker build -t adoah/aidockerfiles:site-demo ./
