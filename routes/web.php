<?php

use App\Http\Controllers\adminpage\DashboardController as AdminpageDashboardController;
use App\Http\Controllers\adminpage\ikramnurjihad\KegiatanController as IkramnurjihadKegiatanController;
use App\Http\Controllers\adminpage\ikramnurjihad\StrukturController as IkramnurjihadStrukturController;
use App\Http\Controllers\adminPage\majelistaklim\KajianController as MajelistaklimKajianController;
use App\Http\Controllers\adminPage\majelistaklim\KeanggotaanController;
use App\Http\Controllers\adminpage\nuruljihad\KajianController;
use App\Http\Controllers\adminpage\nuruljihad\KegiatanController;
use App\Http\Controllers\adminpage\nuruljihad\PenceramahController;
use App\Http\Controllers\adminpage\nuruljihad\StrukturController;
use App\Http\Controllers\adminPage\raudhatulathfal\AlumniController;
use App\Http\Controllers\adminPage\raudhatulathfal\DaftarGuruController;
use App\Http\Controllers\adminPage\raudhatulathfal\DaftarSiswaController;
use App\Http\Controllers\adminPage\raudhatulathfal\StrukturController as RaudhatulathfalStrukturController;
use App\Http\Controllers\adminPage\rumahtahfidz\DaftarSantriController;
use App\Http\Controllers\adminPage\rumahtahfidz\ProgramController;
use App\Http\Controllers\adminPage\rumahtahfidz\StrukturController as RumahtahfidzStrukturController;
use App\Http\Controllers\adminPage\tpa_darulistiqamah\DaftarSantriController as Tpa_darulistiqamahDaftarSantriController;
use App\Http\Controllers\adminPage\tpa_darulistiqamah\UstadzUstadzahController;
use App\Http\Controllers\adminPage\tpa_darulistiqamah\WisudawanController;
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
Route::get('/raudhatul_athfal/daftar_siswa', [RaudhatulAthfalController::class, 'daftar_siswa'])->name('raudhatul_athfal-daftar_siswa');
Route::get('/raudhatul_athfal/alumni', [RaudhatulAthfalController::class, 'alumni'])->name('raudhatul_athfal-alumni');
Route::get('/raudhatul_athfal/daftar_guru', [RaudhatulAthfalController::class, 'daftar_guru'])->name('raudhatul_athfal-daftar_guru');
Route::get('/raudhatul_athfal/struktur', [RaudhatulAthfalController::class, 'struktur'])->name('raudhatul_athfal-struktur');

Route::get('/tpa_darulIstiqamah', [TPADarulIstiqamahCcontroller::class, 'index'])->name('tpa-index');
Route::get('/tpa_darulIstiqamah/daftar_santri', [TPADarulIstiqamahCcontroller::class, 'daftar_santri'])->name('tpa-daftar_santri');
Route::get('/tpa_darulIstiqamah/ustadz_ustadzah', [TPADarulIstiqamahCcontroller::class, 'ustadz_ustadzah'])->name('tpa-ustadz_ustadzah');
Route::get('/tpa_darulIstiqamah/wisudawan', [TPADarulIstiqamahCcontroller::class, 'wisudawan'])->name('tpa-wisudawan');

Route::get('/rumah_tahfidz', [RumahTahfidzController::class, 'index'])->name('rumah_tahfidz-index');
Route::get('/rumah_tahfidz/program', [RumahTahfidzController::class, 'program'])->name('rumah_tahfidz-program');
Route::get('/rumah_tahfidz/daftar_santri', [RumahTahfidzController::class, 'daftar_santri'])->name('rumah_tahfidz-daftar_santri');
Route::get('/rumah_tahfidz/jadwal', [RumahTahfidzController::class, 'jadwal'])->name('rumah_tahfidz-jadwal');
Route::get('/rumah_tahfidz/struktur', [RumahTahfidzController::class, 'struktur'])->name('rumah_tahfidz-struktur');

Route::get('/majelis_taklim', [MajelisTaklimController::class, 'index'])->name('majelis_taklim-index');
Route::get('/majelis_taklim/kajian', [MajelisTaklimController::class, 'kajian'])->name('majelis_taklim-kajian');
Route::get('/majelis_taklim/keanggotaan', [MajelisTaklimController::class, 'keanggotaan'])->name('majelis_taklim-keanggotaan');

