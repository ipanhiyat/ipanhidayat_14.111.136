<?php
use App\Mahasiswa;
route::get ('/', 'viewcontroller@index');
route::get ('/halamanawal', 'viewcontroller@xhalamanawal');
route::get ('/tambah', 'viewcontroller@xtambah');
route::get ('/edit', 'viewcontroller@xedit');

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

Route::get('/', function(){
	return view('home');
});

Route::get('/halamanawal', function(){
	return view('halamanawal');
});

Route::get('/edit', function(){
	return view('edit');
});

Route::get('/tambah', function(){
	return view('tambah');
});
route::get('/tambah', function(){
	$mahasiswa = New mahasiswa;
	$mahasiswa -> nama = "ipan";
	$mahasiswa -> nim = "14111136";
	$mahasiswa -> alamat ="bandung";
	$mahasiswa -> save();
});
route::get('/ubah', function()
{
	$mahasiswa = Mahasiswa::find(1);
	$mahasiswa -> nama = "ipan hidayat";
	$mahasiswa -> nim = "14111136";
	$mahasiswa -> alamat ="bandung";
	$mahasiswa -> save();
});
route::get('/tampil',function()
{
	$mahasiswa = Mahasiswa::all();
	foreach($mahasiswa as $mhs)
	{
		echo"<b>Nama</b>:";
		echo $mhs>nama;
		echo"<br><b>NIM</b>:";
		echo $mhs->nim;
		echo"<br><b>Alamat</b>:";
		echo $mhs->Alamat;
	}
});
route::get('/hapus',function()
{
	$mahasiswa = Mahasiswa::find(2);
	$mahasiswa-> delete();
});	

	
	