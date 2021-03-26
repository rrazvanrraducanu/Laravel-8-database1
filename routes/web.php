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
Route::get('/', 'FlowersController@index');
Route::get('/add', 'FlowersController@add');
Route::any('/store', 'FlowersController@store');
Route::get('/{nume}', 'FlowersController@show');
Route::get('delete/{nume}', 'FlowersController@delete');
Route::get('edit/{nume}', 'FlowersController@edit');
Route::any('/updateData/{nume}', 'FlowersController@updateData');
//Route::get('/', function () { return view('welcome');});
//Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('contact', 'WelcomeController@contact');
Route::get('about', 'HomeController@about');
Route::get('form', 'FormController@index');
Route::get('data1', 'WelcomeController@data1');