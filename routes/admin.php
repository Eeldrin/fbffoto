<?php

// routes/admin.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
