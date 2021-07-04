### Screenshots

#### Homepage
<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/master/screenshots/6.png" width="auto" />
  <img src="https://github.com/muchaisam/Tours-Travel/blob/master/screenshots/7.png" width="auto" /> 
</p>

#### Destination Info and Cart Page
<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/master/screenshots/1.png" width="auto" />
  <img src="https://github.com/muchaisam/Tours-Travel/blob/master/screenshots/2.png" width="auto" /> 
</p>

#### Place Order
<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/master/screenshots/3.png" width="auto" />
</p>

#### Checkout
<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/master/screenshots/4.png" width="auto" />
</p>

#### Stripe Backend
<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/master/screenshots/5.png" width="auto" />
</p>

#### Blog
<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/master/screenshots/8.png" width="auto" />
</p>

#### Backend
<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/master/screenshots/b.png" width="auto" />
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

Migrate and seed the database

9. php artisan migrate | php artisan db:seed

Run the application 

10. php artisan serve


<!-- On the payment page add this stripe api keys on the .env file
1. STRIPE_KEY=pk_test_51HQpwbKZZfdlhYPvEg8AQBi5WjGCReMZFpvY0anaq5OfnxHAGuJTuUfXhxlPvCRj4T3Dqy5jnpvcKg3qZUwotCzq00EjBedeBk

2. STRIPE_SECRET=sk_test_51HQpwbKZZfdlhYPvJnblqy8Jiv662Q1RkkfMMa26cI1x62LfgPjh6ERSeK84WZCmLWVdgFqKDOx9G5pkdP8mr2au00EJNczGGO -->
