<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/testing', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// ADMIN
// ADMIN
// ADMIN
Route::group(['middleware' => ['admin']], function () {
    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [AdminController::class, 'admindashboard'])->name('admin.dashboard');

        Route::get('/datamurid', [AdminController::class, 'datamurid'])->name('admin.datamurid');
        Route::get('/detailmurid/{id}', [AdminController::class, 'detailmurid']);
        // tambah murid
        Route::get('/tambahmurid', [AdminController::class, 'tambahmurid']);
        Route::match(['get', 'post'], '/addmurid', [AdminController::class, 'addmurid']);

        // tambah pendaftaran
        Route::post('/storemurid', [AdminController::class, 'store_murid']);
        Route::get('/editmurid/{id}', [AdminController::class, 'editmurid'])->name('edit.murid');
        Route::put('/editmurid2/{id}', [AdminController::class, 'edit_murid'])->name('edit.murid2');

        Route::get('/datapelatih', [AdminController::class, 'datapelatih'])->name('admin.datapelatih');
        Route::get('/detailpelatih/{id}', [AdminController::class, 'detailpelatih']);
        Route::get('/tambahpelatih', [AdminController::class, 'tambahpelatih'])->name('admin.tambahpelatih');
        Route::post('/storepelatih', [AdminController::class, 'store_pelatih'])->name('admin.storepelatih');
        Route::get('/editpelatih/{id}', [AdminController::class, 'editpelatih'])->name('edit.pelatih');
        Route::put('/editpelatih2/{id}', [AdminController::class, 'edit_pelatih'])->name('edit.pelatih2');

        Route::get('/datadojo', [AdminController::class, 'datadojo'])->name('admin.datadojo');
        Route::get('/detaildojo/{id}', [AdminController::class, 'detaildojo']);
        Route::get('/tambahdojo', [AdminController::class, 'tambahdojo']);
        Route::post('/storedojo', [AdminController::class, 'store_dojo']);
        Route::get('/editdojo/{id}', [AdminController::class, 'editdojo'])->name('edit.dojo');
        Route::put('/editdojo2/{id}', [AdminController::class, 'edit_dojo'])->name('edit.dojo2');

        Route::get('/datajadwal', [AdminController::class, 'datajadwal'])->name('admin.datajadwal');
        Route::get('/filterjadwal', [AdminController::class, 'filterJadwal'])->name('filter.jadwal');
        Route::get('/detailjadwal/{id}', [AdminController::class, 'detailjadwal']);
        Route::get('/tambahjadwal', [AdminController::class, 'tambahjadwal']);
        Route::post('/storejadwal', [AdminController::class, 'store_jadwal']);
        Route::get('/editjadwal/{id}', [AdminController::class, 'editjadwal'])->name('edit.jadwal');
        Route::put('/editjadwal2/{id}', [AdminController::class, 'edit_jadwal'])->name('edit.jadwal2');

        Route::get('/materi', [AdminController::class, 'materi'])->name('admin.materi');
        Route::get('/datamateri/{sabuk}', [AdminController::class, 'datamateri'])->name('admin.datamateri');
        Route::get('/detailmateri/{id}', [AdminController::class, 'detailmateri']);
        Route::get('/tambahmateri', [AdminController::class, 'tambahmateri'])->name('materi.tambah');
        Route::post('/storemateri', [AdminController::class, 'store_materi'])->name('materi.input');
        Route::get('/editmateri/{id}', [AdminController::class, 'editmateri'])->name('edit.materi');
        Route::put('/editmateri2/{id}', [AdminController::class, 'edit_materi'])->name('edit.materi2');
        Route::delete('/deletemateri/{id}', [AdminController::class, 'deleteMateri'])->name('delete.materi');

        Route::get('/pendaftaran', [AdminController::class, 'pendaftaran'])->name('admin.datapendaftaran');
        Route::get('/detailpendaftaran', [AdminController::class, 'detailpendaftaran']);

        Route::get('/informasi', [AdminController::class, 'informasi'])->name('admin.informasi');
        Route::get('/detailinformasi/{id}', [AdminController::class, 'detailinformasi']);
        Route::get('/tambahinformasi', [AdminController::class, 'tambahinformasi']);
        Route::post('/storeinformasi', [AdminController::class, 'store_informasi'])->name('informasi.input');
        Route::get('/editinformasi/{id}', [AdminController::class, 'editinformasi'])->name('edit.informasi');
        Route::put('/editinformasi2/{id}', [AdminController::class, 'edit_informasi'])->name('edit.informasi2');
    });
});


