<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Packages\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('packages/destinations/{destination}', [PostController::class, 'show'])->name('desti.show');



Auth::routes(['verify'=>true]);



Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('categories', "CategoriesController");

    Route::resource('destinations', "DestinationsController");

    Route::resource('tags', "TagsController");

    Route::resource('blog', "BlogController");

    Route::get('trashed-destinations', 'DestinationsController@trashed')->name('trashed-destinations.index');

    Route::put('restore-destinations/{destinations}', 'DestinationsController@restore')->name('restore-destinations');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('users/profile', 'UsersController@edit')->name('users.edit-profile');

    Route::put('users/profile', 'UsersController@update')->name('users.update-profile');

    Route::get('users', 'UsersController@index')->name('users.index');

    Route::post('users|{user}|make-admin', 'UsersController@makeAdmin')->name('users.make-admin');
});

Route::group(['middleware' => ['isVerified']], function () {
    Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
    Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');
});

Route::get('/about', [
    'uses' => 'WelcomeController@about',
    'as' => 'about'
]);

Route::get('/packages', [
    'uses' => 'WelcomeController@packages',
    'as' => 'packages'
]);

Route::get('/news', [
    'uses' => 'WelcomeController@blog',
    'as' => 'blog'
]);

Route::get('/contact', [
    'uses' => 'WelcomeController@contact',
    'as' => 'contact'
]);

Route::get('/Bali', [
    'uses' => 'WelcomeController@Bali',
    'as' => 'Bali'
]);

Route::get('/cart', [
    'uses' => 'WelcomeController@cart',
    'as' => 'cart'
]);

Route::get('/checkout', [
    'uses' => 'WelcomeController@checkout',
    'as' => 'checkout'
]);

Route::get('/Checkout', [
    'uses' => 'CheckoutController@checkout',
    'as' => 'checkout.store'
]);


// Post form data
Route::post('/contact', [
    'uses' => 'ContactUsController@ContactUs',
    'as' => 'contact.store'
]);

Route::get('/stripe', [
    'uses' => 'WelcomeController@stripe',
    'as' => 'stripe'
]);




Route::get('destinations.edit/{destinations}', 'DestinationsController@edit')->name('destinations.edit');

Route::get('/cart/{id}/remove', 'CartController@removeItem')->name('cart.remove');


Route::get('/send-email', 'MailController@sendEmail');
