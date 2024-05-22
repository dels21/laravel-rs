<?php

use Illuminate\Support\Facades\Route;

Route::get('/karyawan', function () {
    return view('karyawan.master-karyawan');
});

Route::get('/dokter', function () {
    return view('dokter.master-dokter');
});

Route::get('/pasien', function () {
    return view('pasien.master-pasien');
});