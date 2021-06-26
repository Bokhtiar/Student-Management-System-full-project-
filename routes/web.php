<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([ "as"=>'user.' , "prefix"=>'user' , "namespace"=>'User' , "middleware"=>['auth','user']],function(){
    Route::get('/dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');
});


Route::group([ "as"=>'admin.' , "prefix"=>'admin' , "namespace"=>'Admin' , "middleware"=>['auth','admin']],function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [App\Http\Controllers\Admin\AdminDashboardController::class, 'logout']);
    Route::group(["as"=> 'student.', "prefix"=>"student"],function(){
        Route::get('/list', [App\Http\Controllers\Admin\StudentController::class, 'index']);
        Route::get('/create', [App\Http\Controllers\Admin\StudentController::class, 'create']);
        Route::post('/store', [App\Http\Controllers\Admin\StudentController::class, 'store']);
        Route::post('/search', [App\Http\Controllers\Admin\StudentController::class, 'search']);
        Route::get('/detail/{id}', [App\Http\Controllers\Admin\StudentController::class, 'view']);
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\StudentController::class, 'edit']);
        Route::post('/update/{id}', [App\Http\Controllers\Admin\StudentController::class, 'update']);
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\StudentController::class, 'destroy']);
    });

    Route::group(["as"=> 'teacher.', "prefix"=>"teacher"],function(){
        Route::get('/list', [App\Http\Controllers\Admin\TeacherController::class, 'index']);
        Route::get('/create', [App\Http\Controllers\Admin\TeacherController::class, 'create']);
        Route::post('/store', [App\Http\Controllers\Admin\TeacherController::class, 'store']);
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\TeacherController::class, 'edit']);
        Route::post('/update/{id}', [App\Http\Controllers\Admin\TeacherController::class, 'store']);
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\TeacherController::class, 'destroy']);
    });
});
