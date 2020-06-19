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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::post('signup', 'Authentication\RegisterController@store')->name('register');
Route::post('signin', 'Authentication\LoginController@authorize')->name('login');
Route::middleware('auth')->group(function() {
    Route::get('dashboard')->name('home');
});