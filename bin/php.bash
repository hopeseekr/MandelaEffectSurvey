#!/bin/bash

ROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )/.." && pwd )"

. "${ROOT}"/docker/lib/env.sh

. "${ROOT}"/docker/lib/network.sh

docker run -v /etc/passwd:/etc/passwd:ro --network="${PROJECT_NAME}_default" -e LOCAL_USER_ID=${DOCKER_HOST_USER_ID} -it -v $(pwd):/workdir --rm --entrypoint=/bin/bash phpexperts/php:7 "$@"
