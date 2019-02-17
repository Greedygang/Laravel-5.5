<?php

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

// 首页导航
Route::get('/', 'Blog\BlogNavController@home')->name('home');
Route::get('/help', 'Blog\BlogNavController@help')->name('help');
Route::get('/about', 'Blog\BlogNavController@about')->name('about');
Route::get('/login', 'Blog\BlogNavController@login')->name('login');
Route::get('/logout', 'Blog\BlogNavController@logout')->name('logout');
Route::get('/signup', 'Blog\BlogNavController@signup')->name('signup');

// 用户注册与登录
Route::post('/user/login', 'Blog\UserController@login');
Route::post('/user/signup', 'Blog\UserController@signup');
Route::get('/user/info', 'Blog\UserController@getUser');
