# PHP REST-API

CURD REST-API with PHP, MySQL

## Technologien

PHP, MySQL, Docker

## Command

Container start, detached

`docker compose up -d`

get

browser: `http://localhost:8080/index.php`

or

cmd: `curl http://localhost:8080/index.php`

## Postman Collection

## Explaniations

[`.htaccess`](src/.htaccess)  
Works with apache.  
Rewrites every path to [./index.php](src/index.php)
