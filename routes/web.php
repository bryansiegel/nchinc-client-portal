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
// Route::get('/', function () {
//     return view('dashboard');
// })->name('dashboard')->middleware('auth');

// Route::group(['middleware' => 'auth'], function () {
//     //Dashboard
//     Route::get('/', 'DashboardController@index')->name('dashboard');
//     //Documents
//     Route::get('documents/', 'DocumentsController@index')->name('documents');
//     //Forms
//     Route::get('forms/', 'FormsController@index')->name('forms');
// });

Route::group(['middleware' => 'auth'], function () {
//     //Dashboard
    Route::get('/', 'DashboardController@index');
//     //Documents
    Route::get('documents/', 'DocumentsController@index');
//     //Forms
    Route::get('forms/', 'FormsController@index');
    //Todos
    Route::get('todos/', 'TodosController@index');

});


Auth::routes([ 'register' => false ]);
