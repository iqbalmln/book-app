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

Route::group(['middleware' => 'logged', 'as' => 'auth.'], function () {
  Route::get('/auth/login', 'Auth\LoginController@index')->name('login.index');
  Route::post('/auth/login', 'Auth\LoginController@login')->name('login.post');

  Route::get('/auth/register', 'Auth\RegisterController@index')->name('register.index');
  Route::post('/auth/register', 'Auth\RegisterController@register')->name('register.post');
});

Route::post('/auth/logout', 'Auth\LogoutController@logout')->name('logout');

Route::group(['middleware' => 'role'], function () {
  Route::get('/', 'DashboardController@index')->name('dashboard');
  
  Route::resources([
    'books' => 'BookController',
    'book-categories' => 'BookCategoryController',
    'rents' => 'RentController',
    'authors' => 'AuthorController',
    'users' => 'UserController',
    'profile' => 'ProfileController',
  ]);

  Route::get('/profile/{id}/settings', 'ProfileController@settings');
});
