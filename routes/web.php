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
    return view('index');
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