<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;

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




Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/students',[StudentController::class,'index'])->name('student.index');
Route::get('/students/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::post('students/update',[StudentController::class,'edit'])->name('student.edit');
Route::get('students/delete/{id}',[StudentController::class,'delete'])->name('student.delete');
Route::get('students/show/{id}',[StudentController::class,'show'])->name('student.show');



Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categories',[CategoryController::class,'index'])->name('category.index');
Route::get('/categories/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::post('categories/update',[CategoryController::class,'edit'])->name('category.edit');
Route::get('categories/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::get('categories/show/{id}',[CategoryController::class,'show'])->name('category.show');
