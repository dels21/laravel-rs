<?php

use Illuminate\Support\Facades\Route;

Route::get('/karyawan', function () {
    // return view('karyawan.master-karyawan');
    return view('karyawan.list-karyawan');
});

Route::get('/dokter', function () {
    return view('dokter.master-dokter');
});

Route::get('/pasien', function () {
    // return view('pasien.master-pasien');
    // return view('pasien.home-pasien');
    return view('pasien.list-pemeriksaan-pasien');
});