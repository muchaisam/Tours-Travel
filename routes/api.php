<?php

use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\DestinationApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public API endpoints
Route::prefix('v1')->group(function () {
    // Destinations
    Route::get('destinations', [DestinationApiController::class, 'index']);
    Route::get('destinations/featured', [DestinationApiController::class, 'featured']);
    Route::get('destinations/search', [DestinationApiController::class, 'search']);
    Route::get('destinations/{destination}', [DestinationApiController::class, 'show']);

    // Categories
    Route::get('categories', [CategoryApiController::class, 'index']);
    Route::get('categories/{category}', [CategoryApiController::class, 'show']);
});

// Authenticated API endpoints
Route::middleware('auth:api')->prefix('v1')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // User bookings (placeholder for future implementation)
    Route::get('/user/bookings', function (Request $request) {
        return response()->json(['data' => [], 'message' => 'Bookings feature coming soon']);
    });

    // User wishlist (placeholder for future implementation)
    Route::get('/user/wishlist', function (Request $request) {
        return response()->json(['data' => [], 'message' => 'Wishlist feature coming soon']);
    });
});

// Legacy Stripe routes
Route::get('stripe', 'App\Http\Controllers\StripePaymentController@stripe');
Route::post('stripe', 'App\Http\Controllers\StripePaymentController@stripePost')->name('stripe.post');
