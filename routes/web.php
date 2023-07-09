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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'portofolioController@homepage');
Route::get('/about', 'portofolioController@about');
Route::get('/contact', 'portofolioController@contact');
Route::get('/gallery', 'portofolioController@gallery');
Route::get('/sosmed', 'portofolioController@sosmed');