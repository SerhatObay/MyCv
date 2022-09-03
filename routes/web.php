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
//Front Controller
Route::get('/',[\App\Http\Controllers\FrontController::class,'index'])->name('index');
Route::get('/resume',[\App\Http\Controllers\FrontController::class,'resume'])->name('resume');
Route::get('/portfolio',[\App\Http\Controllers\FrontController::class,'portfolio'])->name('portfolio');
Route::get('/blog',[\App\Http\Controllers\FrontController::class,'blog'])->name('blog');
Route::get('/contact',[\App\Http\Controllers\FrontController::class,'contact'])->name('contact');

//Back Controller
Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
    Route::get('/education-list',[\App\Http\Controllers\EducationController::class,'list'])->name('admin.education.list');
    Route::post('/education-changeStatus',[\App\Http\Controllers\EducationController::class,'changeStatus'])->name('admin.education.changeStatus');
    Route::post('/education-delete',[\App\Http\Controllers\EducationController::class,'delete'])->name('admin.education.delete');
    Route::get('/education-add',[\App\Http\Controllers\EducationController::class,'addShow'])->name('admin.education.add');
    Route::post('/education-add',[\App\Http\Controllers\EducationController::class,'add']);
});




Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
