# Backend Challenge - Hack The Future

<br>

## Indications to run project

1. Clone the project
```bash
git clone git@github.com:luisbodev/Backend-Challenge-Hack-The-Future.git
```

2. Install dependencies
```bash
cd backend-challenge
composer install
```

3. Create .env file from .env.example
```bash
cp .env.example .env
```

4. Generate Laravel API key
```bash
php artisan key:generate
```

4. Config Database in .env file according your credentials
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

4. Migrate and seed database if your are not using the Dumb Database included in the repository
```bash
php artisan migrate --seed
```

5. Run app
```bash
php artisan serve
```


<hr>

# Postman API Documentation

https://documenter.getpostman.com/view/12214038/2s93RUvYBV



