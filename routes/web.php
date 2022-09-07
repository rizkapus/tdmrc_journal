<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SkController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UserController;
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

Route::get('/',[LayoutController::class,'index'])->middleware('auth');
Route::get('/home',[LayoutController::class,'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');

});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekUserLogin:1']], function(){
        Route::get('/listJournal', [JournalController::class, 'listJournal']);
        Route::get('/uploadJournal', [JournalController::class, 'uploadJournal']);
        Route::get('/listSk', [SkController::class, 'listSk']);
        Route::get('/uploadSk', [SkController::class, 'uploadSk']);
        Route::get('/listSurat', [SuratController::class, 'listSurat']);
        Route::get('/uploadSurat', [SuratController::class, 'uploadSurat']);
        Route::get('/userList', [UserController::class,'userList']);
        Route::get('/addUser', [UserController::class,'addUser']);
        Route::post('/addUser', [UserController::class, 'register']);

    });
    // Route::group(['middleware' => ['cekUserLogin:2']], function(){
    //     Route::get('/listJournal', [JournalController::class, 'listJournal']);
    //     Route::get('/uploadJournal', [JournalController::class, 'uploadJournal']);
    //     Route::get('/listSk', [SkController::class, 'listSk']);
    //     Route::get('/uploadSk', [SkController::class, 'uploadSk']);
    //     Route::get('/listSurat', [SuratController::class, 'listSurat']);
    //     Route::get('/uploadSurat', [SuratController::class, 'uploadSurat']);
    // });
    // Route::group(['middleware' => ['cekUserLogin:3']], function(){
    //     Route::get('/listJournal', [JournalController::class, 'listJournal']);
    //     Route::get('/uploadJournal', [JournalController::class, 'uploadJournal']);
    //     Route::get('/listSk', [SkController::class, 'listSk']);
    //     Route::get('/uploadSk', [SkController::class, 'uploadSk']);
    //     Route::get('/listSurat', [SuratController::class, 'listSurat']);
    //     Route::get('/uploadSurat', [SuratController::class, 'uploadSurat']);
    // });
    // Route::group(['middleware' => ['cekUserLogin:4']], function(){
    //     Route::get('/listJournal', [JournalController::class, 'listJournal']);
    //     Route::get('/uploadJournal', [JournalController::class, 'uploadJournal']);
    // });
    
});





// Route::get('/listJournal', function () {
//     return view('listJournal');
// });
// Route::get('/uploadJournal', function () {
//     return view('uploadJournal');
// });
// Route::get('/listSk', function () {
//     return view('listSk');
// });
// Route::get('/uploadSk', function () {
//     return view('uploadSk');
// });
// Route::get('/listSurat', function () {
//     return view('listSurat');
// });
// Route::get('/uploadSurat', function () {
//     return view('uploadSurat');
// });
// Route::get('/userList', function () {
//     return view('userList');
// });
// Route::get('/adminProfile', function () {
//     return view('adminProfile');
// });
// Route::get('/editProfile', function () {
//     return view('editProfile');
// });
