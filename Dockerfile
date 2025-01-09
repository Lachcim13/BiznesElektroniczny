FROM prestashop/prestashop:1.7.8

ENV DB_SERVER=some-mysql \
    DB_NAME=prestashop \
    DB_USER=root \
    DB_PASSWD=admin \
    PS_FOLDER_ADMIN=admin-dev \
    PS_FOLDER_INSTALL=install-dev \
    PS_DEV_MODE=1 \
    PS_INSTALL_AUTO=1 \
    PS_DOMAIN=localhost:8080

COPY ./configuration/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./configuration/certs /etc/ssl/certs
COPY ./prestashop_files /var/www/html

RUN rm -rf /var/www/html/install

RUN a2enmod ssl

EXPOSE 80 443

CMD ["/bin/bash", "-c", "apache2-foreground"]