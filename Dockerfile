# use an existing docker image as a base image 
# we want to use php to start our project why because my 
#project code is written in php 
FROM php:8.0.2-apache
# container working directory 
WORKDIR /var/www/html

# copy everything in current folder ( MYPROJECT2) to working directory
COPY . /var/www/html
RUN apt-get update -u && apt-get install -y libmariadb-dev
ENV PYTHONUNBUFFERED=1
RUN apk add --update --no-cache python3 && ln -sf python3 /usr/bin/python
RUN python3 -m ensurepip
RUN pip3 install --no-cache --upgrade pip setuptools
RUN docker-php-ext-install mysqli

