# phpexperts/api-mandelaeffectsurvey-web
FROM phpexperts/api-mandelaeffectsurvey-php:2018-02-01

RUN apt-get update && \
    apt-get install --no-install-recommends --no-install-suggests -y \
        ca-certificates \
        nginx \
        supervisor && \

    # Cleanup
    apt-get remove -y && \
    apt-get autoremove -y && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

ADD supervisor/php-fpm.conf /etc/supervisor/conf.d/php-fpm.conf
ADD supervisor/nginx.conf /etc/supervisor/conf.d/nginx.conf
ADD nginx.conf /etc/nginx/sites-available/default

ADD entrypoint.sh /entrypoint.sh
RUN chmod 700 /entrypoint.sh

WORKDIR /var/www

ENTRYPOINT ["/entrypoint.sh"]
