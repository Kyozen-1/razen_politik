<?php
use App\Http\Controllers\Koordinator\DashboardController;

Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('koordinator.dashboard.index');
    Route::post('/change', [DashboardController::class, 'change'])->name('koordinator.dashboard.change');
});
