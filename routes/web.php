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



Auth::routes();

//admin
Route::get('/admin', function () {
	return view('auth/login');
});

// Route::get('/', 'AdminController@index');
Route::get('/getdata', 'AdminController@getData');
Route::get('/home/Home', 'AdminController@saveData');


Route::get('/', function () {
	return view('welcome');
});
Route::get('/home', 'AdminController@index');

// Route::get('/home', function () {
// 	return view('admin/home');
// });

// Route::get('/home/Home', 'AdminController@index');

// Route::get('/home', 'AdminController@index');


// Route::get('/wizard/enterBusinessName', function () {
// 	return view('welcome');
// });

// Route::get('/wizard/enterSlogan', function () {
// 	return view('welcome');
// });


// Route::resource('tasks', 'TaskController');

// });
