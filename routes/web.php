<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPageController;
use App\Models\Role;
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

// Route::middleware(['guest'])->group(function () {
//     Route::resource('/', LoginController::class);
// });

// Route::middleware(['auth'])->group(function() {
//     Route::middleware(['isadmin'])->group(function () {
        Route::get('home', [AdminPageController::class, 'HalamanUtama']);
        Route::get('daftar-absensi', [AdminPageController::class, 'Absensi']);
        Route::get('data-pengguna', [AdminPageController::class, 'DataPengguna']);
        Route::get('absen-harian', [AdminPageController::class, 'AbsenHariIni']);
        Route::get('absen-bulanan', [AdminPageController::class, 'AbseniBulanan']);
        Route::get('profile', [ProfileController::class, 'AdminProfile']);
    // });
    
    // Route::middleware(['isuser'])->group(function () {
    //     Route::get('home', [UserPageController::class, 'HalamanUtama']);
    //     Route::get('data-pengguna', [UserPageController::class, 'DataPengguna']);
    //     Route::get('daftar-absensi', [UserPageController::class, 'DaftarAbsensi']);
    //     Route::get('data-absen', [UserPageController::class, 'DataAbsen']);
    //     Route::get('profile', [ProfileController::class, 'UserProfile']);
    // });
// });