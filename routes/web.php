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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/settings', 'UserController');
Route::patch('/admin/settings/{id}/edit/','UserController@update')->name('id.update');
Route::delete('/admin/settings/{id}','UserController@destroy')->name('id.destroy');

Route::get('/admin/settings', 'UserController@index')->name('usuario.index');

//Route::get('/admin/settings/{name}', 'UserController@show');
//Route::get('/admin/settings/{id}', 'UserController@show');

