<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('kategori', KategoriController::class);
