<?php

use Illuminate\Support\Facades\Route;


//Front Controller
Route::get('/',[\App\Http\Controllers\FrontController::class,'index'])->name('index');
Route::get('/resume',[\App\Http\Controllers\FrontController::class,'resume'])->name('resume');
Route::get('/portfolio',[\App\Http\Controllers\FrontController::class,'portfolio'])->name('portfolio');
Route::get('/blog',[\App\Http\Controllers\FrontController::class,'blog'])->name('blog');
Route::get('/contact',[\App\Http\Controllers\FrontController::class,'contact'])->name('contact');
Route::post('/contact',[\App\Http\Controllers\FrontController::class,'sendMessage'])->name('sendMessage');

//Back Controller
Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
    Route::prefix('/education')->group(function (){
        Route::get('/list',[\App\Http\Controllers\EducationController::class,'list'])->name('admin.education.list');
        Route::post('/changeStatus',[\App\Http\Controllers\EducationController::class,'changeStatus'])->name('admin.education.changeStatus');
        Route::post('/delete',[\App\Http\Controllers\EducationController::class,'delete'])->name('admin.education.delete');
        Route::get('/add',[\App\Http\Controllers\EducationController::class,'addShow'])->name('admin.education.add');
        Route::post('/add',[\App\Http\Controllers\EducationController::class,'add']);

    });

    Route::prefix('/experience')->group(function (){
        Route::get('/list',[\App\Http\Controllers\ExperienceController::class,'list'])->name('admin.experience.list');
        Route::post('/changeStatus',[\App\Http\Controllers\ExperienceController::class,'changeStatus'])->name('admin.experience.changeStatus');
        Route::post('/changeActive',[\App\Http\Controllers\ExperienceController::class,'changeActive'])->name('admin.experience.changeActive');
        Route::post('/delete',[\App\Http\Controllers\ExperienceController::class,'delete'])->name('admin.experience.delete');
        Route::get('/add',[\App\Http\Controllers\ExperienceController::class,'addShow'])->name('admin.experience.add');
        Route::post('/add',[\App\Http\Controllers\ExperienceController::class,'add']);
    });


    Route::get('personal-information',[\App\Http\Controllers\PersonalInformationController::class,'index'])->name('personalInformation.index');
    Route::post('personal-information',[\App\Http\Controllers\PersonalInformationController::class,'update']);

    Route::prefix('social-media')->group(function (){
        Route::get('/list',[\App\Http\Controllers\SocialMediaController::class,'list'])->name('admin.socialMedia.list');
        Route::post('/changeStatus',[\App\Http\Controllers\SocialMediaController::class,'changeStatus'])->name('admin.socialMedia.changeStatus');
        Route::post('/delete',[\App\Http\Controllers\SocialMediaController::class,'delete'])->name('admin.socialMedia.delete');
        Route::get('/add',[\App\Http\Controllers\SocialMediaController::class,'addShow'])->name('admin.socialMedia.add');
        Route::post('/add',[\App\Http\Controllers\SocialMediaController::class,'add']);
    });

    Route::prefix('messages')->group(function (){
        Route::get('/list',[\App\Http\Controllers\MessagesController::class,'list'])->name('admin.messages.list');
        Route::get('/detail/{id}',[\App\Http\Controllers\MessagesController::class,'detail'])->name('admin.messages.detail')->whereNumber('id');
        Route::post('/changeRead',[\App\Http\Controllers\MessagesController::class,'changeRead'])->name('admin.messages.changeRead');
        Route::post('/delete',[\App\Http\Controllers\MessagesController::class,'delete'])->name('admin.messages.delete');
    });

    Route::prefix('post')->group(function (){
        Route::get('/list',[\App\Http\Controllers\PostController::class,'list'])->name('admin.post.list');
        Route::post('/changeStatus',[\App\Http\Controllers\PostController::class,'changeStatus'])->name('admin.post.changeStatus');
        Route::post('/delete',[\App\Http\Controllers\PostController::class,'delete'])->name('admin.post.delete');
        Route::get('/add',[\App\Http\Controllers\PostController::class,'addShow'])->name('admin.post.add');
        Route::post('/add',[\App\Http\Controllers\PostController::class,'add']);
    });

});




Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
