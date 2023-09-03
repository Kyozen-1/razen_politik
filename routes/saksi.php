<?php
use App\Http\Controllers\Saksi\DashboardController;

Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('saksi.dashboard.index');
    Route::post('/change', [DashboardController::class, 'change'])->name('saksi.dashboard.change');
});
