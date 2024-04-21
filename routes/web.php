<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\KategoriSuratController;
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

Route::post('/submit-form', [PengaduanController::class, 'submitForm'])->name('submit.form');


Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', [PengaduanController::class, 'index'])->name('dashboard.index');
    

    Route::prefix('dashboard')->group(function () {
        
        Route::resource('kategori-surat', KategoriSuratController::class);
        
        
        Route::get('surat/domisili', function () {
            return view('dashboard.surat.keteranganDomisili');
        })->name('dashboard.surat.domisili');
        
        
        Route::get('/', function () {
            return view('dashboard.home');
        })->name('dashboard.home');
    });
});


Route::get('formulir', function () {
    return view('landing.formulir');
});