Route::get('/ikramnurjihad', [IkramnurjihadController::class, 'index'])->name('ikramnurjihad-index');
Route::get('/ikramnurjihad/struktur', [IkramnurjihadController::class, 'struktur'])->name('ikramnurjihad-struktur');
Route::get('/ikramnurjihad/kajian', [IkramnurjihadController::class, 'kajian'])->name('ikramnurjihad-kajian');
Route::get('/ikramnurjihad/kegiatan', [IkramnurjihadController::class, 'kegiatan'])->name('ikramnurjihad-kegiatan');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard_admin', [AdminpageDashboardController::class, 'index'])->name('dashboard-admin');

    // Nurul Jihad
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

    // Rumah Tahfidz
    Route::get('/rumah_tahfidz/program-admin', [ProgramController::class, 'index'])->name('program-rumah_tahfidz-admin');
    Route::get('/rumah_tahfidz/program-admin/create', [ProgramController::class, 'create'])->name('create-program-rumah_tahfidz-admin');
    Route::post('/rumah_tahfidz/program-admin/store', [ProgramController::class, 'store'])->name('store-program-rumah_tahfidz-admin');
    Route::get('/rumah_tahfidz/program-admin/edit/{id}', [ProgramController::class, 'edit'])->name('edit-program-rumah_tahfidz-admin');
    Route::put('/rumah_tahfidz/program-admin/update/{id}', [ProgramController::class, 'update'])->name('update-program-rumah_tahfidz-admin');
    Route::delete('/rumah_tahfidz/program-admin/delete/{id}', [ProgramController::class, 'delete'])->name('delete-program-rumah_tahfidz-admin');

    Route::get('/rumah_tahfidz/daftar_santri-admin', [DaftarSantriController::class, 'index'])->name('daftar_santri-rumah_tahfidz-admin');
    Route::get('/rumah_tahfidz/daftar_santri-admin/create', [DaftarSantriController::class, 'create'])->name('create-daftar_santri-rumah_tahfidz-admin');
    Route::post('/rumah_tahfidz/daftar_santri-admin/store', [DaftarSantriController::class, 'store'])->name('store-daftar_santri-rumah_tahfidz-admin');
    Route::get('/rumah_tahfidz/daftar_santri-admin/edit/{id}', [DaftarSantriController::class, 'edit'])->name('edit-daftar_santri-rumah_tahfidz-admin');
    Route::put('/rumah_tahfidz/daftar_santri-admin/update/{id}', [DaftarSantriController::class, 'update'])->name('update-daftar_santri-rumah_tahfidz-admin');
    Route::delete('/rumah_tahfidz/daftar_santri-admin/delete/{id}', [DaftarSantriController::class, 'delete'])->name('delete-daftar_santri-rumah_tahfidz-admin');

    Route::get('/rumah_tahfidz/struktur-admin', [RumahtahfidzStrukturController::class, 'index'])->name('struktur-rumah_tahfidz-admin');
    Route::get('/rumah_tahfidz/struktur-admin/create', [RumahtahfidzStrukturController::class, 'create'])->name('create-struktur-rumah_tahfidz-admin');
    Route::post('/rumah_tahfidz/struktur-admin/store', [RumahtahfidzStrukturController::class, 'store'])->name('store-struktur-rumah_tahfidz-admin');
    Route::get('/rumah_tahfidz/struktur-admin/edit/{id}', [RumahtahfidzStrukturController::class, 'edit'])->name('edit-struktur-rumah_tahfidz-admin');
    Route::put('/rumah_tahfidz/struktur-admin/update/{id}', [RumahtahfidzStrukturController::class, 'update'])->name('update-struktur-rumah_tahfidz-admin');
    Route::delete('/rumah_tahfidz/struktur-admin/delete/{id}', [RumahtahfidzStrukturController::class, 'delete'])->name('delete-struktur-rumah_tahfidz-admin');

    // Raudhatul Athfal
    Route::get('/raudhatul_athfal/alumni-admin', [AlumniController::class, 'index'])->name('alumni-raudhatul_athfal-admin');
    Route::get('/raudhatul_athfal/alumni-admin/create', [AlumniController::class, 'create'])->name('create-alumni-raudhatul_athfal-admin');
    Route::post('/raudhatul_athfal/alumni-admin/store', [AlumniController::class, 'store'])->name('store-alumni-raudhatul_athfal-admin');
    Route::get('/raudhatul_athfal/alumni-admin/edit/{id}', [AlumniController::class, 'edit'])->name('edit-alumni-raudhatul_athfal-admin');
    Route::put('/raudhatul_athfal/alumni-admin/update/{id}', [AlumniController::class, 'update'])->name('update-alumni-raudhatul_athfal-admin');
    Route::delete('/raudhatul_athfal/alumni-admin/delete/{id}', [AlumniController::class, 'delete'])->name('delete-alumni-raudhatul_athfal-admin');

    Route::get('/raudhatul_athfal/daftar_guru-admin', [DaftarGuruController::class, 'index'])->name('daftar_guru-raudhatul_athfal-admin');
    Route::get('/raudhatul_athfal/daftar_guru-admin/create', [DaftarGuruController::class, 'create'])->name('create-daftar_guru-raudhatul_athfal-admin');
    Route::post('/raudhatul_athfal/daftar_guru-admin/store', [DaftarGuruController::class, 'store'])->name('store-daftar_guru-raudhatul_athfal-admin');
    Route::get('/raudhatul_athfal/daftar_guru-admin/edit/{id}', [DaftarGuruController::class, 'edit'])->name('edit-daftar_guru-raudhatul_athfal-admin');
    Route::put('/raudhatul_athfal/daftar_guru-admin/update/{id}', [DaftarGuruController::class, 'update'])->name('update-daftar_guru-raudhatul_athfal-admin');
    Route::delete('/raudhatul_athfal/daftar_guru-admin/delete/{id}', [DaftarGuruController::class, 'delete'])->name('delete-daftar_guru-raudhatul_athfal-admin');

    Route::get('/raudhatul_athfal/daftar_siswa-admin', [DaftarSiswaController::class, 'index'])->name('daftar_siswa-raudhatul_athfal-admin');
    Route::get('/raudhatul_athfal/daftar_siswa-admin/create', [DaftarSiswaController::class, 'create'])->name('create-daftar_siswa-raudhatul_athfal-admin');
    Route::post('/raudhatul_athfal/daftar_siswa-admin/store', [DaftarSiswaController::class, 'store'])->name('store-daftar_siswa-raudhatul_athfal-admin');
    Route::get('/raudhatul_athfal/daftar_siswa-admin/edit/{id}', [DaftarSiswaController::class, 'edit'])->name('edit-daftar_siswa-raudhatul_athfal-admin');
    Route::put('/raudhatul_athfal/daftar_siswa-admin/update/{id}', [DaftarSiswaController::class, 'update'])->name('update-daftar_siswa-raudhatul_athfal-admin');
    Route::delete('/raudhatul_athfal/daftar_siswa-admin/delete/{id}', [DaftarSiswaController::class, 'delete'])->name('delete-daftar_siswa-raudhatul_athfal-admin');

    Route::get('/raudhatul_athfal/struktur-admin', [RaudhatulathfalStrukturController::class, 'index'])->name('struktur-raudhatul_athfal-admin');
    Route::get('/raudhatul_athfal/struktur-admin/create', [RaudhatulathfalStrukturController::class, 'create'])->name('create-struktur-raudhatul_athfal-admin');
    Route::post('/raudhatul_athfal/struktur-admin/store', [RaudhatulathfalStrukturController::class, 'store'])->name('store-struktur-raudhatul_athfal-admin');
    Route::get('/raudhatul_athfal/struktur-admin/edit/{id}', [RaudhatulathfalStrukturController::class, 'edit'])->name('edit-struktur-raudhatul_athfal-admin');
    Route::put('/raudhatul_athfal/struktur-admin/update/{id}', [RaudhatulathfalStrukturController::class, 'update'])->name('update-struktur-raudhatul_athfal-admin');
    Route::delete('/raudhatul_athfal/struktur-admin/delete/{id}', [RaudhatulathfalStrukturController::class, 'delete'])->name('delete-struktur-raudhatul_athfal-admin');

    // TPA Darul Istiqamah
    Route::get('/tpa_darulistiqamah/daftar_santri-admin', [Tpa_darulistiqamahDaftarSantriController::class, 'index'])->name('daftar_santri-tpa_darulistiqamah-admin');
    Route::get('/tpa_darulistiqamah/daftar_santri-admin/create', [Tpa_darulistiqamahDaftarSantriController::class, 'create'])->name('create-daftar_santri-tpa_darulistiqamah-admin');
    Route::post('/tpa_darulistiqamah/daftar_santri-admin/store', [Tpa_darulistiqamahDaftarSantriController::class, 'store'])->name('store-daftar_santri-tpa_darulistiqamah-admin');
    Route::get('/tpa_darulistiqamah/daftar_santri-admin/edit/{id}', [Tpa_darulistiqamahDaftarSantriController::class, 'edit'])->name('edit-daftar_santri-tpa_darulistiqamah-admin');
    Route::put('/tpa_darulistiqamah/daftar_santri-admin/update/{id}', [Tpa_darulistiqamahDaftarSantriController::class, 'update'])->name('update-daftar_santri-tpa_darulistiqamah-admin');
    Route::delete('/tpa_darulistiqamah/daftar_santri-admin/delete/{id}', [Tpa_darulistiqamahDaftarSantriController::class, 'delete'])->name('delete-daftar_santri-tpa_darulistiqamah-admin');

    Route::get('/tpa_darulistiqamah/ustadz_ustadzah-admin', [UstadzUstadzahController::class, 'index'])->name('ustadz_ustadzah-tpa_darulistiqamah-admin');
    Route::get('/tpa_darulistiqamah/ustadz_ustadzah-admin/create', [UstadzUstadzahController::class, 'create'])->name('create-ustadz_ustadzah-tpa_darulistiqamah-admin');
    Route::post('/tpa_darulistiqamah/ustadz_ustadzah-admin/store', [UstadzUstadzahController::class, 'store'])->name('store-ustadz_ustadzah-tpa_darulistiqamah-admin');
    Route::get('/tpa_darulistiqamah/ustadz_ustadzah-admin/edit/{id}', [UstadzUstadzahController::class, 'edit'])->name('edit-ustadz_ustadzah-tpa_darulistiqamah-admin');
    Route::put('/tpa_darulistiqamah/ustadz_ustadzah-admin/update/{id}', [UstadzUstadzahController::class, 'update'])->name('update-ustadz_ustadzah-tpa_darulistiqamah-admin');
    Route::delete('/tpa_darulistiqamah/ustadz_ustadzah-admin/delete/{id}', [UstadzUstadzahController::class, 'delete'])->name('delete-ustadz_ustadzah-tpa_darulistiqamah-admin');

    Route::get('/tpa_darulistiqamah/wisudawan-admin', [WisudawanController::class, 'index'])->name('wisudawan-tpa_darulistiqamah-admin');
    Route::get('/tpa_darulistiqamah/wisudawan-admin/create', [WisudawanController::class, 'create'])->name('create-wisudawan-tpa_darulistiqamah-admin');
    Route::post('/tpa_darulistiqamah/wisudawan-admin/store', [WisudawanController::class, 'store'])->name('store-wisudawan-tpa_darulistiqamah-admin');
    Route::get('/tpa_darulistiqamah/wisudawan-admin/edit/{id}', [WisudawanController::class, 'edit'])->name('edit-wisudawan-tpa_darulistiqamah-admin');
    Route::put('/tpa_darulistiqamah/wisudawan-admin/update/{id}', [WisudawanController::class, 'update'])->name('update-wisudawan-tpa_darulistiqamah-admin');
    Route::delete('/tpa_darulistiqamah/wisudawan-admin/delete/{id}', [WisudawanController::class, 'delete'])->name('delete-wisudawan-tpa_darulistiqamah-admin');

    // Majelis Taklim
    Route::get('/majelis_taklim/kajian-admin', [MajelistaklimKajianController::class, 'index'])->name('kajian-majelis_taklim-admin');
    Route::get('/majelis_taklim/kajian-admin/create', [MajelistaklimKajianController::class, 'create'])->name('create-kajian-majelis_taklim-admin');
    Route::post('/majelis_taklim/kajian-admin/store', [MajelistaklimKajianController::class, 'store'])->name('store-kajian-majelis_taklim-admin');
    Route::get('/majelis_taklim/kajian-admin/edit/{id}', [MajelistaklimKajianController::class, 'edit'])->name('edit-kajian-majelis_taklim-admin');
    Route::put('/majelis_taklim/kajian-admin/update/{id}', [MajelistaklimKajianController::class, 'update'])->name('update-kajian-majelis_taklim-admin');
    Route::delete('/majelis_taklim/kajian-admin/delete/{id}', [MajelistaklimKajianController::class, 'delete'])->name('delete-kajian-majelis_taklim-admin');

    Route::get('/majelis_taklim/keanggotaan-admin', [KeanggotaanController::class, 'index'])->name('keanggotaan-majelis_taklim-admin');
    Route::get('/majelis_taklim/keanggotaan-admin/create', [KeanggotaanController::class, 'create'])->name('create-keanggotaan-majelis_taklim-admin');
    Route::post('/majelis_taklim/keanggotaan-admin/store', [KeanggotaanController::class, 'store'])->name('store-keanggotaan-majelis_taklim-admin');
    Route::get('/majelis_taklim/keanggotaan-admin/edit/{id}', [KeanggotaanController::class, 'edit'])->name('edit-keanggotaan-majelis_taklim-admin');
    Route::put('/majelis_taklim/keanggotaan-admin/update/{id}', [KeanggotaanController::class, 'update'])->name('update-keanggotaan-majelis_taklim-admin');
    Route::delete('/majelis_taklim/keanggotaan-admin/delete/{id}', [KeanggotaanController::class, 'delete'])->name('delete-keanggotaan-majelis_taklim-admin');

    // Ikramnurjihad
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
