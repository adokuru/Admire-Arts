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

Route::get('/', 'App\Http\Controllers\HomeController@Home')->name('home');
Route::POST('/', 'App\Http\Controllers\HomeController@newsletter')->name('newsletter');


Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('contact');
Route::POST('/contact', 'App\Http\Controllers\HomeController@contactform')->name('contactform');



Route::get('/artworks', 'App\Http\Controllers\HomeController@artwork');
Route::POST('/artworks', 'App\Http\Controllers\HomeController@artcontact')->name('Artcontact');


Route::get('/view-rooms', 'App\Http\Controllers\HomeController@viewrooms');
Route::get('/auctions', 'App\Http\Controllers\HomeController@auction');
Route::get('/our-artists', 'App\Http\Controllers\HomeController@artist');
Route::get('/Editorial', 'App\Http\Controllers\HomeController@blog');
Route::get('/artworks/{Slug}', 'App\Http\Controllers\HomeController@artslug')->name('art.slug');





Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');
    Route::get('/contact/{id}', 'App\Http\Controllers\HomeController@contactShow')->name('contactShow');
    Route::resource('art', 'App\Http\Controllers\ArtController');
    Route::resource('artist', 'App\Http\Controllers\ArtistController');
});