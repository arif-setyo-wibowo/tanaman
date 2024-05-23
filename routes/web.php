<?php

use App\Http\Controllers\BagianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GambarControllerController;
use App\Http\Controllers\KebunController;
use App\Http\Controllers\PetakController;
use App\Http\Controllers\PenanamanController;
use App\Http\Controllers\PerbanyakController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'front')->name('front');
    Route::get('/detail', 'detail')->name('detail');
});

Route::controller(DashboardController::class)->prefix('/admin')->group(function () {
    Route::get('/', 'index')->name('dashboard');
});
Route::controller(LoginController::class)->prefix('/login')->group(function () {
    Route::get('/', 'index')->name('admin.login');
});


Route::controller(BagianController::class)->prefix('/admin/bagian')->group(function () {
    Route::get('/', 'index')->name('admin.bagian');
    Route::post('/', 'storeUpdate')->name('admin.bagian.storeupdate');
    Route::get('/detail', 'show')->name('admin.bagian.detail');
    Route::get('/delete', 'destroy')->name('admin.bagian.delete');
});

Route::controller(GambarController::class)->prefix('/admin/gambar')->group(function () {
    Route::get('/', 'index')->name('admin.gambar');
    Route::post('/', 'storeUpdate')->name('admin.gambar.storeupdate');
    Route::get('/detail', 'show')->name('admin.gambar.detail');
    Route::get('/delete', 'destroy')->name('admin.gambar.delete');
});

Route::controller(KebunController::class)->prefix('/admin/kebun')->group(function () {
    Route::get('/', 'index')->name('admin.kebun');
    Route::post('/', 'storeUpdate')->name('admin.kebun.storeupdate');
    Route::get('/detail', 'show')->name('admin.kebun.detail');
    Route::get('/delete', 'destroy')->name('admin.kebun.delete');
});

Route::controller(PenanamanController::class)->prefix('/admin/penanaman')->group(function () {
    Route::get('/', 'index')->name('admin.penanaman');
    Route::post('/', 'storeUpdate')->name('admin.penanaman.storeupdate');
    Route::get('/detail', 'show')->name('admin.penanaman.detail');
    Route::get('/delete', 'destroy')->name('admin.penanaman.delete');
});

Route::controller(PerbanyakController::class)->prefix('/admin/perbanyak')->group(function () {
    Route::get('/', 'index')->name('admin.perbanyak');
    Route::post('/', 'storeUpdate')->name('admin.perbanyak.storeupdate');
    Route::get('/detail', 'show')->name('admin.perbanyak.detail');
    Route::get('/delete', 'destroy')->name('admin.perbanyak.delete');
});
Route::controller(PetakController::class)->prefix('/admin/petak')->group(function () {
    Route::get('/', 'index')->name('admin.petak');
    Route::post('/', 'storeUpdate')->name('admin.petak.storeupdate');
    Route::get('/detail', 'show')->name('admin.petak.detail');
    Route::get('/delete', 'destroy')->name('admin.petak.delete');
});

Route::controller(TanamanController::class)->prefix('/admin/tanaman')->group(function () {
    Route::get('/', 'index')->name('admin.tanaman');
    Route::post('/', 'storeUpdate')->name('admin.tanaman.storeupdate');
    Route::get('/detail', 'show')->name('admin.tanaman.detail');
    Route::get('/delete', 'destroy')->name('admin.tanaman.delete');
});

Route::controller(LoginController::class)->prefix('/admin/logout')->group(function () {
    Route::get('/', 'logout')->name('admin.logout');
});

Route::controller(PetugasController::class)->prefix('/admin/petugas')->group(function () {
    Route::get('/', 'index')->name('admin.petugas');
    Route::post('/', 'storeUpdate')->name('petugas.store.update');
    Route::get('/delete', 'destroy')->name('delete.petugas');
});
