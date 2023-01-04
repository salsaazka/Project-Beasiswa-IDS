<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ScholarshipAppController;
use App\http\controllers\DonorController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ScholarshipAppController::class, 'index'])->name('index');
Route::get('/form/submission', [ScholarshipAppController::class, 'submission'])->name('submission');
Route::post('/create/submission', [ScholarshipAppController::class, 'store'])->name('store');