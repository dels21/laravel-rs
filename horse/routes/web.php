<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DicomController;
use App\Http\Controllers\ModalitasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'pasien'])->group(function () {
    Route::prefix('/pasien')->group(function () {
        Route::get('/dashboard', function () {
            return view('pasien.dashboard-pasien');
        });
        
        Route::get('/pemeriksaan', function () {
            return view('pasien.list-pemeriksaan-pasien');
        });
        
        Route::get('/daftar-pemeriksaan', function () {
            return view('pasien.form-pendaftaran-pemeriksaan');
        });
    });
});

Route::middleware(['auth', 'dokter'])->group(function () {
    Route::prefix('/dokter')->group(function () {
        Route::get('/dashboard', function () {
            return view('dokter.dashboard-dokter');
        });

        Route::get('/list-pasien', function () {
            return view('dokter.list-pemeriksaan-dokter');
        });
    });
});

Route::middleware(['auth', 'karyawan'])->group(function () {
    Route::prefix('/karyawan')->group(function () {
        Route::get('/dashboard', function () {
            return view('karyawan.dashboard-karyawan');
        });

        Route::get('/list-dokter', function () {
            return view('karyawan.list-dokter');
        });

        Route::get('/list-pasien', function () {
            return view('karyawan.list-pasien');
        });

        Route::get('/list-modalitas', function () {
            return view('karyawan.list-modalitas');
        });

        Route::get('/list-pemeriksaan', function () {
            return view('karyawan.list-pemeriksaan-karyawan');
        });
        Route::get('/list-DICOM', function () {
            return view('karyawan.list-DICOM');
        });
        Route::get('/list-jenis-pemeriksaan', function () {
            return view('karyawan.list-jenis-pemeriksaan');
        });
        Route::get('/verifikasi', function () {
            return view('karyawan.verifikasi');
        });
    });
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard-admin');
        });

        Route::get('/list-karyawan', 
        [KaryawanController::class, 'showListKaryawan']    
    );
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


Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

require __DIR__ . '/auth.php';



Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
?>

