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
Route::get('/dashboard', 'DashboardController@index')->name('dashboard'); 	
Route::get('/DataSiswa', 'DataSiswaController@index')->name('datasiswa');
Route::resource('siswa','DataSiswaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Guru', 'GuruController@index')->name('dataguru');
Route::get('/Wali', 'WaliController@index')->name('datawali');
Route::get('/Mapel1', 'Mapel1Controller@index')->name('datamapel1');
Route::get('/Mapel2', 'Mapel2Controller@index')->name('datamapel2');
Route::get('/Mapel3', 'Mapel3Controller@index')->name('datamapel3');
Route::get('/Kelas', 'KelasController@index')->name('datakelas');
Route::get('/Pengumuman', 'PengumumanController@index')->name('datapengumuman');
Route::get('/Jadwal1', 'Jadwal1Controller@index')->name('datajadwal1');
Route::resource('guru','GuruController');
Route::resource('wali','WaliController');
Route::resource('mapel1','Mapel1Controller');
Route::resource('mapel2','Mapel2Controller');
Route::resource('mapel3','Mapel3Controller');
Route::resource('kelas','KelasController');
Route::resource('pengumuman','PengumumanController');
Route::resource('jadwal1','Jadwal1Controller');
