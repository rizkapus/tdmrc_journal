<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});
Route::get('/listJournal', function () {
    return view('listJournal');
});
Route::get('/uploadJournal', function () {
    return view('uploadJournal');
});
Route::get('/listSk', function () {
    return view('listSk');
});
Route::get('/uploadSk', function () {
    return view('uploadSk');
});
Route::get('/adminProfile', function () {
    return view('adminProfile');
});

