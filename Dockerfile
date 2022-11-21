FROM php:7.4-apache
RUN apt-get -y update \
    && apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli \
    && docker-php-ext-install pdo_mysql

COPY .docker/php/sites-available/site.conf /etc/apache2/sites-enabled/site.conf
RUN a2enmod rewrite
RUN service apache2 restart

#RUN apt install --no-install-recommends php8.1
#RUN apt-get install -y php8.1-cli php8.1-common php8.1-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath php8.1-intl
# php8.1-cli         - command interpreter, useful for testing PHP scripts from a shell or performing general shell scripting tasks
# php8.1-common      - documentation, examples, and common modules for PHP
# php8.1-mysql       - for working with MySQL databases
# php8.1-zip         - for working with compressed files
# php8.1-gd          - for working with images
# php8.1-mbstring    - used to manage non-ASCII strings
# php8.1-curl        - lets you make HTTP requests in PHP
# php8.1-xml         - for working with XML data
# php8.1-bcmath      - used when working with precision floats