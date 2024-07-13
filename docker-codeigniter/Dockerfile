FROM php:8.1-apache

# Install modules
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions gd mysqli xdebug

RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
RUN echo "date.timezone = Asia/Tokyo" >> /usr/local/etc/php/php.ini

# PHP debug settings
COPY apache-php/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Install composer
RUN curl -sS https://getcomposer.org/installer \
        | php -- --install-dir=/usr/local/bin \
        && mv /usr/local/bin/composer.phar /usr/local/bin/composer

# Configure apache
RUN echo "error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT" >> /usr/local/etc/php/conf.d/error.ini
RUN echo "log_errors = On" >> /usr/local/etc/php/conf.d/error.ini
COPY apache-php/docker-php.conf /etc/apache2/conf-available/docker-php.conf
RUN a2enmod rewrite && \
	a2enmod headers

RUN apt-get update && apt-get install -y wget libxrender1 libfontconfig1 libx11-dev libjpeg62-turbo libxtst6 fontconfig xfonts-75dpi xfonts-base libzip-dev zip
RUN docker-php-ext-install zip
RUN docker-php-ext-install bcmath
RUN docker-php-ext-enable xdebug

# wkhtmltopdf
RUN wget https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6.1-3/wkhtmltox_0.12.6.1-3.bookworm_arm64.deb && \
	dpkg -i wkhtmltox_0.12.6.1-3.bookworm_arm64.deb

COPY src/assets/fonts/notoserifjp/NotoSerifJP-Light.otf /usr/share/fonts/
COPY src/assets/fonts/notoserifjp/NotoSerifJP-SemiBold.otf /usr/share/fonts/
RUN fc-cache -fv
