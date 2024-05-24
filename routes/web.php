<?php

use App\Http\Controllers\BagianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\KebunController;
use App\Http\Controllers\PetakController;
use App\Http\Controllers\PenanamanController;
use App\Http\Controllers\PerbanyakController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'front')->name('front');
    Route::get('/detail/{id}', 'detail')->name('detail');
});


Route::controller(LoginController::class)->prefix('login')->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/', 'postlogin')->name('postlogin');
});

Route::middleware('petugas')->prefix('/admin')->group(function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });

    
    Route::resource('perbanyak', PerbanyakController::class);

    Route::resource('petak', PetakController::class);

    Route::resource('bagian', BagianController::class);
    
    Route::resource('kebun', KebunController::class);

    //TANAMAN
    Route::resource('tanaman', TanamanController::class);
    
    Route::resource('gambar', GambarController::class);

    Route::resource('penanaman', PenanamanController::class);


    Route::controller(SliderController::class)->prefix('slider')->group(function () {
        Route::get('/', 'index')->name('admin.slider');
        Route::post('/', 'storeUpdate')->name('admin.slider.post');
    });

    
    Route::controller(LoginController::class)->prefix('/logout')->group(function () {
        Route::get('/', 'logout')->name('admin.logout');
    });

    Route::controller(PetugasController::class)->prefix('/petugas')->group(function () {
        Route::get('/', 'index')->name('admin.petugas');
        Route::post('/', 'storeUpdate')->name('petugas.store.update');
        Route::get('/delete', 'destroy')->name('delete.petugas');
    });

});
