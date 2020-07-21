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

