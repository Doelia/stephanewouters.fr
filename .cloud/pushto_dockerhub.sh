#!/bin/bash

set -e

export DOCKER_DEFAULT_PLATFORM=linux/amd64

docker login
docker build . -f .cloud/Dockerfile -t doelia/portfolio:main
docker push doelia/portfolio:main
