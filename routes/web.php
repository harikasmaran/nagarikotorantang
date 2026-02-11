<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AkunController;


Route::get('/listing', function () {
    return view('listing');
});

Route::get('/artikeldesa', function () {
    return view('artikeldesa');
});


// halaman depan
// home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/berita/{id}/{judul}', [HomeController::class, 'show'])->name('berita.show');
// profile
Route::get('/visi_misi', [ProfilController::class, 'index']);
Route::get('/listing', [ProfilController::class, 'index2']);
Route::get('/struktur', [ProfilController::class, 'index3']);
// alur pelayyanan
Route::get('/alurpelayanan', [ProfilController::class, 'index4']);
// berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}/{judul}', [BeritaController::class, 'show'])->name('berita.show');
// galery home
Route::get('/galery', [GaleryController::class, 'indexx']);
//login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'resetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'updatePassword'])->name('password.update');




// halaman admin
// dashboard admin
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    //penduduk
    Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
    Route::get('/penduduk/create', [PendudukController::class, 'create'])->name('penduduk.create');
    Route::post('/penduduk', [PendudukController::class, 'store'])->name('penduduk.store');
    Route::get('/penduduk/{id}/edit', [PendudukController::class, 'edit'])->name('penduduk.edit');
    Route::put('/penduduk/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
    Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');
    
    Route::get('/admin/berita_adm', [BeritaController::class, 'indexx'])->name('berita.admin'); //untuk ngebaca berita.admin di update
    Route::get('/admin/inputberita', [BeritaController::class, 'tambah']);
    Route::post('/admin/berita/input', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::get('/admin/berita_adm/hapus/{id}', [BeritaController::class, 'delete']);
    //galery
    Route::get('/galery_adm', [GaleryController::class, 'index'])->name('galery.index');
    Route::get('/galery/create', [GaleryController::class, 'create'])->name('galery.create');
    Route::post('/galery', [GaleryController::class, 'store'])->name('galery.store');
    Route::get('/galery/{id}/edit', [GaleryController::class, 'edit'])->name('galery.edit');
    Route::put('/galery/{id}', [GaleryController::class, 'update'])->name('galery.update');
    Route::delete('/galery/{id}', [GaleryController::class, 'destroy'])->name('galery.destroy');
    //visimisi admin
    Route::get('/visimisi', [VisimisiController::class, 'index'])->name('visimisi.index');
    Route::get('/visimisi/{id}/edit', [VisimisiController::class, 'edit'])->name('visimisi.edit');
    Route::put('/visimisi/{id}', [VisimisiController::class, 'update'])->name('visimisi.update');
    //struktur
    Route::get('/struktur_adm', [StrukturController::class, 'index'])->name('struktur.index');
    Route::get('/struktur/{id}/edit', [StrukturController::class, 'edit'])->name('struktur.edit');
    Route::put('/struktur/{id}', [StrukturController::class, 'update'])->name('struktur.update');



    //profile
    Route::get('/akun', [AkunController::class, 'index'])->name('akun.index');
    Route::put('/akun/{id}', [AkunController::class, 'update'])->name('akun.update');

});

































































































// <?php

// namespace App\Http\Middleware;
// use Closure;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ProfilController;
// use App\Http\Controllers\BeritaController;
// use App\Http\Controllers\GaleryController;
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\PendudukController;
// use App\Http\Controllers\VisimisiController;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\AdminController;


// Route::get('/listing', function () {
//     return view('listing');
// });

// Route::get('/artikeldesa', function () {
//     return view('artikeldesa');
// });


// home
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/berita/{id}', [HomeController::class, 'show'])->name('berita.show');

// profile
// Route::get('/visimisi', [ProfilController::class, 'index']);
// Route::get('/listing', [ProfilController::class, 'index2']);
// Route::get('/struktur', [ProfilController::class, 'index3']);

// alur pelayyanan
// Route::get('/alurpelayanan', [ProfilController::class, 'index4']);

// berita
// Route::get('/berita', [BeritaController::class, 'index']);
// Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
// Route::get('/admin/inputberita', [BeritaController::class, 'tambah']);
// Route::post('/admin/berita/input', [BeritaController::class, 'store'])->name('berita.store');
// Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
// Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
// Route::get('/admin/berita', [BeritaController::class, 'indexx'])->name('berita.admin'); //untuk ngebaca berita.admin di update
// Route::get('/admin/berita_adm/hapus/{id}', [BeritaController::class, 'delete']);


// Route::get('/login', function () {
//     return view('auth.login');
// })->middleware('guest')->name('login');
// Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
// Route::get('/register', [AuthController::class, 'showRegister'])->middleware('guest')->name('register');
// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
// Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');
// Route::middleware('auth')->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])
//         ->name('admin.dashboard');
// });


// galery
// Route::get('/galery', [GaleryController::class, 'indexx']);
// Route::prefix('admin')->group(function () {
//     Route::get('/admin/galery_adm', [GaleryController::class, 'index'])->name('galery.index');
//     Route::get('/galery/create', [GaleryController::class, 'create'])->name('galery.create');
//     Route::post('/galery', [GaleryController::class, 'store'])->name('galery.store');
//     Route::get('/galery/{id}/edit', [GaleryController::class, 'edit'])->name('galery.edit');
//     Route::put('/galery/{id}', [GaleryController::class, 'update'])->name('galery.update');
//     Route::delete('/galery/{id}', [GaleryController::class, 'destroy'])->name('galery.destroy');
// });

// dashboard
// Route::get('/admin/dashboard', [DashboardController::class, 'index']);
// Route::get('/admin/berita_adm', [BeritaController::class, 'indexx2']);

//penduduk
// Route::prefix('admin')->group(function () {
//     Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
//     Route::get('/penduduk/{id}/edit', [PendudukController::class, 'edit'])->name('penduduk.edit');
//     Route::put('/penduduk/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
// });

//visimisi
// Route::prefix('admin')->group(function () {
//     Route::get('/visimisi', [VisimisiController::class, 'index'])->name('visimisi.index');
//     Route::get('/visimisi/{id}/edit', [VisimisiController::class, 'edit'])->name('visimisi.edit');
//     Route::put('/visimisi/{id}', [VisimisiController::class, 'update'])->name('visimisi.update');
//     Route::delete('/visimisi/{id}', [VisimisiController::class, 'destroy'])->name('visimisi.destroy');
// });

