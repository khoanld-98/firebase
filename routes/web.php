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
Route::get('demo', 'FirebaseController@index');
Route::get('value', 'FirebaseController@getData');
Route::get('importExcel', 'ExcelController@index');
Route::post('importExcel', 'ExcelController@import')->name('importExcel');
Route::get('insert', 'FirebaseController@Insert');
Route::post('insert', 'FirebaseController@postInsert')->name('post.insert');
Route::get('show', 'FirebaseController@show');
