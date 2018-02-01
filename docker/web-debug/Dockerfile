# phpexperts/api-mandelaeffectsurvey-web-debug
FROM phpexperts/api-mandelaeffectsurvey-web:2018-02-01

COPY xdebug.conf /tmp

RUN apt-get update && \
    apt-get install -y php-xdebug && \

    # Configure XDebug
    cat /tmp/xdebug.conf >> /etc/php/7.1/mods-available/xdebug.ini && \
    rm /tmp/xdebug.conf && \

    # Cleanup
    apt-get remove -y && \
    apt-get autoremove -y && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*
