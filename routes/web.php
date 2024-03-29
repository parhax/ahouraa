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

Auth::routes();

Route::get('/', function () {
    $user = Auth::user();
    return view('welcome',['user' => $user]);
});

Route::get('lang/{locale}', 'HomeController@lang');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('consultantInfos','ConsultantInfoController');

Route::get('customer/profile', function (){
    $user = Auth::user();
    return view('customer.profile',['user' => $user]);
});