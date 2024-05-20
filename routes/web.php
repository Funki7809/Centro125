<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\CategoryController;

Route::get('/',[NoteController::class, 'index']);
Route::resource('note', NoteController::class);
Route::resource('category', CategoryController::class);