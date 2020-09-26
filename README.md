<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

ToursTravel is a group project for Application Programming for the Internet unit developed entirely with laravel. 

Setting up the project locally;
1. git clone https://github.com/muchaisam/Tours-Travel

change directory to the project
2. cd Tours-Travel

Install composer dependencies

3. composer Install

Install npm dependencies

4. npm install

5. npm run dev

Create a copy of the .env file

6. cp .env.example .env

Generate the app's encryption key

7. php artisan key:generate

Create an empty database for the application 

After this, in the .env file, add database information to allow  Laravel to connect to the database


8. In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. 

Migrate the database

9. php artisan migrate

Run the application 

10. php artisan serve


On the payment page add this stripe api keys on the .env file
STRIPE_KEY=pk_test_51HQpwbKZZfdlhYPvEg8AQBi5WjGCReMZFpvY0anaq5OfnxHAGuJTuUfXhxlPvCRj4T3Dqy5jnpvcKg3qZUwotCzq00EjBedeBk

STRIPE_SECRET=sk_test_51HQpwbKZZfdlhYPvJnblqy8Jiv662Q1RkkfMMa26cI1x62LfgPjh6ERSeK84WZCmLWVdgFqKDOx9G5pkdP8mr2au00EJNczGGO
