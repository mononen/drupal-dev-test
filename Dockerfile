FROM adoah/aidockerfiles:php7.2-fpm-dev

# WORKDIR /home/node/app

# use apk instead of apt 'cause this is built in alpine
# --no-cache prevents creation of /var/cache & autoruns update
#RUN apk add --no-cache php7 php-zip php7-xml php-mbstring php-gd openrc libpng libpng-dev && docker-php-ext-install gd && apk del libpng-dev

#RUN apk add --no-cache php7 php7-opcache php-zip php7-xml php-mbstring php-gd openrc libpng libpng-dev && docker-php-ext-install gd mysqli pdo pdo_mysql && apk del libpng-dev

COPY drupal-src/composer.json ./

RUN composer install

#worst comes to worst, this just overwrites the freshly installed stuff, eval if install is needed if copying

COPY drupal-src/vendor/ ./vendor/
COPY drupal-src/web/ ./web/

#hopefully this fixes the opcache error
COPY drupal-src/php.ini /etc/php7/php.ini

#EXPOSE 6967

#CMD rc-service php-fpm7 start && tail -F /var/log/php7.2-fpm.log

#CMD tail -F /var/log/php7.2-fpm.log

# Add user for laravel application
RUN addgroup -g 1000 www
RUN adduser -u 1000 -G www www --disabled-password

#Copy existing application directory contents
#COPY . /var/www

#Copy existing application directory permissions
#COPY --chown=www:www . /var/www

RUN chown -R www:www /app/web/sites/
RUN chown -R www:www /tmp/cache/

# Change current user to www
USER www

#EXPOSE 9000
#CMD ["php-fpm"]
