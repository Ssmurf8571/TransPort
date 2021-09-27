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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect(config('app.locale'));
});

Route::get('/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ru'])) {
        abort(404);
    }

    App::setLocale($locale);

    return view('index');
});

Route::post('/action', function () {
    return dd(Request::all());
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
