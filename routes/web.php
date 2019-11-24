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


Route::get('/', 'ControladorOrcamento@index')->name('home');
Route::get('/search', 'ControladorOrcamento@search')->name('search');
Route::get('/cadastroorcamento', 'ControladorOrcamento@create')->name('orcamento');
Route::post('/cadastroorcamento', 'ControladorOrcamento@store')->name('orcamento');
Route::get('/editar/{id}', 'ControladorOrcamento@edit')->name('editar.edit');
Route::get('/editar/delete/{id}', 'ControladorOrcamento@destroy')->name('delete.destroy');
Route::post('/editar/{id}', 'ControladorOrcamento@update')->name('editar.update');
