<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;

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


Route::get('/', function () {
    return view('landing');
});

Route::get('/', [PengaduanController::class, 'index']);
Route::post('/', [PengaduanController::class, 'store']);
Route::post('/dashboard', [PengaduanController::class, 'view'])->name('dashboard');




Route::get('dashboard/surat/domisili', function () {
    return view('dashboard.surat.KeteranganDomisili');
});


Route::get('dashboard', function () {
    return view('dashboard.home');
});



Route::get('formulir', function () {
    return view('landing.formulir');
});
