#!/usr/bin/env bash

# Checks the exit code of the previous command and bails if it's not zero
exitCheck() {
  if [ $1 != 0 ]; then
    exit $1
  fi
}

# $PORT is set by Heroku
echo "=> Setting nginx port to $PORT"
sed -i "s/listen 80/listen $PORT/g" /etc/nginx/sites-available/default

supervisord -n
