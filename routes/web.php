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
use App\Http\Controllers\Admin\DashboardDokterController;
use App\Http\Controllers\Admin\DashboardParameterController;
use App\Http\Controllers\ProfilAkunController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PerkembanganController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\JadwalController;



Route::get('/profil-dokter', [ProfilDokterController::class, 'index'])->name('profilDokter');
Route::get('/konsul-pengguna', [KonsultasiController::class, 'index'])->name('konsulPengguna');
Route::get('/konsul-pengguna/konsul-form', [KonsultasiController::class, 'create'])->name('konsulCreate');
Route::get('/data-anak', [AnakController::class, 'index'])->name('data_anak');
Route::get('/parameter-stunting', [ParameterController::class, 'index'])->name('parameter');
Route::get('/profil', [DokterController::class, 'profilDokter'])->name('profil_dokter_anak');
Route::get('/konsul-dokter', [KonsultasiController::class, 'konsulDokter'])->name('konsulDokter');

// middleware('administrator')->

Route::get('/', [LandingPageController::class, 'index'])->name('index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Role selection and redirection
Route::get('/register/role', [RegisteredUserController::class, 'redirectBasedOnRole'])->name('register.redirect');

// Registration forms
Route::get('/register/pengguna', [RegisteredUserController::class, 'createPengguna'])
    ->name('register.pengguna');

Route::post('/register/pengguna', [RegisteredUserController::class, 'storePengguna']);

Route::get('/register/dokter', [RegisteredUserController::class, 'createDokter'])
    ->name('register.dokter');

Route::post('/register/dokter', [RegisteredUserController::class, 'storeDokter']);

// Route::get('/register-pengguna', [ProfilAkunController::class, 'profilPengguna'])->name('profil_pengguna');

// Data Anak
Route::get('/data-anak', [AnakController::class, 'showChildrenProfile'])->name('data_anak');
Route::get('/edit/{id}', [AnakController::class, 'edit'])->name('anak.edit');

Route::post('/recommendations/store', [RecommendationController::class, 'store'])->name('recommendations.store');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    
    Route::middleware('pengguna')->prefix('')->group(function () {
    // Profil Pengguna
    Route::get('/profil-pengguna/{id}', [ProfilAkunController::class, 'profilPengguna'])->name('profil_pengguna');
    Route::post('/profil-pengguna/update/', [ProfilAkunController::class, 'updateProfilPengguna'])->name('profil_update_penggunna');

    // Data Anak
    Route::prefix('/data-anak')->group(function () {
        Route::get('/create', [AnakController::class, 'create'])->name('anak.create');
        Route::post('/store', [AnakController::class, 'store'])->name('anak.store');
        Route::put('/update/{id}', [AnakController::class, 'update'])->name('anak.update');
        // Route::delete('/destroy/{id}', [AnakController::class, 'destroy'])->name('anak.destroy');
        Route::delete('/{id}', [AnakController::class, 'destroy'])->name('anak.destroy');


        // Perkembangan
        Route::prefix('/perkembangan')->group(function () {
        Route::get('/create/{id}', [PerkembanganController::class, 'create'])->name('perkembangan.create');
        Route::get('/edit/{id}', [PerkembanganController::class, 'edit'])->name('perkembangan.edit');
        Route::post('/store/{id}', [PerkembanganController::class, 'store'])->name('perkembangan.store');
        Route::put('/update/{id}', [PerkembanganController::class, 'update'])->name('perkembangan.update');
        Route::delete('/destroy/{id}', [PerkembanganController::class, 'destroy'])->name('perkembangan.destroy');
        });

    });
    

    });

    Route::middleware(['dokter'])->get('/test-dokter', function () {
        return 'Dokter Middleware Works!';
    });
    

    Route::middleware('dokter')->prefix('')->group(function () {
    // Profil Dokter
    Route::get('/profil-dokter/{id}', [ProfilAkunController::class, 'profilDokter'])->name('profil_dokter');
    Route::post('/profil-dokter/update/', [ProfilAkunController::class, 'updateProfilDokter'])->name('profil_update_dokter');
    
    // Jadwal
    Route::get('/profil-dokter/{id}/jadwal/', [JadwalController::class, 'index'])->name('jadwal_dokter');
    Route::get('/profil-dokter/jadwal/create', [JadwalController::class, 'create'])->name('jadwal.create');
    });
    
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

        });

        // parameter
        Route::middleware('admin')->prefix('/parameter')->group(function () {
            Route::get('/', [DashboardParameterController::class, 'index'])->name('parameter.dashboard');
            Route::get('/show/{id}', [DashboardParameterController::class, 'show'])->name('parameter.show');
            Route::get('/create', [DashboardParameterController::class, 'create'])->name('parameter.create');
            Route::post('/store', [DashboardParameterController::class, 'store'])->name('parameter.store');
            Route::get('/edit/{id}', [DashboardParameterController::class, 'edit'])->name('parameter.edit');
            Route::put('/update/{id}', [DashboardParameterController::class, 'update'])->name('parameter.update');
            Route::delete('/destroy/{id}', [DashboardParameterController::class, 'destroy'])->name('parameter.destroy');  // Nama route diubah

        });

        // dokter
        Route::middleware('admin')->prefix('/dokter')->group(function () {
            Route::get('/', [DashboardDokterController::class, 'index'])->name('dokter.dashboard');
            Route::get('/show/{id}', [DashboardDokterController::class, 'show'])->name('dokter.show');
            Route::get('/create', [DashboardDokterController::class, 'create'])->name('dokter.create');
            Route::post('/store', [DashboardDokterController::class, 'store'])->name('dokter.store');
            Route::get('/edit/{id}', [DashboardDokterController::class, 'edit'])->name('dokter.edit');
            Route::put('/update/{id}', [DashboardDokterController::class, 'update'])->name('dokter.update');
            Route::delete('/dokter/{id}', [DashboardDokterController::class, 'destroy'])->name('dokter.destroy');  // Nama route diubah

        });
//             Route::get('/create', [KabkotaController::class, 'create']);
//             Route::get('/show/{id}', [KabkotaController::class, 'show']);
//             Route::post('/store', [KabkotaController::class, 'store']);
//             Route::get('/edit/{id}', [KabkotaController::class, 'edit']);
//             Route::put('/update/{id}', [KabkotaController::class, 'update']);
//             Route::delete('/destroy/{id}', [KabkotaController::class, 'destroy']);
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



