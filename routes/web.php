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

Route::post('login', 'App\Http\Controllers\MyController@Login')->name('login');

Route::get('showAll', 'App\Http\Controllers\MyController@ShowAll')->name('show');

Route::get('{id}', 'App\Http\Controllers\MyController@getID')->name('getID');

Route::get('Update/{id}', 'App\Http\Controllers\MyController@Update')->name('getUpdate');

Route::post('upda', 'App\Http\Controllers\MyController@PostUpdate')->name('upda');