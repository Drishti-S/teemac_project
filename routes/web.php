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


View::addExtension('html', 'php');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Q1', function () {
    return view('Q1');
});

Route::get('/Q2', function () {
    return view('Q2');
});

Route::get('/Q3', function () {
    return view('Q3');
});