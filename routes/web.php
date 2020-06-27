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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('/','MainController');
Route::resource('/cart','CartController');
Route::resource('/checkout','CheckoutController');
Route::resource('/productdetails','ProductDetailsController');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Route::middleware(['auth:api'])->group(function () {

// Somente users com permissões especiais
//    Route::middleware(['scopes:can-get-users'])->group(function () {


//    });


//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
