<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AdminLoginController;

Route::get('/', function () {
    return view('ilos');
})->name('ilos');

Route::get('/photos', function () {
    return view('products.photos');
})->name('products.photos');

Route::get('/products', function () {
    return view('products.index');
})->name('products.index');

Route::get('/products/{id}', function ($id) {
    return view('products.show', ['id' => $id]);
})->name('products.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Admin Paneli İşlemleri
Route::get('/admin/login', [AdminLoginController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

