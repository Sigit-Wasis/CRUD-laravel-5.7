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

Route::get('teachers', 'TeacherController@index')->name('teacher.index');

Route::get('teachers/create', 'TeacherController@create')->name('teacher.create');

Route::post('teachers', 'TeacherController@store')->name('teacher.store');

Route::get('teachers/{id}/edit', 'TeacherController@edit')->name('teacher.edit');

Route::patch('teacher/{id}', 'TeacherController@update')->name('teacher.update');

Route::delete('teachers/{id}', 'TeacherController@destroy')->name('teacher.destroy');