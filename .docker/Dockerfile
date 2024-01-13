FROM php:8.2-cli-alpine3.18

RUN apk add --no-cache shadow bash
RUN touch /root/.bashrc | echo "PS1='\w\$ '" >> /root/.bashrc
RUN touch /home/www-data/.bashrc | echo "PS1='\w\$ '" >> /home/www-data/.bashrc
RUN rm -rf /var/www/html
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
EXPOSE 9000
CMD ["php", "-S", "0.0.0.0:9000"]