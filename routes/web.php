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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/become-a-member', function () {
    return view('become-a-member');
})->name('become-a-member');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::post('/donate/paystack/callback', 'App\Http\Controllers\DonationController@paystackGatewayCallback')->name("donate.paystack.callback");

Route::post('/contact','ContactController@sendMail')->name('contact');

