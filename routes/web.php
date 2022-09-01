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

Route::get('/', function () {return view('frontend.index');})->name('index');
Route::get('/resume', function () {return view('frontend.resume');})->name('resume');
Route::get('/portfolio', function () {return view('frontend.portfolio');})->name('portfolio');
Route::get('/blog', function () {return view('frontend.blog');})->name('blog');
Route::get('/contact', function () {return view('frontend.contact');})->name('contact');
