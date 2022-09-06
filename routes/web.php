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

Route::get('/about', function () {
    return view('about', [ "name" => "Fauzan Ali", "email" => "apspromp@gmail.com", "image" => "ojan.jpg"]);
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/abcd', function () {
    return view('abcd');
});