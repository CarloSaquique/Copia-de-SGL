FROM richarvey/nginx-php-fpm:latest

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_NAME GrupoSGL
ENV APP_ENV local
ENV APP_DEBUG true
ENV LOG_CHANNEL stderr

ENV DB_CONNECTION mysql
ENV DB_HOST aws.connect.psdb.cloud
ENV DB_PORT 3306
ENV DB_DATABASE sgl
ENV DB_USERNAME yarm52vhkf2ztpcvosqc
ENV DB_PASSWORD pscale_pw_wxeBk0YqfFmOp1TkSqCUssyZ1B5QNP0x1d9cgwYqPwU
ENV MYSQL_ATTR_SSL_CA cert/cacert.pem

ENV MAIL_MAILER smtp
ENV MAIL_HOST live.smtp.mailtrap.io
ENV MAIL_PORT 2525
ENV MAIL_USERNAME api
ENV MAIL_PASSWORD 5e260d63e70586c30a6bb2ff8d4250e7
ENV MAIL_ENCRYPTION tls

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]
