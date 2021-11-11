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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/action', 'App\Http\Controllers\SiteController@post');

Route::get('/', 'App\Http\Controllers\SiteController@default');

Route::get('/{locale}', 'App\Http\Controllers\SiteController@openPage');