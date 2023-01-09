<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ScholarshipAppController;
use App\http\controllers\DonorController;


Route::get('/', [ScholarshipAppController::class, 'index'])->name('index');
//Scholarship
Route::get('/form/submission', [ScholarshipAppController::class, 'submission'])->name('submission');
Route::post('/create/submission', [ScholarshipAppController::class, 'store'])->name('store');

//Donor
Route::get('/form/donor', [DonorController::class, 'donor'])->name('donor');
Route::post('/create/donor', [DonorController::class, 'storeDonor'])->name('store.donor');

Route::middleware('Guest')->group(function(){
    Route::get('/login', [ScholarshipAppController::class, 'login'])->name('login');
    Route::post('/auth/login',  [ScholarshipAppController::class, 'auth'])->name('auth.login');
});

Route::middleware('Login')->group(function(){
    Route::get('/admin/dashboard', [ScholarshipAppController::class, 'adminDash'])->name('adminDash');
    Route::get('/admin/admin',  [ScholarshipAppController::class, 'adminAd'])->name('adminAd');
});


Route::get('/logout', [ScholarshipAppController::class, 'logout'])->name('logout');
Route::get('/error', [ScholarshipAppController::class, 'error'])->name('error');
