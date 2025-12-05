<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ThirdController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('students',StudentController::class);

Route::resource('thirds',ThirdController::class);

Route::get('/grades',[GradeController::class,'index']);

Route::get('/print/{entry}/{gradeId}',[PrintController::class, 'index']);