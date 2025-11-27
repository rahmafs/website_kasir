<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\TypographyController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Kelola_kasirController;


Route::get('/', function () {
    return view('landing_page');
});

Route::get('data_master', [DashboardController::class, 'index'])->name('dataMaster');
// 1. data_master --> berfungsi sebagai url atau link
// 2. DashboardController --> memanggil controller yang halamannya ingin kita tampilkan (sebagai contoh : memanggil halaman/file "master" yang ada di dashboard)
// 3. index --> berasal dari fungsi yang dipilih pada controller "DashboardController".(fungsi nya harus sesuai dengan code yang memanggil halaman "master")
// 4. dataMaster --> nama yang dibuat unik untuk tombol, agar dapat memanggil halaman
Route::get('dashboard', [DashboardController::class, 'index2'])->name('dashboard');
Route::get('transaksi', [DashboardController::class, 'index3'])->name('transaksi');
// Route::get('landing_page', [DashboardController::class, 'index4'])->name('landing_page');
// LOGIN (menampilkan form)
Route::get('login', [LoginController::class, 'index'])->name('login');

// LOGIN (proses login)
Route::post('login', [LoginController::class, 'authenticate']);

Route::get('sidebar_kasir', [DashboardController::class, 'index7'])->name('sidebar_kasir');

Route::get('/dashboard_kasir', function () {
    return view('kasir.dashboard_kasir');
})->name('dashboard_kasir');

Route::get('transaksi_kasir', [DashboardController::class, 'index6'])->name('transaksi_kasir');
Route::get('riwayat', [DashboardController::class, 'index7'])->name('riwayat');
Route::get('stok', [DashboardController::class, 'index8'])->name('stok');
Route::get('/kelola_kasir', [Kelola_kasirController::class, 'index9'])->name('kelola_kasir');

Route::post('/kelola_kasir/store', [Kelola_kasirController::class, 'store'])->name('kelola_kasir.store');

Route::post('/kelola_kasir/update/{id}', [Kelola_kasirController::class, 'update'])->name('kelola_kasir.update');

Route::delete('/kelola_kasir/delete/{id}', [Kelola_kasirController::class, 'destroy'])->name('kelola_kasir.destroy');


// Route::get('dropdown', [DropdownController::class, 'utama'])->name('dropdown');
// Route::get('/', function () 
//     return view('welcome');
// });
