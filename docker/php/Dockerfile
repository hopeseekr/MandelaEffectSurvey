# phpexperts/api-mandelaeffectsurvey-php
FROM chekote/php:7.1.13

RUN apt-get update && \

    # composer requirements
    apt-get install -y git && \
    apt-get install -y php${PHP_VERSION}-zip && \

    # phpunit requirements
    apt-get install -y php${PHP_VERSION}-dom && \

    # basic requirements
    apt-get install -y php${PHP_VERSION}-bcmath && \
    apt-get install -y php${PHP_VERSION}-gmp && \
    apt-get install -y php${PHP_VERSION}-pgsql && \
    apt-get install -y php${PHP_VERSION}-redis && \
    apt-get install -y php${PHP_VERSION}-gd && \
    apt-get install -y php${PHP_VERSION}-dev libmagickwand-dev php-imagick imagemagick && \

    # match nginx www-data user id so both containers can read/write the same files
    usermod -u 1000 www-data && \

    # Cleanup
    apt-get remove -y && \
    apt-get autoremove -y && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*
