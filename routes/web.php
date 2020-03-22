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

use Illuminate\Support\Facades\Route;


Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/privacy-policy', 'HomeController@privacyPolicy')->name('privacy-policy');
Route::get('/cookie-policy', 'HomeController@cookiePolicy')->name('cookie-policy');
Route::get('/how-to-play', 'HomeController@howToPlay')->name('how-to-play');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/about-us', 'HomeController@aboutUs')->name('about-us');

Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::get('/contact', 'HomeController@contact')->name('contact');
	Route::get('/game/{gameId}', 'HomeController@viewGame')->name('view-game');
	Route::get('/games', 'HomeController@games')->name('games');
	Route::post('/submit-contact', 'HomeController@submitContact')->name('submit-contact-form');
});

Route::get('auth/facebook', 'FacebookLoginController@redirect');
Route::get('auth/facebook/callback', 'FacebookLoginController@callback');
