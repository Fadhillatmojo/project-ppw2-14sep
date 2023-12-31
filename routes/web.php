<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DataCountController;
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
// Route::get('/anjay', function () {
//     return view('anjay');
// });

// Route::get('/count', [DataCountController::class, 'index']);

Route::get('/buku', [BukuController::class, 'index']);

// create buku

Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])-> name('buku.store');

Route::post('/buku/delete/{id}', [BukuController::class, 'destroy'])-> name('buku.destroy');

// tugas update data rute 
Route::get('/buku/update/{id}', [BukuController::class, 'update'])-> name('buku.update');
Route::post('/buku/update/submit/{id}', [BukuController::class, 'updatedata'])-> name('buku.updatedata');

// rute show data
Route::get('/buku/show/{id}', [BukuController::class, 'show'])-> name('buku.show');