//PELATIH
//PELATIH
//PELATIH
Route::group(['middleware' => ['pelatih']], function () {
    Route::prefix('pelatih')->group(function () {

        Route::get('/dashboard', [PelatihController::class, 'dashboard'])->name('pelatih.dashboard');

        Route::get('/absensi', [PelatihController::class, 'showAbsensi'])->name('showAbsensi');
        Route::get('/tambah_absensi', [PelatihController::class, 'tambahAbsensi'])->name('tambahAbsensi');
        Route::post('/store_absensi', [PelatihController::class, 'storeAbsensi'])->name('storeAbsensi');
        Route::get('/delete/{id}', [PelatihController::class, 'delete_absensi'])->name('delete.absensi');
        Route::get('/absensi/export-excel', [PelatihController::class, 'exportExcel'])->name('exportExcel');
        Route::get('/absensi/export-pdf', [PelatihController::class, 'exportPdf'])->name('exportPdf');


        Route::get('/sertifikat', [PelatihController::class, 'sertifikat'])->name('sertifikat');
        Route::get('/detailsertifikat/{id}', [PelatihController::class, 'detailSertifikat'])->name('detailsertifikat');

        Route::get('/evaluasi', [PelatihController::class, 'evaluasi'])->name('evaluasi');
        Route::post('/evaluasi2', [PelatihController::class, 'store_evaluasi'])->name('evaluasi2');

        Route::get('/jadwal', [PelatihController::class, 'jadwal'])->name('jadwal');
        Route::get('/filterjadwalpelatih', [PelatihController::class, 'filterJadwal'])->name('filter.jadwal.pelatih');

        Route::get('/datamurid', [PelatihController::class, 'dataMurid'])->name('datamurid');
        Route::get('/editmurid/{id}', [PelatihController::class, 'editMurid'])->name('editmurid');
        Route::post('/updatemurid/{id}', [PelatihController::class, 'updateMurid'])->name('updatemurid');
        Route::get('/profil', [PelatihController::class, 'profilPelatih'])->name('profilPelatih');
        Route::put('/updateprofil/{id}', [PelatihController::class, 'updateProfil'])->name('updateProfil');
        Route::get('/materi', [PelatihController::class, 'materi'])->name('materiPelatih');
    });
});



//MURID
//MURID
//MURID
Route::group(['middleware' => ['murid']], function () {
    Route::prefix('murid')->group(function () {

        Route::get('/dashboard', [MuridController::class, 'dashboard_m'])->name('murid.dashboard');
        Route::get('/{users_id}', [MuridController::class, 'dashboard_m_bdk_id']);

        Route::get('/{users_id}/forum_diskusi', [MuridController::class, 'forum_m'])->name('forum');
        Route::post('/{users_id}/forum_diskusi', [MuridController::class, 'store_forum_m'])->name('forum2');

        Route::get('/{users_id}/profile', [MuridController::class, 'profile_m'])->name('profile');
        Route::get('/{users_id}/profile-edit', [MuridController::class, 'editprofile_m'])->name('editprofile');
        Route::put('/{users_id}', [MuridController::class, 'update']);

        Route::get('/{users_id}/jadwal', [MuridController::class, 'jadwal'])->name('murid.jadwal');
        Route::get('/{users_id}/jadwal/{monthName}', [MuridController::class, 'jadwalByMonth']);

        Route::get('/{users_id}/materi', [MuridController::class, 'materi'])->name('murid.materi');
        Route::get('/{users_id}/materi/sabuk-{sabuk}', [MuridController::class, 'materiBySabuk']);

        Route::get('/{users_id}/isi_materi/{materi}/{judul_sub_materi}', [MuridController::class, 'isimateri_m']);
    });
});


//LANDING PAGE
//LANDING PAGE
//LANDING PAGE
Route::get('/home', [LandingPageController::class, 'home'])->name('home');
Route::get('/pendaftaran', [LandingPageController::class, 'pendaftaran'])->name('pendaftaran');
Route::post('/pendaftaran', [LandingPageController::class, 'store']);
Route::get('/produk', [LandingPageController::class, 'produk'])->name('produk');
