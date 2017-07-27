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

Route::get('/index', function () {
    return view('about.index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('status/{a?}',function(){
	$a='Fahmi';
    return $a;});

Route::get('/{nama}/{kelas}/{sekolah}',function($nama, $kelas, $sekolah){
    return'Nama: '.$nama. '<br>Kelas: '.$kelas.'<br>Sekolah: '.$sekolah;});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testmodel', function () {
	$query = App\Post::all();
    return $query;
});

Route::get('/testmodel1', function () {
	$query = App\Post::find(1);
    return $query;
});

Route::get('/testmodel2', function () {
	$query = App\Post::where('title', 'like','%cepat nikah%')->get();
    return $query;
});

Route::get('/testmodel3', function () {
	$query = App\Post::find(1);
	$query->title="Ciri-Ciri Keluarga Sakinah";
	$query->save();
    return $query;
});


//Siswa

Route::get('/siswa', function () {
	$query = App\Siswa::all();
    return $query;
});

Route::get('/siswa1', function () {
	$query = App\Siswa::find(1);
    return $query;
});

Route::get('/siswa2', function () {
	$query = App\Siswa::where('nama', 'like','%Imam%')->get();
    return $query;
});

Route::get('/siswa3', function () {
	$query = App\Siswa::find(1);
	$query->nama="Muhammad Fahmi Nur Aziz";
	$query->save();
    return $query;
});