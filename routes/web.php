<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Route::resources()
//Route::resource('questions', 'QuestionsController');
Route::get('/questions', [QuestionsController::class, 'index'])->name('questions.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
