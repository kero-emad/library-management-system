<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('app');
});
Route::get('/books/create', [BookController::class, 'create'])->name('book.create');
Route::post('/books/store', [BookController::class, 'store'])->name('book.store');
Route::get('/books',[BookController::class,'index'])->name('book.index');
Route::get('/books',[BookController::class,'index'])->name('book.index');
Route::get('/books/update/{id}', [BookController::class, 'update'])->name('book.update');
Route::post('books/update',[BookController::class,'edit'])->name('book.edit');
Route::get('books/delete/{id}',[BookController::class,'delete'])->name('book.delete');
Route::get('books/show/{id}',[BookController::class,'show'])->name('book.show');
