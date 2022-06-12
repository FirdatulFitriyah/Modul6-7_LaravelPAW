<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [ SiswaController::class, 'index'])->name('siswa');

Route::get('/tambahsiswa', [ SiswaController::class, 'tambahsiswa'])->name('tambahsiswa');
Route::post('/insertdata', [ SiswaController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [ SiswaController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [ SiswaController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [ SiswaController::class, 'delete'])->name('delete');