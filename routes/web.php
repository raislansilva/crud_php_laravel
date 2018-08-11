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
Route::get('/home/cadastro',['as'=>'cadastro.curso','uses' => 'HomeController@create']);
Route::post('/home/salvar',['as'=>'cadastro.save','uses' => 'HomeController@save']);
Route::get('/home/update/{id}',['as'=>'cadastro.update','uses' => 'HomeController@update']);
Route::post('/home/updateSave/{id}',['as'=>'cadastro.updateSave','uses' => 'HomeController@updateSave']);

