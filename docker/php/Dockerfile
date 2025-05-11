### Builder
FROM php:8.3.21-cli-alpine

WORKDIR /app

COPY --from=mlocati/php-extension-installer:2.7.34 /usr/bin/install-php-extensions /usr/local/bin/

RUN \
  apk -U upgrade && \
  install-php-extensions \
    @composer-2 \
    pcntl \
    opcache \
    xdebug \
    && rm -rf /var/cache/apk/*