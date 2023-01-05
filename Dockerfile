FROM ubuntu:20.04


# BLOCK : Make PHP works
RUN apt-get update \
    && apt-get -y install software-properties-common \
    && add-apt-repository ppa:ondrej/php
# FIN BLOCK

RUN apt-get -y update \
    && apt-get install -y \
    php8.0-cli

COPY . /app

WORKDIR /app
