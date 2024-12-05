# Laravel Ecommerce Japanese Book

This project runs with Laravel version 8.x.

## Getting started
``` bash
Install xampp newest version: https://www.apachefriends.org/download.html
Install composer: https://getcomposer.org/download/
Install npm: https://nodejs.org/en/download/
git clone https://github.com/truongnm-0205/Ecommerce_Graduation_Thesi
```
``` bash
# install dependencies
cd Ecommerce_Graduation_Thesi
composer install
npm install

# create .env file and generate the application key
cp .env.example .env
php artisan key:generate
Run php artisan migrate

Then launch the server:
php artisan serve
```

The Laravel sample project is now up and running! Access it at http://localhost:8000.

