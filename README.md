# ConvertedIn Task

## Installation

First clone the repository.

```
git clone https://github.com/ibrahimmalii/product-system.git
```

Then copy the .env.example file to .env file.

```
cp .env.example .env
```

Then install the dependencies.

```
composer install
```

Then generate the application key.

```
php artisan key:generate
```

Then create a database and add the database credentials to the .env file.

Then run the migrations with seed.

```
php artisan migrate --seed
```

Then visit the product-system.test/login and login with the following credentials:

```
Email:george@example.com
Password:password
```

Then start to use the application end points. 
