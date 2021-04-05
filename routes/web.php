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

Route::view('/', 'dashboard');

Route::view('/books', 'books.books');
Route::view('/books-categories', 'books.categories');

Route::view('/user/username', 'user.profile');
Route::view('/user/username/edit', 'user.settings');

Route::view('/auth/login', 'auth.login');
Route::view('/auth/register', 'auth.register');

Route::view('/rents', 'rents.rents');

Route::view('/authors', 'user.authors');
Route::view('/users', 'user.users');