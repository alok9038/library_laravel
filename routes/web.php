<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('core.home');
})->name('dashboard');

Route::get('/manage-books', function () {
    return view('core.manage_books');
})->name('manage.books');

Route::get('/add-book', function () {
    return view('core.add_book');
})->name('add.book');

Route::get('/add-entry', function () {
    return view('core.add_entry');
})->name('add.entry');

Route::get('/orders-active', function () {
    return view('core.orders');
})->name('orders.active');

Route::get('/orders-all', function () {
    return view('core.orders');
})->name('orders.all');

Route::get('/add-student', function () {
    return view('core.add_student');
})->name('add.student');

Route::get('/students', function () {
    return view('core.students');
})->name('manage.students');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
