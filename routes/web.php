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



Route::get('/beranda', function () {
    return view('beranda');
});

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

Route::get('/struktur_organisasi', function () {
    return view('struktur_organisasi');
});

Route::get('/porjur', function () {
    return view('porjur');
});

Route::get('/layout-horizontal-menu', function () {
    return view('layout-horizontal-menu');
});

Route::get('/table-data', function () {
    return view('table-data');
});

Route::get('/table-dataa', function () {
    return view('table-dataa');
});