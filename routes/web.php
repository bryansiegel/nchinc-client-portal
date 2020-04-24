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

//Dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');


//Documents
Route::get('documents/', 'DocumentsController@index')->name('documents')->middleware('auth');

//Forms
Route::get('forms/', 'FormsController@index')->name('forms')->middleware('auth');


Auth::routes([ 'register' => false ]);
