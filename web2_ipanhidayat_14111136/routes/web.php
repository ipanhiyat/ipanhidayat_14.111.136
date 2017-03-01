<?php

use App\Mahasiswa;

route::get ('/', 'ViewController@index');
route::get ('/halamanawal', 'ViewController@xhalamanawal');
route::get ('/tambah', 'ViewController@xtambah');
route::get ('/edit', 'ViewController@xedit');
route::get ('/add_items', 'viewcontroller@form_add');
Route::post('add_items/action', 'viewcontroller@add_action');
Route::resource('mahasiswa', 'viewcontroller');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
