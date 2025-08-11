<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\RoleMiddleWare;
use Illuminate\Support\Facades\Route;

Route::get("/login", [LoginController::class,"showLogin"])->name("login");
Route::post("/actionlogin", [LoginController::class,"actionLogin"])->name("actionLogin");
Route::get("/logout", [LoginController::class,"actionLogout"])->name("actionLogout");


// Route::middleware('auth')->group(function () {

Route::middleware(['auth'])->group(function () {
        Route::get('/', [DashboardController::class,'index']);

        Route::get('/user', [UserController::class,'index'])->middleware(RoleMiddleware::class    . ':admin');

        Route::get('/user/tambah', [UserController::class,'create'])->middleware(RoleMiddleware::class    . ':admin');
        Route::post('/user/simpan', [UserController::class,'store'])->middleware(RoleMiddleware::class    . ':admin');

        Route::get('/user/edit/{id}', [UserController::class,'show'])->middleware(RoleMiddleware::class    . ':admin');
        Route::post('user/update/{id}', [UserController::class,'update'])->middleware(RoleMiddleware::class    . ':admin');

        Route::get('/user/hapus/{id}', [UserController::class,'destroy'])->middleware(RoleMiddleware::class    . ':admin');



        Route::get('/barang', [BarangController::class,'index'])->middleware(RoleMiddleware::class    . ':admin');

        Route::get('/barang/tambah', [BarangController::class,'create'])->middleware(RoleMiddleware::class    . ':admin');
        Route::post('/barang/simpan', [BarangController::class,'store'])->middleware(RoleMiddleware::class    . ':admin');

        Route::get('/barang/edit/{id}', [BarangController::class,'edit'])->middleware(RoleMiddleware::class    . ':admin');
        Route::post('barang/update/{id}', [BarangController::class,'update'])->middleware(RoleMiddleware::class    . ':admin');

        Route::get('/barang/hapus/{id}', [BarangController::class,'destroy'])->middleware(RoleMiddleware::class    . ':admin');



        Route::get('/jenis', [JenisController::class,'index'])->middleware(RoleMiddleware::class    . ':admin');

        Route::get('/jenis/tambah', [JenisController::class,'create'])->middleware(RoleMiddleware::class    . ':admin');
        Route::post('/jenis/simpan', [JenisController::class,'store'])->middleware(RoleMiddleware::class    . ':admin');

        Route::get('/jenis/edit/{id}', [JenisController::class,'show'])->middleware(RoleMiddleware::class    . ':admin');
        Route::post('/jenis/update/{id}', [JenisController::class,'update'])->middleware(RoleMiddleware::class    . ':admin');


        Route::get('/supplier', [SupplierController::class, 'index'])->middleware(RoleMiddleware::class    . ':admin');

        Route::get('/supplier/tambah', [SupplierController::class,'create'])->middleware(RoleMiddleware::class    . ':admin');
        Route::post('/supplier/simpan', [SupplierController::class,'store'])->middleware(RoleMiddleware::class    . ':admin');

        Route::get('/supplier/edit/{id}', [SupplierController::class,'show'])->middleware(RoleMiddleware::class    . ':admin');
        Route::post('/supplier/update/{id}', [SupplierController::class,'update'])->middleware(RoleMiddleware::class    . ':admin');


        Route::get('/barang_masuk', [BarangMasukController::class,'index']);

        Route::get('/barang_masuk/tambah', [BarangMasukController::class, 'create']);
        Route::post('/barang_masuk/simpan', [BarangMasukController::class, 'store']);

        Route::get('/barang_masuk/edit/{id}', [BarangMasukController::class,'edit']);

        Route::get('/barang_masuk/laporan', [BarangMasukController::class, 'laporan' ]);
        Route::get('/barang_masuk/struk/{id}', [BarangMasukController:: class,'struk']);



        Route::get('/barang_keluar', [BarangKeluarController::class, 'index']);

        Route::get('/barang_keluar/tambah', [BarangKeluarController:: class,'create']);
        Route::post('/barang_keluar/simpan', [BarangKeluarController:: class,'store']);
        Route::get('/barang_keluar/edit/{id}', [BarangKeluarController::class,'edit']);

        Route::get('/barang_keluar/laporan', [BarangKeluarController::  class,'laporan']);
        Route::get('/barang_keluar/struk/{id}', [BarangKeluarController:: class,'struk']);

});
