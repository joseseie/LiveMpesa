<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

header ("Access-Control-Expose-Headers: Content-Length, X-JSON");
header ("Access-Control-Allow-Methods: *");
header ("Access-Control-Allow-Origin: *" );
header ("Access-Control-Allow-Headers: x-csrf-token, x-requested-with, X-CSRF-TOKEN, Content-Type, Authorization");
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

// =========================================================
// Rotas de API
// =========================================================


Route::middleware(['auth:api'])->group(function () {

    Route::resources([
        'products'         => 'ProductController',
    ]);
    Route::post('/product/pay','ProductController@pay');

});

