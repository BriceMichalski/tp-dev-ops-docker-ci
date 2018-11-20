TP-docker-symfony-ci  
===================

Prerequisites
------------
- install docker-ce
- install docker-compose

Used docker images
------------
- nginx:1.15.5-alpine
- custom php ( based on php:7.2.11-fpm ) (cf /docker/php/Dockerfile)
- mysql:5.7

Dependency
------------
- tp-devops-docker-monitoring ( cf https://github.com/BriceMichalski/tp-devops-docker-monitoring )


Install
------------
From project path run the following command:
```
$  docker-compose pull
$  make .env
$  docker pull composer/composer
$  docker run --rm -v $(pwd):/app composer/composer install
```
Once done edit .env with your custom variables

Start
------------
```
$  make start
```
and browse http://localhost:8081/

Stop
------------
```
$  make stop
```
