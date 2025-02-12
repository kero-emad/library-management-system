<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('app');
});


Route::get('/books/create', [BookController::class, 'create'])->name('book.create');
Route::post('/books/store', [BookController::class, 'store'])->name('book.store');
Route::get('/books',[BookController::class,'index'])->name('book.index');
Route::get('/books/update/{id}', [BookController::class, 'update'])->name('book.update');
Route::post('books/update',[BookController::class,'edit'])->name('book.edit');
Route::get('books/delete/{id}',[BookController::class,'delete'])->name('book.delete');
Route::get('books/show/{id}',[BookController::class,'show'])->name('book.show');



Route::get('/authors/create', [AuthorController::class, 'create'])->name('author.create');
Route::post('/authors/store', [AuthorController::class, 'store'])->name('author.store');
Route::get('/authors',[AuthorController::class,'index'])->name('author.index');
Route::get('/authors/update/{id}', [AuthorController::class, 'update'])->name('author.update');
Route::post('authors/update',[AuthorController::class,'edit'])->name('author.edit');
Route::get('authors/delete/{id}',[AuthorController::class,'delete'])->name('author.delete');
Route::get('authors/show/{id}',[AuthorController::class,'show'])->name('author.show');