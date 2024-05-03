<?php

use App\Http\Controllers\adminpage\DashboardController as AdminpageDashboardController;
use App\Http\Controllers\adminpage\ikramnurjihad\KegiatanController as IkramnurjihadKegiatanController;
use App\Http\Controllers\adminpage\ikramnurjihad\StrukturController as IkramnurjihadStrukturController;
use App\Http\Controllers\adminpage\nuruljihad\KajianController;
use App\Http\Controllers\adminpage\nuruljihad\KegiatanController;
use App\Http\Controllers\adminpage\nuruljihad\PenceramahController;
use App\Http\Controllers\adminpage\nuruljihad\StrukturController;
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
Route::get('/', [DashboardController::class, 'dashboard_landpage'])->name('dashboard_landpage');

Route::get('/nurul_jihad', [NurulJihadController::class, 'index'])->name('nurul_jihad-index');
Route::get('/nurul_jihad/kajian', [NurulJihadController::class, 'kajian'])->name('nurul_jihad-kajian');
Route::get('/nurul_jihad/penceramah', [NurulJihadController::class, 'penceramah'])->name('nurul_jihad-penceramah');
Route::get('/nurul_jihad/struktur', [NurulJihadController::class, 'struktur'])->name('nurul_jihad-struktur');
Route::get('/nurul_jihad/kegiatan', [NurulJihadController::class, 'kegiatan'])->name('nurul_jihad-kegiatan');
Route::get('/nurul_jihad/kontak', [NurulJihadController::class, 'kontak'])->name('nurul_jihad-kontak');

Route::get('/raudhatul_athfal', [RaudhatulAthfalController::class, 'index'])->name('raudhatul_athfal-index');
Route::get('/raudhatul_athfal/struktur', [RaudhatulAthfalController::class, 'struktur'])->name('raudhatul_athfal-struktur');

Route::get('/tpa_darulIstiqamah', [TPADarulIstiqamahCcontroller::class, 'index'])->name('tpa-index');

Route::get('/rumah_tahfidz', [RumahTahfidzController::class, 'index'])->name('rumah_tahfidz-index');

Route::get('/majelis_taklim', [MajelisTaklimController::class, 'index'])->name('majelis_taklim-index');

