<?php

use Illuminate\Support\Facades\Route;

// Controller untuk Dashbaord Admin & Mitra
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\AllLayananController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\AllRekapController;
use App\Http\Controllers\RekapOrderController;

Route::get('/', function () {
    return view('welcome');
});

// ROOT untuk Dashbaord
Route::get(
    '/dashboard',
    [DashboardController::class, 'index']
);

Route::get(
    '/dashboard/profil',
    [ProfilController::class, 'index']
);

Route::get(
    '/dashboard/layanan',
    [LayananController::class, 'index']
);

Route::get(
    '/dashboard/mitra',
    [MitraController::class, 'index']
);

Route::get(
    '/dashboard/semualayanan',
    [AllLayananController::class, 'index']
);

Route::get(
    '/dashboard/allrekaporder',
    [AllRekapController::class, 'index']
);

Route::get(
    '/dashboard/rekaporder',
    [RekapOrderController::class, 'index']
);
