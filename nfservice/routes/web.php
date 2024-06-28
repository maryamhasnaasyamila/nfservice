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

Route::resource(
    '/dashboard-page/services',
    LayananController::class
);

Route::resource(
    '/dashboard-page/mitra',
    MitraController::class
);

Route::resource(
    '/dashboard-page/orders',
    AllRekapController::class
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
    '/',
    [HomeController::class, 'index']
);


// ROOT untuk Login
Route::get(
    '/login',
    [LoginController::class, 'index']
);

// ROOT untuk Register
Route::get(
    '/register',
    [RegisterController::class, 'index']
);

// ROOT untuk FORM
Route::get(
    '/form-elektronik',
    [FormElektronikController::class, 'index']
);

Route::get(
    '/form-otomotif',
    [FormOtomotifController::class, 'index']
);


// ROOT untuk ABOUT US
Route::get(
    '/about-us',
    [AboutController::class, 'index']
);


// ROOT untuk PROFIL TOKO
Route::get(
    '/toko',
    [TokoController::class, 'index']
);

// ROOT untuk DETAIL SERVICE
Route::get(
    '/detail',
    [DetailServiceController::class, 'index']
);

// ROOT untuk SERVICE ELEKTRONIK
Route::get(
    '/service-elektronik',
    [ServiceElektronikController::class, 'index']
);

// ROOT untuk SERVICE OTOMOTIF
Route::get(
    '/service-otomotif',
    [ServiceOtomotifController::class, 'index']
);
