<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PresentsController;
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
Route::get('/login', 'App\Http\Controllers\AuthController@index')->name('auth.index')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login')->middleware('guest');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => ['web', 'auth', 'roles']], function(){
    Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

    Route::get('/ganti-password', 'App\Http\Controllers\UsersController@gantiPassword')->name('ganti-password');
    Route::patch('/update-password/{user}', 'App\Http\Controllers\UsersController@updatePassword')->name('update-password');
    Route::get('/profil', 'App\Http\Controllers\UsersController@profil')->name('profil');
    Route::patch('/update-profil/{user}', 'App\Http\Controllers\UsersController@updateProfil')->name('update-profil');

    Route::group(['roles' => 'Admin'], function(){
        Route::get('/users/cari', 'App\Http\Controllers\UsersController@search')->name('users.search');
        Route::patch('/users/password/{user}', 'App\Http\Controllers\UsersController@password')->name('users.password');
        Route::resource('/users', 'App\Http\Controllers\UsersController');

        Route::get('/kehadiran', 'App\Http\Controllers\PresentsController@index')->name('kehadiran.index');
        Route::get('/kehadiran/cari', 'App\Http\Controllers\PresentsController@search')->name('kehadiran.search');
        Route::get('/kehadiran/{user}/cari', 'App\Http\Controllers\PresentsController@cari')->name('kehadiran.cari');
        Route::get('/kehadiran/excel-users', 'App\Http\Controllers\PresentsController@excelUsers')->name('kehadiran.excel-users');
        Route::get('/kehadiran/{user}/excel-user', 'App\Http\Controllers\PresentsController@excelUser')->name('kehadiran.excel-user');
        Route::post('/kehadiran/ubah', 'App\Http\Controllers\PresentsController@ubah')->name('ajax.get.kehadiran');
        Route::patch('/kehadiran/{kehadiran}', 'App\Http\Controllers\PresentsController@update')->name('kehadiran.update');
        Route::post('/kehadiran', 'App\Http\Controllers\PresentsController@store')->name('kehadiran.store');
    });

    Route::group(['roles' => 'Pegawai'], function(){

        Route::get('/daftar-hadir', 'App\Http\Controllers\PresentsController@show')->name('daftar-hadir');
        Route::get('/daftar-hadir/cari', 'App\Http\Controllers\PresentsController@cariDaftarHadir')->name('daftar-hadir.cari');
    });

    Route::group(['middleware' => ['auth','roles:admin,karyawan']], function() {

        Route::patch('/absen/{kehadiran}', 'App\Http\Controllers\PresentsController@checkOut')->name('kehadiran.check-out');
        Route::post('/absen', 'App\Http\Controllers\PresentsController@checkIn')->name('kehadiran.check-in');
    });
});
