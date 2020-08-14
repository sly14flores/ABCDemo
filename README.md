<p align="center">ABC Demo</p>

## About

A Laravel Demo application with login, registration, and CRUD module with api:

## System Requirements

The following are required to function properly.

*   Node 6.0+
*   Php Composer 1.9+
*   Xampp 3.2+

## Getting Started

Install npm package with the following command:

``` shell
$   npm install
```
Install composer packages with the following command:

``` shell
$   composer install
```

## Installation

Extract and copy ABCDemo folder in xampp htdocs directory
Copy .env into ABCDemo directory
Start xampp and open localhost/phpmyadmin in browser
Create abcdemo database
Open cmd and cd into xampp directory e.g. C:\xampp
``` shell
C:\>cd xampp\htdocs
```

Cd into ABCDemo
``` shell
C:\xampp\htdocs>cd ABCDemo
```

Install npm packages
``` shell
C:\xampp\htdocs\ABCDemo>npm install
```

Install npm packages
``` shell
C:\xampp\htdocs\ABCDemo>composer install
```

Migrate database
``` shell
C:\xampp\htdocs\ABCDemo>php artisan migrate
```

Since there are additional configurations in apache2 to run a Laravel application we will use the Laravel built-in server.
Run Laravel built-in web server and browse localhost:8000
``` shell
C:\xampp\htdocs\ABCDemo>php artisan serve
Laravel development server started: http://127.0.0.1:8000
[Fri Aug 14 13:13:32 2020] PHP 7.4.1 Development Server (http://127.0.0.1:8000) started
```



