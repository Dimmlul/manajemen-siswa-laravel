<?php

use App\Http\Controllers\SiswaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::put('/siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
