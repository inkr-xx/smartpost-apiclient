FROM php:8.5-cli

RUN apt-get update && apt-get -y install \
    git \
    unzip \
    --no-install-recommends \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php && \
    php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm /tmp/composer-setup.php

WORKDIR /app

COPY . /app

CMD ["tail", "-f", "/dev/null"]
