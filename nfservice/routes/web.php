<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllRekapController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RekapOrderController;
use App\Http\Controllers\FormOtomotifController;
use App\Http\Controllers\DetailServiceController;
use App\Http\Controllers\FormElektronikController;
use App\Http\Controllers\ServiceOtomotifController;
use App\Http\Controllers\ServiceElektronikController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\VerificationController;

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

Route::get('services', [ServicesController::class, 'index'])->name('services.index');
Route::get('services/{slug}', [ServicesController::class, 'show'])->name('services.show');
Route::get('services/{slug}/detail', [ServicesController::class, 'detail'])->name('services.detail');

// ROOT untuk SERVICE ELEKTRONIK

Route::get('/verifverificationy/{hash}', [VerificationController::class, 'showVerificationForm'])->name('verification.form');
Route::post('/verify/{hash}', [VerificationController::class, 'verify'])->name('verification');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ROOT untuk Dashbaord
    Route::get(
        '/dashboard-page',
        [DashboardController::class, 'index']
    )->name('dashboard');

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
});

require __DIR__ . '/auth.php';
