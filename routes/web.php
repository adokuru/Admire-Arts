<?php

use Illuminate\Support\Facades\Route;
use App\Models\Art;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
Route::get('/Museums', 'App\Http\Controllers\HomeController@Museums');
Route::get('/artworks/{Slug}', 'App\Http\Controllers\HomeController@artslug')->name('art.slug');





Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');
    Route::get('/contact/{id}', 'App\Http\Controllers\HomeController@contactShow')->name('contactShow');
    Route::resource('art', 'App\Http\Controllers\ArtController');
    Route::resource('artist', 'App\Http\Controllers\ArtistController');
});


Route::any ( '/search', function (Request $request) {
    //dd($request->search);
    
    $feautredart = Art::where('name','LIKE','%'.$request->search.'%')->paginate(10);

    
    if (count ( $feautredart ) > 0)
        return view('artwork', compact('feautredart'));
    else
        return view('artwork')->withMessage('No Details found. Try to search again !');
} );