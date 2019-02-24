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


Route::get('/all-contact','ContactController@AllContact')->name('all.contact');
Route::get('/add-contact','ContactController@addcontact')->name('add');
Route::post('/all-contact','ContactController@InsertContact')->name('data-insert');
Route::get('/delete/{id}','ContactController@DeleteContact');
Route::get('/edit/{id}','ContactController@EditContact');
Route::post('/edit/{id}','ContactController@UpdateController');
Route::get('/details/{id}','ContactController@details');
