<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\KategoriSuratController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\PermintaanSuratController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BeritaController;

use App\Http\Controllers\NomorSuratController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('admin/surat/domisili', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.surat.domisili');




Auth::routes();


Route::get('/', function () {
    return view('landing');
});

Route::get('/berita', function () {
    return view('landing.berita');
});


Route::get('/pegawai', [PegawaiController::class, 'show'])->name('pegawai');




Route::post('/submit-form', [PengaduanController::class, 'store'])->name('store');


Route::get('/formulir', [PengajuanSuratController::class, 'index'])->name('formulir');
Route::get('/formulir2', [PengajuanSuratController::class, 'index'])->name('formulir');

Route::post('/formulir/store', [PengajuanSuratController::class, 'store'])->name('formulir.store');
// Route::get('/formulir/store', [PengajuanSuratController::class, 'store'])->name('formulir.store');


Route::get('/formulir-sukses', [PengajuanSuratController::class, 'success'])->name('success.store');




Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'role:1,2,3,4']], function () {


    // Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('/permintaan-surat', PermintaanSuratController::class, ['names' => 'dashboard.permintaan']);
    Route::get('/permintaan-surats/records', [PermintaanSuratController::class, 'data_table'])->name('dashboard.permintaan.records');

    Route::resource('kategori-surat', KategoriSuratController::class);
    Route::resource('/users', UserController::class, ['names' => 'dashboard.users']);
    Route::resource('/pegawai', PegawaiController::class, ['names' => 'dashboard.pegawai']);
    Route::resource('/nomor_surat', NomorSuratController::class, ['names' => 'dashboard.nomor_surat']);

    Route::resource('/buat-berita', BeritaController::class, ['names' => 'dashboard.berita']);




    Route::resource('surat', SuratController::class, ['names' => 'dashboard.surat']);
    Route::get('/surats/records', [SuratController::class, 'data_table'])->name('dashboard.surat.records');
    Route::get('/surats/cetak-surat/{id}', [SuratController::class, 'cetak_pdf'])->name('dashboard.surat.cetak_pdf');



    

    // Route::get('surat/domisili', function () {
    //  return view('dashboard.surat.keteranganDomisili');
    // })->name('dashboard.surat.domisili');
    // Route::prefix('surat')->group(function () {
    
    // });
    

    // });


});


// Route::get('formulir', function () {
//     return view('landing.formulir');
// });

