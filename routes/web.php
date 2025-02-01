<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/store', [BookController::class, 'store'])->name('store');

