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

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/new_client', 'ClientController@create')->name('new_client');
    Route::get('/onboard_client', 'ClientController@index')->name('onboard_client');
    Route::get('/client_report/{id}', 'ClientController@sendReport')->name('client_report');
    Route::post('/save_client', 'ClientController@store')->name('save_client');
    Route::post('/send_report/{id}', 'ClientController@sendReportToClient')->name('send_report');
    Route::get('/send_sms', 'SmsController@sendSms')->name('send_sms');
    Route::get('/client_view/{id}', 'ClientController@show')->name('client_view');
    Route::post('/sendMessage', 'SmsController@sendCustomMessage')->name('sendMessage');
});

