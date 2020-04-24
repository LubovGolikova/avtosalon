<?php

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

Route::get('/', "HomeController@index");
Route::get('/reviews',"ReviewsController@index");
Route::post('/reviews',"ReviewsController@store");
Route::post('/',"SingUpController@store");
Route::resource('/reviews/admin',"ReviewsAdminController");
Route::put('/reviews/admin/{id}/answer',"ReviewsAdminController@answer");
Route::resource('/signup/admin',"SignupAdminController");
Auth::routes();

