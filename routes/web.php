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

Route::get('/example', function () {
    echo phpinfo();
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->group(function () {

    // user routes
   	Route::get('/users', 'UserController@list')->name('users');
    Route::get('/add-user', 'UserController@add')->name('add.user');
    Route::post('/add-user', 'UserController@save');
    Route::get('/edit-user/{id}', 'UserController@edit')->name('edit.user');
    Route::post('/edit-user/{id}', 'UserController@update');
    Route::get('/delete-user/{id}', 'UserController@delete')->name('delete.user');

    Route::get('/add-department', 'DepartmentController@add')->name('add.department');
    Route::post('/add-department', 'DepartmentController@save');  

    Route::get('/add-office', 'OfficeController@add')->name('add.office');
    Route::post('/add-office', 'OfficeController@save');


    //Route::get('/add-vip', 'VipController@add');
    Route::post('/add-vip', 'VipController@add')->name('add.vip');
    //Route for add new section
    Route::get('/add-section', 'SectionController@add')->name('section');
   
});
