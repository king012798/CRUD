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
});

Route::resource('kelas6a', 'klas6aController');
Route::resource('kelas6b', 'klas6bController');
Route::resource('kelas6c', 'klas6cController');
Route::resource('kelas6d', 'klas6dController');
