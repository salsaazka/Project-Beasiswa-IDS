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
