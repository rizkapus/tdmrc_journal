<?php

use App\Http\Controllers\JournalController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SkController;
use App\Http\Controllers\SuratMasukController;
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

Route::group(['middleware' => ['auth','cekUserLogin:1,2,3,4']], function(){
  
        Route::get('/listJournal', [JournalController::class, 'listJournal']);
        Route::get('/uploadJournal', [JournalController::class, 'uploadJournal']);           
        Route::post('/uploadJournal', [JournalController::class, 'postJournal']); 
        Route::get('/editJournal/{id}', [JournalController::class, 'editJournal']);
        Route::post('/updateJournal/{id}', [JournalController::class, 'updateJournal']);
        Route::get('/deleteJournal/{id}', [JournalController::class, 'deleteJournal']);
         
                 

});

Route::group(['middleware' => ['auth','cekUserLogin:1,2,3']], function(){

    Route::get('/listSk', [SkController::class, 'listSk']);
    Route::get('/uploadSk', [SkController::class, 'uploadSk']);
    Route::post('/uploadSk', [SkController::class, 'postSk']); 
    Route::get('/editSk/{id}', [SkController::class, 'editSk']);
    Route::post('/updateSk/{id}', [SkController::class, 'updateSk']);
    Route::get('/deleteSk/{id}', [SkController::class, 'deleteSk']);

    Route::get('/listSuratMasuk', [SuratMasukController::class, 'listSurat']);
    Route::get('/uploadSuratMasuk', [SuratMasukController::class, 'uploadSurat']);
    Route::post('/uploadSuratMasuk', [SuratMasukController::class, 'postSurat']);
    Route::get('/editSuratMasuk/{id}', [SuratMasukController::class, 'editSurat']);
    Route::post('/updateSuratMasuk/{id}', [SuratMasukController::class, 'updateSurat']);
    Route::get('/deleteSuratMasuk/{id}', [SuratMasukController::class, 'deleteSurat']);



});

Route::group(['middleware' => ['auth','cekUserLogin:1']], function(){
        Route::get('/userList', [UserController::class,'userList']);
        Route::get('/addUser', [UserController::class,'addUser']);
        Route::post('/addUser', [UserController::class, 'register']);
        Route::get('/delete/{id}', [UserController::class, 'delete']);
        Route::get('/editProfile/{id}', [UserController::class, 'edit']);
        Route::post('/updateProfile/{id}', [UserController::class, 'update']);
});



