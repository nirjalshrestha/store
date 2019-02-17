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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('index', function () {
    return view('Layout.index');

});*/

ROute::resource('home','HomeController');

Route::resource('about','AboutController');

Route::resource('blog','BlogController');

Route::resource('product','ProductController');

Route::resource('contact','ContactController');

Auth::routes();

Route::get('Admin/home', 'HomeController@index')->name('home');

Route::get('admin/product/create', function () {
    return view('Admin/Product/create');
});

Route::get('admin/product/index', function () {
    return view('Admin/Product/index');
});

Route::get('admin/category/index', function () {
    return view('Admin/Category/index');
});




