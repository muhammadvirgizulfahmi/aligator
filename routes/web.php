<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PembinaController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\ProfilDokterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\Admin\DashboardPenggunaController;
use App\Http\Controllers\ProfilAkunController;



Route::get('/profil-dokter', [ProfilDokterController::class, 'index'])->name('profilDokter');
Route::get('/konsul-pengguna', [KonsultasiController::class, 'index'])->name('konsulPengguna');
Route::get('/konsul-pengguna/konsul-form', [KonsultasiController::class, 'create'])->name('konsulCreate');
Route::get('/data-anak', [AnakController::class, 'index'])->name('data_anak');
Route::get('/data-anak-create', [AnakController::class, 'create'])->name('data_anak_create');
Route::get('/data-anak-edit', [AnakController::class, 'edit'])->name('data_anak_edit');
Route::get('/parameter-stunting', [ParameterController::class, 'index'])->name('parameter');
Route::get('/profil', [DokterController::class, 'profilDokter'])->name('profil_dokter_anak');
Route::get('/konsul-dokter', [KonsultasiController::class, 'konsulDokter'])->name('konsulDokter');

// middleware('administrator')->

Route::get('/', [LandingPageController::class, 'index'])->name('index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    
    Route::middleware('pengguna')->prefix('')->group(function () {
    // Profil Pengguna
    Route::get('/profil-pengguna/{id}', [ProfilAkunController::class, 'profilPengguna'])->name('profil_pengguna');
    });

    Route::middleware(['dokter'])->get('/test-dokter', function () {
        return 'Dokter Middleware Works!';
    });
    

    Route::middleware('dokter')->prefix('')->group(function () {
    // Profil Dokter
    Route::get('/profil-dokter/{id}', [ProfilAkunController::class, 'profilDokter'])->name('profil_dokter');
    });

    // Dashboard Route for Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware('admin') // Middleware ensures only admins can access this route
        ->name('/dashboard');
    
    // jika admin ke dashboard
    Route::middleware('admin')->prefix('/dashboard')->group(function () {
        Route::get('/', [AdminController::class,'index']);

        // pengguna
        Route::middleware('admin')->prefix('/pengguna')->group(function () {
            Route::get('/', [DashboardPenggunaController::class, 'index'])->name('pengguna.dashboard');
            Route::get('/show/{id}', [DashboardPenggunaController::class, 'show'])->name('pengguna.show');
            Route::get('/create', [DashboardPenggunaController::class, 'create'])->name('pengguna.create');
            Route::post('/store', [DashboardPenggunaController::class, 'store'])->name('pengguna.store');
            Route::get('/edit/{id}', [DashboardPenggunaController::class, 'edit'])->name('pengguna.edit');
            Route::put('/update/{id}', [DashboardPenggunaController::class, 'update'])->name('pengguna.update');
            Route::delete('/pengguna/{id}', [DashboardPenggunaController::class, 'destroy'])->name('pengguna.destroy');  // Nama route diubah
//             Route::get('/create', [KabkotaController::class, 'create']);
//             Route::get('/show/{id}', [KabkotaController::class, 'show']);
//             Route::post('/store', [KabkotaController::class, 'store']);
//             Route::get('/edit/{id}', [KabkotaController::class, 'edit']);
//             Route::put('/update/{id}', [KabkotaController::class, 'update']);
//             Route::delete('/destroy/{id}', [KabkotaController::class, 'destroy']);
        });

    });

});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::prefix('/dashboard')->group(function () {
    //     Route::get('/', [AdminController::class, 'index']);

//         // Kabupaten Kota
//         Route::middleware('admin')->prefix('/kabkota')->group(function () {
//             Route::get('/', [KabkotaController::class, 'index']);
//             Route::get('/create', [KabkotaController::class, 'create']);
//             Route::get('/show/{id}', [KabkotaController::class, 'show']);
//             Route::post('/store', [KabkotaController::class, 'store']);
//             Route::get('/edit/{id}', [KabkotaController::class, 'edit']);
//             Route::put('/update/{id}', [KabkotaController::class, 'update']);
//             Route::delete('/destroy/{id}', [KabkotaController::class, 'destroy']);
//         });
        
//         // Provinsi
//         Route::middleware('admin')->prefix('/provinsi')->group(function () {
//             Route::get('/', [ProvinsiController::class, 'index']);
//             Route::get('/create', [ProvinsiController::class, 'create']);
//             Route::get('/show/{id}', [ProvinsiController::class, 'show']);
//             Route::post('/store', [ProvinsiController::class, 'store']);
//             Route::get('/edit/{id}', [ProvinsiController::class, 'edit']);
//             Route::put('/update/{id}', [ProvinsiController::class, 'update']);
//             Route::delete('/destroy/{id}', [ProvinsiController::class, 'destroy']);
//         });

//         // Kategori
//         Route::middleware('admin')->prefix('/kategori')->group(function () {
//             Route::get('/', [KategoriController::class, 'index']);
//             Route::get('/create', [KategoriController::class, 'create']);
//             Route::get('/show/{id}', [KategoriController::class, 'show']);
//             Route::post('/store', [KategoriController::class, 'store']);
//             Route::get('/edit/{id}', [KategoriController::class, 'edit']);
//             Route::put('/update/{id}', [KategoriController::class, 'update']);
//             Route::delete('/destroy/{id}', [KategoriController::class, 'destroy']);
//         });

//         // Pembina
//         Route::middleware('admin')->prefix('/pembina')->group(function () {
//             Route::get('/', [PembinaController::class, 'index']);
//             Route::get('/create', [PembinaController::class, 'create']);
//             Route::get('/show/{id}', [PembinaController::class, 'show']);
//             Route::post('/store', [PembinaController::class, 'store']);
//             Route::get('/edit/{id}', [PembinaController::class, 'edit']);
//             Route::put('/update/{id}', [PembinaController::class, 'update']);
//             Route::delete('/destroy/{id}', [PembinaController::class, 'destroy']);
//         });

//         // Umkm
//         Route::prefix('/umkm')->group(function () {
//             Route::get('/', [UmkmController::class, 'index']);
//             Route::get('/create', [UmkmController::class, 'create']);
//             Route::get('/show/{id}', [UmkmController::class, 'show']);
//             Route::post('/store', [UmkmController::class, 'store']);
//             Route::middleware('admin')->get('/edit/{id}', [UmkmController::class, 'edit']);
//             Route::middleware('admin')->put('/update/{id}', [UmkmController::class, 'update']);
//             Route::middleware('admin')->delete('/destroy/{id}', [UmkmController::class, 'destroy']);
//         });
//     });
// });



