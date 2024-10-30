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

    // Only admins can access these routes
    Route::resource('/books', BookController::class)->except('show');
});

Route::get('books/{id}', [BookController::class, 'show'])->name('books.show');


