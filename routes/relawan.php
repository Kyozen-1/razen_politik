<?php
use App\Http\Controllers\Relawan\DashboardController;

Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('relawan.dashboard.index');
    Route::post('/change', [DashboardController::class, 'change'])->name('relawan.dashboard.change');
});
