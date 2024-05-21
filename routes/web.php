<?php

use App\Http\Controllers\BagianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RontgenController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

Route::post('post', function () { })->name('post');

Route::get('bagian', function () {
    return view('tanaman.bagian', ['title' => 'Bagian']);
})->name('bagian');

Route::controller(BagianController::class)->prefix('/admin/bagian')->group(function () {
    Route::get('/', 'index')->name('admin.bagian');
    Route::post('/', 'storeUpdate')->name('admin.bagian.storeupdate');
    Route::get('/detail', 'show')->name('admin.bagian.detail');
    Route::get('/delete', 'destroy')->name('admin.bagian.delete');
});

Route::get('gambar', function () {
    return view('tanaman.gambar', ['title' => 'Gambar']);
})->name('gambar');
Route::get('kebun', function () {
    return view('tanaman.kebun', ['title' => 'Kebun']);
})->name('kebun');
Route::get('penanaman', function () {
    return view('tanaman.penanaman', ['title' => 'Penanaman']);
})->name('penanaman');
Route::get('perbanyak', function () {
    return view('tanaman.perbanyak', ['title' => 'Perbanyak']);
})->name('perbanyak');
Route::get('petak', function () {
    return view('tanaman.petak', ['title' => 'Petak']);
})->name('petak');
Route::get('tanaman', function () {
    return view('tanaman.tanaman', ['title' => 'Tanaman']);
})->name('tanaman');
Route::get('log-in', function () {
    return view('tanaman.login', ['title' => 'Login']);
})->name('log-in');
