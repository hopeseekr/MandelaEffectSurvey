# phpexperts/api-mandelaeffectsurvey-web-prod
FROM phpexperts/api-mandelaeffectsurvey-web:2018-02-01

# copy the site files into the image (see .dockerignore file)
ADD . /var/www
ADD docker/web-prod/entrypoint.sh /entrypoint.sh

# clean up the copied files
RUN chmod 700 /entrypoint.sh && \
    rm -rf docker && \
    chown -R www-data:www-data /var/www && \
    mv /var/www/.env.prod /var/www/.env && \

    # update the nginx hostname from .local to .com
    sed -i 's!\.local!\.com!g' /etc/nginx/sites-available/default

# CMD is required to run on Heroku
CMD /entrypoint.sh
