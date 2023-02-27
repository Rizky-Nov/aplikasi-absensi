<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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


Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'loginAct']);
});

Route::middleware(['auth'])->group(function() {
    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('home', [PageController::class, 'HalamanUtama']);
    Route::get('profile/{profile}', [ProfileController::class, 'Profile']);
    // Route::get('profile/{profile}', [ProfileController::class, 'Kelas']);
    
    Route::get('coba', [PageController::class, 'Coba']);
    Route::get('daftar-absensi', [PageController::class, 'Absensi']);
    Route::get('data-pengguna', [PageController::class, 'DataPengguna']);
    Route::get('absen-harian', [PageController::class, 'AbsenHariIni']);
    
    Route::middleware(['isadmin'])->group(function () {
        Route::get('absen-bulanan', [PageController::class, 'AbseniBulanan']);
    });
    
    Route::middleware(['isuser'])->group(function () {
        Route::get('data-absen', [PageController::class, 'DataAbsen']);
    });
});