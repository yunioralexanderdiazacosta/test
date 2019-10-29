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

Route::get('/', 'PersonaController@index')->name('personas.index');
Route::get('/create', 'PersonaController@create')->name('personas.create');
Route::post('/store', 'PersonaController@store')->name('personas.store');
Route::get('/edit/{persona}', 'PersonaController@edit')->name('personas.edit');
Route::post('/update/{persona}', 'PersonaController@update')->name('personas.update');
Route::delete('/delete/{persona}', 'PersonaController@destroy')->name('personas.destroy');
Route::get('personas/reporte', 'PersonaController@reporte')->name('personas.reporte');
