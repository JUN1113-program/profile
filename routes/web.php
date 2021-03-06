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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('portfolio', 'PortfolioController');
Route::resource('profile', 'ProfileController');
Route::resource('blog', 'BlogController');
Route::resource("contact", "ContactController")->only(["index", "store", "create", "destroy"]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
