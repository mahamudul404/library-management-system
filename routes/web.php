<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/dashboard/users', [AdminController::class, 'users'])->name('admin.users');

    // delete users accout
    Route::delete('admin/dashboard/users/{id}', [AdminController::class, 'deleteUser'])->name('user.delete');

    Route::get('/admin/books', [AdminController::class, 'books'])->name('admin.books');
    Route::get('admin/books/{id}', [AdminController::class, 'deleteBook'])->name('books.destroy');
//    show create books page
    Route::get('books/add', [AdminController::class, 'createBook'])->name('books.add');

    // store books
    Route::post('books/store', [AdminController::class, 'storeBook'])->name('books.store');
});
