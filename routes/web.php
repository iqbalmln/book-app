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

Route::view('/books', 'books.books');
Route::view('/books-categories', 'books.categories');
Route::view('/rents', 'rents.rents');
Route::view('/authors', 'user.authors');
Route::view('/users', 'user.users');

Route::view('/user/username', 'user.profile');
Route::view('/user/username/edit', 'user.settings');

Route::group(['middleware' => 'logged', 'as' => 'auth.'], function () {
  Route::get('/auth/login', 'Auth\LoginController@index')->name('login.index');
  Route::post('/auth/login', 'Auth\LoginController@login')->name('login.post');

  Route::get('/auth/register', 'Auth\RegisterController@index')->name('register.index');
  Route::post('/auth/register', 'Auth\RegisterController@register')->name('register.post');
});

Route::post('/auth/logout', 'Auth\LogoutController@logout')->name('logout');

Route::group(['middleware' => 'role'], function () {
  Route::view('/', 'dashboard')->name('dashboard');
  
  Route::resources([
    'books' => 'BookController',
    'books-categories' => 'BookCategoryController',
    'rents' => 'RentController',
    'authors' => 'AuthorController',
    'users' => 'UserController',
  ]);
});
