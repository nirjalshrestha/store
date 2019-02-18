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

Route::resource('category','CategoryController');

Route::resource('brand','BrandController');


Route::get('admin/profile/user', function () {
    return view('Admin/Profile/user');
});




