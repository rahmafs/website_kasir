<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\TypographyController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('button', [DashboardController::class, 'index'])->name('button1');
Route::get('dropdown', [DashboardController::class, 'index2'])->name('dropdown');
Route::get('typography', [DashboardController::class, 'index3'])->name('typography');

// Route::get('dropdown', [DropdownController::class, 'utama'])->name('dropdown');
// Route::get('/', function () {
//     return view('welcome');
// });
