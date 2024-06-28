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


