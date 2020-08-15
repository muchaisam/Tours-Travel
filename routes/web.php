<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::middleware(['auth'])->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::resource('categories', "CategoriesController");
    
    Route::resource('destinations', "DestinationsController");

    Route::resource('tags', "TagsController");
    
    Route::get('trashed-destinations', 'DestinationsController@trashed')->name('trashed-destinations.index');
    
    Route::put('restore-destinations/{destinations}','DestinationsController@restore')->name('restore-destinations');

    Route::post('users|{user}|make-admin', 'UsersController@makeAdmin')->name('users.make-admin');

});

Route::middleware(['auth','admin'])->group(function (){
    Route::get('users', 'UsersController@index')->name('users.index');
});

Route::group(['middleware' => ['isVerified']], function () {
    Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
    Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');
});