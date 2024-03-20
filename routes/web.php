<?php

use App\Http\Controllers\adminpage\DashboardController as AdminpageDashboardController;
use App\Http\Controllers\landpage\DashboardController;
use App\Http\Controllers\landPage\IkramnurjihadController;
use App\Http\Controllers\landPage\MajelisTaklimController;
use App\Http\Controllers\landpage\NurulJihadController;
use App\Http\Controllers\landpage\RaudhatulAthfalController;
use App\Http\Controllers\landpage\RumahTahfidzController;
use App\Http\Controllers\landPage\TPADarulIstiqamahCcontroller;
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

Route::get('/nurul_jihad', [NurulJihadController::class, 'index'])->name('nurul_jihad.index');
Route::get('/nurul_jihad/kajian', [NurulJihadController::class, 'kajian'])->name('nurul_jihad.kajian');
Route::get('/nurul_jihad/struktur', [NurulJihadController::class, 'struktur'])->name('nurul_jihad.struktur');
Route::get('/nurul_jihad/program', [NurulJihadController::class, 'program'])->name('nurul_jihad.program');

Route::get('/raudhatul_athfal', [RaudhatulAthfalController::class, 'index'])->name('raudhatul_athfal.index');

Route::get('/tpa_darulIstiqamah', [TPADarulIstiqamahCcontroller::class, 'index'])->name('tpa.index');

Route::get('/rumah_tahfidz', [RumahTahfidzController::class, 'index'])->name('rumah_tahfidz.index');

Route::get('/majelis_taklim', [MajelisTaklimController::class, 'index'])->name('majelis_taklim.index');

Route::get('/ikramnurjihad', [IkramnurjihadController::class, 'index'])->name('ikramnurjihad.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard_admin', [AdminpageDashboardController::class, 'index'])->name('dashboard.admin');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
