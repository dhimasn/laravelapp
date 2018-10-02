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
Route::get('/',function(){
	return view('pages.homepage');
});
Route::get('about',function(){
	$halaman = 'about';
	return view('pages.about',compact('halaman'));
});

Route::get('halaman-rahasia',['as'=>'secret',function(){
	return 'anda sedang melihat<strong>Halaman Rahasia</strong>';
}]);

Route::get('showmesecret',function(){
	return redirect()->route('secret');
});

Route::get('siswa',function(){
	$halaman = 'siswa';
	$siswa=['rasmus lerdorf','Taylor otwell','Brendan Eich','john resig'];
	return view('siswa.index',compact('halaman','siswa'));
});




