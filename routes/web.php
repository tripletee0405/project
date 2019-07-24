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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function () {
    return view('admin/index');
})->middleware('checklogin::class');
Route::get('/admin/add_book', 'Admin\AdminBookController@create');
Route::patch('/admin/add_book/store', 'Admin\AdminBookController@store');
Route::get('/admin/list_book', 'Admin\AdminBookController@index');
Route::get('/admin/detail_book/{id}', 'Admin\AdminBookController@show');
Route::get('/admin/edit_book/{id}', 'Admin\AdminBookController@edit');
Route::PATCH('/admin/update_book/{id}', 'Admin\AdminBookController@update');
Route::DELETE('/admin/delete_book/{id}', 'Admin\AdminBookController@destroy');

Route::get('/adminvuejs/index', function () {
    return view('index');
});
Route::resource('/book', 'Admin\AdminBookController');