Route::get('/ikramnurjihad', [IkramnurjihadController::class, 'index'])->name('ikramnurjihad-index');
Route::get('/ikramnurjihad/struktur', [IkramnurjihadController::class, 'struktur'])->name('ikramnurjihad-struktur');
Route::get('/ikramnurjihad/kajian', [IkramnurjihadController::class, 'kajian'])->name('ikramnurjihad-kajian');
Route::get('/ikramnurjihad/kegiatan', [IkramnurjihadController::class, 'kegiatan'])->name('ikramnurjihad-kegiatan');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard_admin', [AdminpageDashboardController::class, 'index'])->name('dashboard-admin');

    Route::get('/nurul_jihad/kajian-admin', [KajianController::class, 'index'])->name('kajian-nuruljihad-admin');
    Route::get('/nurul_jihad/kajian-admin/create', [KajianController::class, 'create'])->name('create-kajian-nuruljihad-admin');
    Route::post('/nurul_jihad/kajian-admin/store', [KajianController::class, 'store'])->name('store-kajian-nuruljihad-admin');
    Route::get('/nurul_jihad/kajian-admin/edit/{id}', [KajianController::class, 'edit'])->name('edit-kajian-nuruljihad-admin');
    Route::put('/nurul_jihad/kajian-admin/update/{id}', [KajianController::class, 'update'])->name('update-kajian-nuruljihad-admin');
    Route::delete('/nurul_jihad/kajian-admin/delete/{id}', [KajianController::class, 'delete'])->name('delete-kajian-nuruljihad-admin');

    Route::get('/nurul_jihad/kegiatan-admin', [KegiatanController::class, 'index'])->name('kegiatan-nuruljihad-admin');
    Route::get('/nurul_jihad/kegiatan-admin/create', [KegiatanController::class, 'create'])->name('create-kegiatan-nuruljihad-admin');
    Route::post('/nurul_jihad/kegiatan-admin/store', [KegiatanController::class, 'store'])->name('store-kegiatan-nuruljihad-admin');
    Route::get('/nurul_jihad/kegiatan-admin/edit/{id}', [KegiatanController::class, 'edit'])->name('edit-kegiatan-nuruljihad-admin');
    Route::put('/nurul_jihad/kegiatan-admin/update/{id}', [KegiatanController::class, 'update'])->name('update-kegiatan-nuruljihad-admin');
    Route::delete('/nurul_jihad/kegiatan-admin/delete/{id}', [KegiatanController::class, 'delete'])->name('delete-kegiatan-nuruljihad-admin');

    Route::get('/nurul_jihad/struktur-admin', [StrukturController::class, 'index'])->name('struktur-nuruljihad-admin');
    Route::get('/nurul_jihad/struktur-admin/create', [StrukturController::class, 'create'])->name('create-struktur-nuruljihad-admin');
    Route::post('/nurul_jihad/struktur-admin/store', [StrukturController::class, 'store'])->name('store-struktur-nuruljihad-admin');
    Route::get('/nurul_jihad/struktur-admin/edit/{id}', [StrukturController::class, 'edit'])->name('edit-struktur-nuruljihad-admin');
    Route::put('/nurul_jihad/struktur-admin/update/{id}', [StrukturController::class, 'update'])->name('update-struktur-nuruljihad-admin');
    Route::delete('/nurul_jihad/struktur-admin/delete/{id}', [StrukturController::class, 'delete'])->name('delete-struktur-nuruljihad-admin');

    Route::get('/nurul_jihad/penceramah-admin', [PenceramahController::class, 'index'])->name('penceramah-nuruljihad-admin');
    Route::get('/nurul_jihad/penceramah-admin/create', [PenceramahController::class, 'create'])->name('create-penceramah-nuruljihad-admin');
    Route::post('/nurul_jihad/penceramah-admin/store', [PenceramahController::class, 'store'])->name('store-penceramah-nuruljihad-admin');
    Route::get('/nurul_jihad/penceramah-admin/edit/{id}', [PenceramahController::class, 'edit'])->name('edit-penceramah-nuruljihad-admin');
    Route::put('/nurul_jihad/penceramah-admin/update/{id}', [PenceramahController::class, 'update'])->name('update-penceramah-nuruljihad-admin');
    Route::delete('/nurul_jihad/penceramah-admin/delete/{id}', [PenceramahController::class, 'delete'])->name('delete-penceramah-nuruljihad-admin');

    Route::get('/ikramnurjihad/kegiatan-admin', [IkramnurjihadKegiatanController::class, 'index'])->name('kegiatan-ikramnurjihad-admin');
    Route::get('/ikramnurjihad/kegiatan-admin/create', [IkramnurjihadKegiatanController::class, 'create'])->name('create-kegiatan-ikramnurjihad-admin');
    Route::post('/ikramnurjihad/kegiatan-admin/store', [IkramnurjihadKegiatanController::class, 'store'])->name('store-kegiatan-ikramnurjihad-admin');
    Route::get('/ikramnurjihad/kegiatan-admin/edit/{id}', [IkramnurjihadKegiatanController::class, 'edit'])->name('edit-kegiatan-ikramnurjihad-admin');
    Route::put('/ikramnurjihad/kegiatan-admin/update/{id}', [IkramnurjihadKegiatanController::class, 'update'])->name('update-kegiatan-ikramnurjihad-admin');
    Route::delete('/ikramnurjihad/kegiatan-admin/delete/{id}', [IkramnurjihadKegiatanController::class, 'delete'])->name('delete-kegiatan-ikramnurjihad-admin');

    Route::get('/ikramnurjihad/struktur-admin', [IkramnurjihadStrukturController::class, 'index'])->name('struktur-ikramnurjihad-admin');
    Route::get('/ikramnurjihad/struktur-admin/create', [IkramnurjihadStrukturController::class, 'create'])->name('create-struktur-ikramnurjihad-admin');
    Route::post('/ikramnurjihad/struktur-admin/store', [IkramnurjihadStrukturController::class, 'store'])->name('store-struktur-ikramnurjihad-admin');
    Route::get('/ikramnurjihad/struktur-admin/edit/{id}', [IkramnurjihadStrukturController::class, 'edit'])->name('edit-struktur-ikramnurjihad-admin');
    Route::put('/ikramnurjihad/struktur-admin/update/{id}', [IkramnurjihadStrukturController::class, 'update'])->name('update-struktur-ikramnurjihad-admin');
    Route::delete('/ikramnurjihad/struktur-admin/delete/{id}', [IkramnurjihadStrukturController::class, 'delete'])->name('delete-struktur-ikramnurjihad-admin');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
