<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\siswaCon;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

// Admin Dashboard
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// Admin Siswa
Route::get('/admin/siswa', [siswaCon::class, 'index'])->name('siswa.index');      // tampil daftar siswa
Route::get('/admin/siswa/create', [siswaCon::class, 'create'])->name('siswa.create'); // form tambah
Route::post('/admin/siswa', [siswaCon::class, 'store'])->name('siswa.store');     // simpan data

// edit dan delete siswa
Route::get('/admin/siswa_edit/{id}', [siswaCon::class, 'edit'])->name('siswa.edit');
Route::put('/admin/siswa/{id}', [siswaCon::class, 'update'])->name('siswa.update');
Route::delete('/admin/siswa/{id}', [siswaCon::class, 'destroy'])->name('delete');
