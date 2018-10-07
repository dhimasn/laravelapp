<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','PagesController@homepage');
Route::get('about','PagesController@about');
Route::get('siswa','SiswaController@index');
Route::get('halaman-rahasia',[
		'as'=> 'secret',
		'uses'=>'RahasiaController@halamanRahasia'
]);
Route::get('showmesecret','RahasiaController@showMeSecret');
Route::get('siswa/create','SiswaController@create');
Route::post('siswa','SiswaController@store');



