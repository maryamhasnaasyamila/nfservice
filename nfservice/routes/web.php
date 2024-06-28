<?php

use App\Http\Controllers\AboutController;
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
use App\Http\Controllers\FormsController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\FormElektronikController;
use App\Http\Controllers\FormOtomotifController;

use App\Http\Controllers\ServiceElektronikController;
use App\Http\Controllers\ServiceOtomotifController;

use App\Http\Controllers\TokoController;
use App\Http\Controllers\DetailServiceController;




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

Route::get(
    '/dashboard-page/service/form-layanan',
    [FormsController::class, 'index']
);



// ROOT untuk Home
Route::get(
    '/home-page',
    [HomeController::class, 'index']
);


// ROOT untuk Login
Route::get(
    '/home-page/login',
    [LoginController::class, 'index']
);

// ROOT untuk Register
Route::get(
    '/home-page/register',
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


// ROOT untuk ABOUT US
Route::get(
    '/home-page/about-us',
    [AboutController::class, 'index']
);


// ROOT untuk PROFIL TOKO
Route::get(
    '/home-page/toko',
    [TokoController::class, 'index']
);

// ROOT untuk DETAIL SERVICE
Route::get(
    '/home-page/detail',
    [DetailServiceController::class, 'index']
);

// ROOT untuk SERVICE ELEKTRONIK
Route::get(
    '/home-page/service-elektronik',
    [ServiceElektronikController::class, 'index']
);

// ROOT untuk SERVICE OTOMOTIF
Route::get(
    '/home-page/service-otomotif',
    [ServiceOtomotifController::class, 'index']
);
