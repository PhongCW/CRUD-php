<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('wl', 'App\Http\Controllers\MyController@welcome')->name('first');

Route::post('signup', 'App\Http\Controllers\MyController@SignUp')->name('signup');

Route::get('show', 'App\Http\Controllers\MyController@Show')->name('show');

Route::get('delete/{id}', 'App\Http\Controllers\MyController@Delete')->name('delete');

Route::get('update/{id}','App\Http\Controllers\MyController@Update')->name('update');

Route::post('getUpdate/{id}', 'App\Http\Controllers\MyController@getUpdate')->name('getUpdate');

Route::get('login', 'App\Http\Controllers\MyController@Login')->name('login');

Route::post('LoginToUser', 'App\Http\Controllers\MyController@LoginToUser')->name('LoginToUser');

Route::get('logout', 'App\Http\Controllers\MyController@Logout')->name('logout');