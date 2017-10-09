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

Route::get('index', 'HomeController@index')->name ('index');


Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/informatika', function () {
    return view('informatika');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/sisteminfo', function () {
    return view('sisteminfo');
});

Route::get('/manajemen', function () {
    return view('manajemen');
});

Route::get('/dosen', 'DosenController@show');

Route::get('/beasiswa', 'BeasiswaController@show');

Route::get('/beranda', 'BeritaController@show', 'SaranaController@show');

Route::get('infobeasiswa/{id}', [
    'uses'=> 'InfoBeasiswaController@show']);

Route::get('berita/{id}', [
    'uses'=> 'InfoBeritaController@show']);

Route::get('sarana/{id}', [
    'uses'=> 'InfoSaranaController@show']);

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/lokasi', function () {
    return view('lokasi');
});

Route::get('/ruangkuliah', function () {
    return view('ruangkuliah');
});

Route::get('/lab_rpl', function () {
    return view('lab_rpl');
});

Route::get('/lab_jarkom', function () {
    return view('lab_jarkom');
});

Route::get('/lab_mmk', function () {
    return view('lab_mmk');
});

Route::get('/lab_si', function () {
    return view('lab_si');
});

Route::get('/ruangbaca', function () {
    return view('ruangbaca');
});

Route::get('/struktur_organisasi', function () {
    return view('struktur_organisasi');
});

Route::get('/table-data', function () {
    return view('table-data');
});

Route::get('/table-dataa', function () {
    return view('table-dataa');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
