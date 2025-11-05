<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\OrderAdminController;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services.index');
Route::get('/services/{service:slug}', [HomeController::class, 'serviceShow'])->name('services.show');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/order/{service:slug?}', [OrderController::class, 'create'])->name('order.create');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

Route::get('/about', [HomeController::class, 'about'])->name('about');


// Breeze auth routes
require __DIR__.'/auth.php';

// Admin (dashboard GrowIn)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [OrderAdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/orders/{order}', [OrderAdminController::class, 'show'])->name('admin.orders.show');
    Route::patch('/admin/orders/{order}', [OrderAdminController::class, 'update'])->name('admin.orders.update');
}); // ⬅️ INI TADI YANG KURANG


// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
