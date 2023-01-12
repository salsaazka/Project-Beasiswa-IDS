<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ScholarshipAppController;
use App\http\controllers\DonorController;


Route::get('/', [ScholarshipAppController::class, 'index'])->name('index');
//Scholarship
Route::get('/form/submission', [ScholarshipAppController::class, 'submission'])->name('submission');
Route::post('/create/submission', [ScholarshipAppController::class, 'store'])->name('store');

Route::get('/logout', [ScholarshipAppController::class, 'logout'])->name('logout');
Route::get('/error', [ScholarshipAppController::class, 'error'])->name('error');

//Donor
Route::get('/form/donor', [DonorController::class, 'donor'])->name('donor');
Route::post('/create/donor', [DonorController::class, 'storeDonor'])->name('store.donor');

Route::middleware('Guest')->group(function(){
    Route::get('/login', [ScholarshipAppController::class, 'login'])->name('login');
    Route::post('/auth/login',  [ScholarshipAppController::class, 'auth'])->name('auth.login');
});

Route::middleware(['Login', 'Role:admin'])->group(function(){
    Route::get('/admin/dashboard', [ScholarshipAppController::class, 'adminDash'])->name('adminDash');
    Route::get('/admin/admin',  [ScholarshipAppController::class, 'adminAd'])->name('adminAd');
    Route::get('/admin/submission', [ScholarshipAppController::class, 'dataSub'])->name('admin.submission');
    Route::get('admin/image/{id}', [ScholarshipAppController::class, 'image'])->name('image');
    Route::get('/submission/excel', [ScholarshipAppController::class, 'export'])->name('export.excel');
    Route::post('/import/excel', [ScholarshipAppController::class, 'import'])->name('import.excel');
});

    //donatur
Route::middleware(['Login', 'Role:admin'])->group(function(){
    Route::get('/donor/xls', [DonorController::class, 'exportDonor'])->name('export.xls');
    Route::post('/import/xls', [DonorController::class, 'importDonor'])->name('import.xls');
    Route::get('/admin/donor', [DonorController::class, 'dataDonor'])->name('admin.donor');

});


