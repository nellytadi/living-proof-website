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
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::post('/donate/paystack/callback', 'App\Http\Controllers\DonationController@paystackGatewayCallback')->name("donate.paystack.callback");

Route::post('/contact','ContactController@sendMail')->name('contact');

Route::get('/team', function () {
    return view('team');
});
Route::get('/become-a-member', function () {
    return view('become-a-member');
});