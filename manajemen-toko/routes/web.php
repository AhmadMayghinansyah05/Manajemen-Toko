<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ✅ Halaman Utama: Redirect sesuai role jika sudah login
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route(Auth::user()->role === 'admin' ? 'dashboard' : 'sales.index');
    }
    return view('welcome'); // halaman default sebelum login
});

// ✅ Dashboard (Admin → dashboard.admin, Kasir → dashboard.kasir)
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// ✅ Semua route berikut hanya bisa diakses user login
Route::middleware('auth')->group(function () {

    // ✅ Profile (bawaan Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ✅ Group khusus Admin (Kategori & Produk)
    Route::group([
        'middleware' => function ($request, $next) {
            if (!Auth::user() || Auth::user()->role !== 'admin') {
                abort(403, 'Akses ditolak! (Hanya Admin)');
            }
            return $next($request);
        }
    ], function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
    });

    // ✅ Sales: Bisa diakses oleh Kasir & Admin
    Route::resource('sales', SaleController::class);
});

// ✅ Route login/register (Breeze)
require __DIR__.'/auth.php';
