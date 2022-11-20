# Symfony API - JWT / Refresh Token

PHP >= 8.1

## Configuration

`.env.local`

```env
DATABASE_URL="mysql://user:pass@127.0.0.1:3306/jwt_refresh?serverVersion=8&charset=utf8mb4"
```

```bash
composer install
php bin/console d:d:c # Create DB
php bin/console d:m:m # Run Migrations
php bin/console d:f:l # Load fixtures
```

## Run

Install [Symfony CLI](https://symfony.com/download); then run :

```bash
# Default port : 8000
symfony serve --no-tls
```
