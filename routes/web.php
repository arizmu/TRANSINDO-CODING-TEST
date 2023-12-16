<?php

use App\Http\Controllers\CostumerController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Transaksi;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('register', [CostumerController::class, 'register'])->name('register');
Route::post('/costumer/register', [CostumerController::class, 're_store'])->name('register.store');
Route::get('/costumers/data', [CostumerController::class, 'data'])->name('costumers.data');

Route::get('mobil', [MobilController::class, 'index'])->name('mobil');
Route::get('mobil/create', [MobilController::class, 'create'])->name('mobil.create');
Route::post('mobil/store', [MobilController::class, 'store'])->name('mobil.store');

Route::get('peminjaman', [Transaksi::class, 'peminjaman'])->name('peminjaman');
Route::get('peminjaman/create', [Transaksi::class, 'peminjaman_create'])->name('peminjaman.create');
Route::get('pemesanan/mobil/{key}', [Transaksi::class, 'mobil'])->name('pemesanan.mobil');
Route::post('peminjaman/store', [Transaksi::class, 'peminjaman_store'])->name('peminjaman.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
