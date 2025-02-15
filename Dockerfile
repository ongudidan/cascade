FROM vaultke/php8.3-fpm-nginx

# Copy application files
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Set permissions
RUN chmod -R 777 /var/www/html
RUN chmod -R 777 /var/www/html/assets
# RUN chmod -R 777 /var/www/html/runtime/logs/payment_status.log

# RUN apk add --no-cache php-pdo php-pdo_mysql

# Link crontab file to system crontabs
# RUN ln -sf /var/www/html/crontab /etc/crontabs/root

# RUN echo "* * * * * /usr/bin/php /var/www/html/yii payment/fetch-status >> /var/www/html/runtime/logs/payment_status.log 2>&1" >> /etc/crontabs/root
# RUN echo "* * * * * /usr/bin/php /var/www/html/yii payment/fetch-status" >> /etc/crontabs/root

# RUN echo "*/60 * * * * /usr/bin/php /var/www/html/yii payment/clear-log >> /var/www/html/runtime/logs/payment_status.log 2>&1" >> /etc/crontabs/root


# Start cron, PHP-FPM, and Nginx
CMD sh -c "crond -b -l 8 && php-fpm -D && nginx -g 'daemon off;'"