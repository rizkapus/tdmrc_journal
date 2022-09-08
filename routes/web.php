<?php

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

Route::group(['middleware' => ['auth','cekUserLogin:1,2']], function(){
  
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