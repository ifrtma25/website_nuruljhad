<?php

use App\Http\Controllers\adminpage\DashboardController as AdminpageDashboardController;
use App\Http\Controllers\landpage\DashboardController;
use App\Http\Controllers\landpage\NurulJihadController;
use App\Http\Controllers\landpage\RaudhatulAthfalController;
use App\Http\Controllers\landpage\RumahTahfidzController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [DashboardController::class, 'dashboard_landpage'])->name('landpage.dashboard');
Route::get('/nurul_jihad', [NurulJihadController::class, 'index'])->name('index.nurul_jihad');
Route::get('/raudhatul_athfal', [RaudhatulAthfalController::class, 'index'])->name('index.raudhatul_athfal');
Route::get('/rumah_tahfidz', [RumahTahfidzController::class, 'index'])->name('index.rumah_tahfidz');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard_admin', [AdminpageDashboardController::class, 'index'])->name('dashboard.admin');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
