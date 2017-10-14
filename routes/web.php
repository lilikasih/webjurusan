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

Route::get('infobeasiswa/{id}', [
    'uses'=> 'InfoBeasiswaController@show']);

Route::get('/beranda', 'BeritaController@show')->name('beranda');

Route::get('berita/{id}', [
    'uses'=> 'InfoBeritaController@show']);

Route::get('/layouts.navbar', 'SaranaController@show');

Route::get('sarana/{id}', [
    'uses'=> 'InfoSaranaController@show']);

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/lokasi', function () {
    return view('lokasi');
});

Route::get('/struktur_organisasi', function () {
    return view('struktur_organisasi');
});

Route::get('/galeri', 'GaleriController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
