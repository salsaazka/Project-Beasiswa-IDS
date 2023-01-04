<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ScholarshipAppController;
use App\http\controllers\DonorController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ScholarshipAppController::class, 'index'])->name('index');