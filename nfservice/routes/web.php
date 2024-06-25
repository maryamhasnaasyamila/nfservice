<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Controller untuk Dashbaord Admin & Mitra
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\AllLayananController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\AllRekapController;
use App\Http\Controllers\RekapOrderController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\FormElektronikController;
use App\Http\Controllers\FormOtomotifController;

Route::get('/', function () {
    return view('welcome');
});

// ROOT untuk Dashbaord
Route::get(
    '/dashboard-page',
    [DashboardController::class, 'index']
);

Route::get(
    '/dashboard-page/profil',
    [ProfilController::class, 'index']
);

Route::get(
    '/dashboard-page/service',
    [LayananController::class, 'index']
);

Route::get(
    '/dashboard-page/mitra',
    [MitraController::class, 'index']
);

Route::get(
    '/dashboard-page/services',
    [AllLayananController::class, 'index']
);

Route::get(
    '/dashboard-page/admin-recap',
    [AllRekapController::class, 'index']
);

Route::get(
    '/dashboard-page/mitra-recap',
    [RekapOrderController::class, 'index']
);


// ROOT untuk Home
Route::get(
    '/home-page',
    [HomeController::class, 'index']
);


// ROOT untuk Login
Route::get(
    '/masuk-akun',
    [LoginController::class, 'index']
);

// ROOT untuk Register
Route::get(
    '/daftar-akun',
    [RegisterController::class, 'index']
);

// ROOT untuk FORM
Route::get(
    '/home-page/form-elektronik',
    [FormElektronikController::class, 'index']
);

Route::get(
    '/home-page/form-otomotif',
    [FormOtomotifController::class, 'index']
);
