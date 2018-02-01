#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

. "${DIR}"/../bin/lib/images.sh

if [ -z "$1" ]; then
    TAG=$(date '+%Y-%m-%d')
else
    TAG="$1"
fi

docker build php       --tag="${PHP_ACCOUNT}/${PHP_REPO}:${TAG}"
docker build php-debug --tag="${PHP_DEBUG_ACCOUNT}/${PHP_DEBUG_REPO}:${TAG}-debug"
docker build web       --tag="${WEB_ACCOUNT}/${WEB_REPO}:${TAG}"
docker build web-debug --tag="${WEB_DEBUG_ACCOUNT}/${WEB_DEBUG_REPO}:${TAG}-debug"
#docker build web-prod  --tag="${WEB_PROD_ACCOUNT}/${WEB_PROD_REPO}:${TAG}-prod"
