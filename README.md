Tours-Travel is a group project for Application Programming for the Internet unit developed entirely with laravel. 

Setting up the project locally;
git clone https://github.com/muchaisam/Tours-Travel

change directory to the project.
//cd Tours-Travel

Install composer dependencies
//composer Install

Install npm dependencies
//npm install
//npm run dev

Create a copy of the .env file
//cp .env.example .env

Generate the app's encryption key
//php artisan key:generate

Create an empty database for the application 

After this, in the .env file, add database information to allow  Laravel to connect to the database
//In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. 

Migrate the database
//php artisan migrate

Run the application 
//php artisan serve