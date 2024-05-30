<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route; 

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'pasien'])->group(function () {
    Route::get('/tesreroutepasien',function(){
        return 'Middleware pasien berhasil';
    });
});

Route::middleware(['auth', 'dokter'])->group(function () {
    Route::get('/tesreroutedokter',function(){
        return 'Middleware dokter berhasil';
    });
});

Route::middleware(['auth', 'karyawan'])->group(function () {
    Route::get('/tesreroutekaryawan',function(){
        return 'Middleware karyawan berhasil';
    });
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/tesrerouteadmin',function(){
        return 'Middleware admin berhasil';
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/logout',[AuthenticatedSessionController::class,'destroy']);

require __DIR__.'/auth.php';



Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('/admin')->group(function(){
    Route::get('/dashboard', function() {
        return view('dashboard', ['user' => 'admin', 'page' => 'dashboard']);
    });

    Route::get('/list-karyawan', function() {
        return view('dashboard', ['user' => 'admin', 'page' => 'list-karyawan']);
    });  
});

Route::prefix('/karyawan')->group(function(){
    Route::get('/dashboard', function() {
        return view('dashboard', ['user' => 'karyawan', 'page' => 'dashboard']);
    }); 

    Route::get('/list-dokter', function() {
        return view('dashboard', ['user' => 'karyawan', 'page' => 'list-dokter']);
    }); 

    Route::get('/list-pasien', function() {
        return view('dashboard', ['user' => 'karyawan', 'page' => 'list-pasien']);
    });  

    Route::get('/list-modalitas', function() {
        return view('dashboard', ['user' => 'karyawan', 'page' => 'list-modalitas']);
    });  

    Route::get('/list-pemeriksaan', function() {
        return view('dashboard', ['user' => 'karyawan', 'page' => 'list-pemeriksaan']);
    });  
    Route::get('/list-DICOM', function() {
        return view('dashboard', ['user' => 'karyawan', 'page' => 'list-DICOM']);
    });  
    Route::get('/list-jenis-pemeriksaan', function() {
        return view('dashboard', ['user' => 'karyawan', 'page' => 'list-jenis-pemeriksaan']);
    });  
});

Route::prefix('/dokter')->group(function(){
    Route::get('/dashboard', function() {
        return view('dashboard', ['user' => 'dokter', 'page' => 'dashboard']);
    });
    
    Route::get('/list-pasien', function() {
        return view('dashboard', ['user' => 'dokter', 'page' => 'list-pasien']);
    });  
});

Route::prefix('/pasien')->group(function(){
    Route::get('/dashboard', function() {
        return view('dashboard', ['user' => 'pasien', 'page' => 'halaman-utama']);
    });
    
    Route::get('/pemeriksaan', function() {
        return view('dashboard', ['user' => 'pasien', 'page' => 'pemeriksaan-saya']);
    });

    Route::get('/daftar-pemeriksaan', function() {
        return view('dashboard', ['user' => 'pasien', 'page' => 'daftar-pemeriksaan']);
    });  
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
?>

