<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;

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
//route login
Route::get('/login', [LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');

//route role admin
Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::get('/halaman-satu', [BerandaController::class,'halamansatu'])->name('halaman-satu');    
});

//route role user
Route::group(['middleware' => ['auth','ceklevel:admin,user,pegawai']], function () {
    Route::get('/beranda', [BerandaController::class,'index']);
    Route::get('/halaman-dua', [BerandaController::class,'halamandua'])->name('halaman-dua');
});

//route role pegawai
Route::group(['middleware' => ['auth','ceklevel:admin,pegawai']], function () {
    Route::get('/halaman-tiga', [BerandaController::class,'halamantiga'])->name('halaman-tiga');
});
