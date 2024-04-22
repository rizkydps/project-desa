<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\KategoriSuratController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\PermintaanSuratController;
use App\Http\Controllers\SuratController;

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





Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


Route::get('/', function () {
    return view('landing');
});

Route::post('/submit-form', [PengaduanController::class, 'store'])->name('store');


Route::get('/formulir', [PengajuanSuratController::class, 'index'])->name('formulir');
Route::post('/formulir/store', [PengajuanSuratController::class, 'store'])->name('formulir.store');
// Route::get('/formulir/store', [PengajuanSuratController::class, 'store'])->name('formulir.store');


Route::get('/formulir-sukses', [PengajuanSuratController::class, 'success'])->name('success.store');




//Route::middleware('auth')->group(function () {

    Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('/permintaan-surat', PermintaanSuratController::class, ['names' => 'dashboard.permintaan']);
    Route::resource('kategori-surat', KategoriSuratController::class);

    Route::resource('surat', SuratController::class, ['names' => 'dashboard.surat']);
    Route::get('/surats/records', [SuratController::class, 'data_table'])->name('dashboard.surat.records');
    

    Route::get('surat/domisili', function () {
     return view('dashboard.surat.keteranganDomisili');
    })->name('dashboard.surat.domisili');
    Route::prefix('surat')->group(function () {
    
    });
    

    });


//});


// Route::get('formulir', function () {
//     return view('landing.formulir');
// });

