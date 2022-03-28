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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index')->name('home');


// Route::get('/', 'UserController@index');
Route::resource('new', 'ProjectController');
Route::resource('city', 'CityController');
Route::resource('companies', 'CompanyController');



Route::get('insertNewProject', 'ProjectController@create');

Route::post('/users', 'UserController@store')->name('users.store');
Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
Auth::routes();



// Route::get('/home', 'HomeController@index')->name('home');
