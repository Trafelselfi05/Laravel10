<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MtsController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(AdminController::class)->group(function() {
    Route::get('/dash-admin', 'dashboard')->name('dash-admin');

    Route::get('/table-siswa', 'tableSiswa')->name('table-siswa');
    Route::post('/table-siswa', 'storeSiswa')->name('store-siswa');
    Route::delete('/table-siswa/{post}', 'deleteSiswa')->name('delete-siswa');
    Route::put('/table-siswa/{post}', 'updateSiswa')->name('update-siswa');

    
});

Route::controller(MtsController::class)->group(function() {
    Route::get('/', 'dashboard')->name("dash-guest");
    Route::get('/visi-misi', 'visiMisi')->name("visi-misi");
    Route::get('/guru-staff', 'guruStaff')->name("guru-staff");
    Route::get('/contact', 'contact')->name("contact");
    Route::get('/berita', 'berita')->name("berita");
});