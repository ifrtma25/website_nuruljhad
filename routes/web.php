<?php

use App\Http\Controllers\adminpage\DashboardController as AdminpageDashboardController;
use App\Http\Controllers\adminPage\EventController;
use App\Http\Controllers\adminPage\KajianController;
use App\Http\Controllers\adminPage\StrukturController;
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
Route::get('/nurul_jihad/penceramah', [NurulJihadController::class, 'penceramah'])->name('nurul_jihad.penceramah');
Route::get('/nurul_jihad/struktur', [NurulJihadController::class, 'struktur'])->name('nurul_jihad.struktur');
Route::get('/nurul_jihad/event', [NurulJihadController::class, 'event'])->name('nurul_jihad.event');

Route::get('/raudhatul_athfal', [RaudhatulAthfalController::class, 'index'])->name('raudhatul_athfal.index');

Route::get('/tpa_darulIstiqamah', [TPADarulIstiqamahCcontroller::class, 'index'])->name('tpa.index');

Route::get('/rumah_tahfidz', [RumahTahfidzController::class, 'index'])->name('rumah_tahfidz.index');

Route::get('/majelis_taklim', [MajelisTaklimController::class, 'index'])->name('majelis_taklim.index');

Route::get('/ikramnurjihad', [IkramnurjihadController::class, 'index'])->name('ikramnurjihad.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard_admin', [AdminpageDashboardController::class, 'index'])->name('dashboard.admin');

    Route::get('/nurul_jihad/kajian-admin', [KajianController::class, 'index'])->name('kajian.nuruljihad.admin');
    Route::get('/nurul_jihad/kajian-admin/create', [KajianController::class, 'create'])->name('create.kajian.nuruljihad.admin');
    Route::post('/nurul_jihad/kajian-admin/store', [KajianController::class, 'store'])->name('store.kajian.nuruljihad.admin');
    Route::get('/nurul_jihad/kajian-admin/edit/{id}', [KajianController::class, 'edit'])->name('edit.kajian.nuruljihad.admin');
    Route::put('/nurul_jihad/kajian-admin/update/{id}', [KajianController::class, 'update'])->name('update.kajian.nuruljihad.admin');
    Route::delete('/nurul_jihad/kajian-admin/delete/{id}', [KajianController::class, 'delete'])->name('delete.kajian.nuruljihad.admin');

    Route::get('/nurul_jihad/event-admin', [EventController::class, 'index'])->name('event.nuruljihad.admin');
    Route::get('/nurul_jihad/event-admin/create', [EventController::class, 'create'])->name('create.event.nuruljihad.admin');
    Route::post('/nurul_jihad/event-admin/store', [EventController::class, 'store'])->name('store.event.nuruljihad.admin');
    // Route::get('/nurul_jihad/event-admin/edit/{id}', [EventController::class, 'edit'])->name('edit.event.nuruljihad.admin');
    // Route::put('/nurul_jihad/event-admin/update/{id}', [EventController::class, 'update'])->name('update.event.nuruljihad.admin');
    // Route::delete('/nurul_jihad/event-admin/delete/{id}', [EventController::class, 'delete'])->name('delete.event.nuruljihad.admin');

    Route::get('/nurul_jihad/struktur-admin', [StrukturController::class, 'index'])->name('struktur.nuruljihad.admin');
    Route::get('/nurul_jihad/struktur-admin/create', [StrukturController::class, 'create'])->name('create.struktur.nuruljihad.admin');
    Route::post('/nurul_jihad/struktur-admin/store', [StrukturController::class, 'store'])->name('store.struktur.nuruljihad.admin');
    Route::get('/nurul_jihad/struktur-admin/edit/{id}', [StrukturController::class, 'edit'])->name('edit.struktur.nuruljihad.admin');
    Route::put('/nurul_jihad/struktur-admin/update/{id}', [StrukturController::class, 'update'])->name('update.struktur.nuruljihad.admin');
    Route::delete('/nurul_jihad/struktur-admin/delete/{id}', [StrukturController::class, 'delete'])->name('delete.struktur.nuruljihad.admin');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
