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

Route::get('/','FrontController@home')->name('travel.home');

Route::get('guide','FrontController@guide')->name('travel.guide');

//Route::get('login','FrontController@showLoginForm')->name('travel.login');

Route::get('blog','FrontController@showBlog')->name('travel.tour-blog');
Route::get('details/{id}','FrontController@showDetailsBlog')->name('travel.show-blog');

Route::get('reservation','FrontController@makeReservation')->name('travel.reservation');

Route::get('single/package/{id}','FrontController@awesomeHolidayPackage')->name('single.package');

Route::get('awesome','FrontController@allAwesome')->name('all.awesome');
Route::get('daily','FrontController@allDaily')->name('all.daily');
Route::get('feature','FrontController@allFeature')->name('all.feature');
Route::get('upcoming','FrontController@allUpcoming')->name('all.upcoming');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//hotel & Resort
Route::get('hotel','FrontController@hotelResort')->name('hotel.resort');
Route::post('hotel','FrontController@hotelResortProcess')->name('hotel.resort');

//Bus ticket
Route::get('bus','FrontController@busTicket')->name('bus.ticket');
Route::post('bus','FrontController@busTicketProcess')->name('bus.ticket');

//ship
Route::get('ship','FrontController@shipTicket')->name('ship.ticket');
Route::post('ship','FrontController@shipTicketProcess')->name('ship.ticket');

//train
Route::get('train','FrontController@trainTicket')->name('train.ticket');
Route::post('train','FrontController@trainTicketProcess')->name('train.ticket');

//air
Route::get('air','FrontController@airTicket')->name('air.ticket');
Route::post('air','FrontController@airTicketProcess')->name('air.ticket');

//car rent
Route::get('car-rent','FrontController@carRent')->name('car.rent');
Route::post('car-rent','FrontController@carRentProcess')->name('car.rent');

//visa support
Route::get('visa-support','FrontController@visaSupport')->name('visa.support');
Route::post('visa-support','FrontController@visaSupportProcess')->name('visa.support');
