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
//根目录  前台首页
Route::get('/', function () {
    return view('welcome');
});

// 后台首页
Route::any('/admin/index','Admin\IndexController@index');

Route::any('/admin/show','Admin\IndexController@show');

