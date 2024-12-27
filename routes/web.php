<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController; 

// Route dengan Middleware
Route::middleware(['auth:admin'])->group(function () {
    // Tambahkan rute dashboard dengan middleware auth:admin
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});


// Login Admin
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

// Route Buku
Route::get('bukus', [BukuController::class, 'index'])->name('bukus.index'); // Route untuk menampilkan daftar buku
Route::get('bukus/create', [BukuController::class, 'create'])->name('bukus.create'); // Route untuk menampilkan form tambah buku
Route::post('bukus', [BukuController::class, 'store'])->name('bukus.store'); // Route untuk menyimpan data buku
Route::get('bukus/{id}', [BukuController::class, 'detail'])->name('bukus.detail'); // Route untuk melihat detail buku
Route::get('bukus/{id}/edit', [BukuController::class, 'edit'])->name('bukus.edit'); // Route untuk menampilkan form edit buku
Route::put('bukus/{id}', [BukuController::class, 'update'])->name('bukus.update'); // Route untuk memperbarui data buku
Route::delete('bukus/{id}', [BukuController::class, 'delete'])->name('bukus.delete'); // Route untuk menghapus buku

// Route Member
Route::get('/members', [MemberController::class, 'index'])->name('members.index'); // Halaman daftar member
Route::get('/members/create', [MemberController::class, 'create'])->name('members.create'); // Halaman tambah member
Route::post('/members', [MemberController::class, 'store'])->name('members.store'); // Proses tambah member
Route::get('/members/{id}/detail', [MemberController::class, 'detail'])->name('members.detail'); // Halaman detail member
Route::get('/members/{id}/edit', [MemberController::class, 'edit'])->name('members.edit'); // Halaman edit member
Route::put('/members/{id}', [MemberController::class, 'update'])->name('members.update'); // Proses update member
Route::delete('/members/{id}', [MemberController::class, 'delete'])->name('members.delete'); // Proses hapus member

// Route Admin Logout
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


