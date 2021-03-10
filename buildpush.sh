#!/bin/bash

./build.sh

echo "------------------PUSHING TO DOCKER HUB------------------"

docker push adoah/aidockerfiles:site-demo
