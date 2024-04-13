<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CategoryController;






Route::get('/', [WebsiteController::class, 'home'])->name('home');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::get('admin/login', [AdminController::class, 'showAdminLogin'])->name('admin.login');
Route::post('admin/login/check', [AdminController::class, 'checkAdminLogin'])->name('process.admin.login');


Route::middleware(['admin'])->group(function () {

    Route::get('/admin/MyDashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


    //Brands

    Route::get('/brand', [BrandController::class, 'index'])->name('brand');
    Route::post('/add/brand', [BrandController::class, 'store'])->name('store.brand');
    Route::delete('/delete/brand/{id}', [BrandController::class, 'destroy'])->name('delete.brand');
    Route::put('/brands/{id}', [BrandController::class, 'update'])->name('brand.update');

    // Category

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/add/category', [CategoryController::class, 'store'])->name('store.category');
    Route::delete('/delete/category/{id}', [CategoryController::class, 'destroy'])->name('delete.category');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');



});







require __DIR__ . '/auth.php';