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

});
