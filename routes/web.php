<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Auth::routes();
/* Landing Page */
Route::get('/', function () {
    return view('welcome');
});

/* User Route */
Route::get('/home', 'HomeController@index')->name('home');
/* Profile */
Route::get('/home/profile', 'ProfileController@profile')->name('profile');
Route::get('/home/profile/change/{name}', 'ProfileController@changeprofile')->name('change');
Route::post('/home/profile/change/{name}', 'ProfileController@store')->name('updateprofile');
/* Booking */
Route::get('/home/viewbook', 'RoomController@viewbook')->name('viewbook');
Route::get('/home/viewbook/bookroom/{id}', 'RoomController@book')->name('book');
Route::post('/home/viewbook/bookroom/{id}', 'RoomController@booking_room_update')->name('booked');
/* Main Function */
Route::get('/home/request', 'HomeController@request')->name('request');
Route::post('/home/request', 'HomeController@createrequest')->name('createrequest');
Route::get('/home/check-in', 'HomeController@checkin')->name('checkin');
Route::get('/home/check-in/{id}', 'HomeController@checking')->name('checking');
Route::get('/home/check-out', 'HomeController@checkout')->name('checkout');
Route::get('/home/check-out/{id}', 'HomeController@checkouting')->name('checkouting');
/* Manage Booking */
Route::get('/home/manage', 'RoomController@managebook')->name('managebook');
Route::get('/home/manage/{id}', 'RoomController@cancel')->name('cancel');

/* Admin Route */
Route::get('/admin', 'AdminController@index')->name('adminmain');
Route::get('/admin/check-user', 'AdminController@checkuser')->name('checkuser');
Route::get('/admin/check-user/{id}', 'AdminController@removeUser')->name('removeUser');

/* Staff Route */
Route::get('/staff', 'StaffController@index')->name('staffmain');
Route::get('/staff/managerequest', 'StaffController@managerequest')->name('managerequest');
Route::get('/staff/manageroom', 'StaffController@manageroom')->name('manageroom');
Route::get('/staff/managerequest/{id}', 'StaffController@managereq')->name('managereq');
Route::get('/staff/managerequest/{id}/refuse', 'StaffController@managereqref')->name('managereqref');