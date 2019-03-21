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
    return redirect()->route('home.index');
});

Route::get('/home', 'HomeController@index')->name('home.index');
Route::post('/qrcode', 'QrController@index')->name('qr.index');
Route::post('/phone', 'PhoneController@index')->name('phone.index');
Route::post('/email', 'EmailController@index')->name('email.index');
Route::post('/sms', 'SmsController@index')->name('sms.index');
