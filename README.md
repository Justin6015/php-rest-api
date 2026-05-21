# PHP REST-API

CURD REST-API with PHP, MySQL

A practice project.

## Technologien

PHP, MySQL, Docker

## Command

Container start, detached

`docker compose up -d`

### setup

Create DB and Table in phpMyAdmin [`create_db.sql`](./scripts/create_db.sql)

Insert example data: [`insert_accounts_example.sql`](./scripts/insert_accounts_example.sql)

---

get

browser: `http://localhost:8080/index.php`

or

cmd: `curl http://localhost:8080/index.php`

## Postman Collection

## Explaniations

[`.htaccess`](src/.htaccess)  
Works with apache.  
Rewrites every path to [./index.php](src/index.php)
