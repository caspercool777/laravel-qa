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
Route::get('/questions/create', [QuestionsController::class, 'create'])->name('questions.create');
Route::post('/questions/store', [QuestionsController::class, 'store'])->name('questions.store');
Route::get('/questions/{question}', [QuestionsController::class, 'show'])->name('questions.show');
Route::get('/questions/edit/{question}', [QuestionsController::class, 'edit'])->name('questions.edit');
Route::put('/questions/update/{question}', [QuestionsController::class, 'update'])->name('questions.update');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

