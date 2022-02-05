<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('citizen')->group(function () {


    Route::get('/register', 'CitizenController@registerCitizen')->name('register.citizen');
    Route::post('/register', 'CitizenController@storeCitizen')->name('store.citizen');

    Route::get('/all', 'CitizenController@allState')->name('all.citizen');
    Route::get('/getlga/{id}', 'CitizenController@getLga')->name('get.lga');
    Route::get('/getward/{id}', 'CitizenController@getWard')->name('get.ward');

    Route::get('/{id}', 'CitizenController@getCitizen')->name('get.citizen');
     
});
