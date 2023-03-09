<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Models\Berita;
use App\Models\Layanan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(DashboardController::class)->group(function () {
    Route::get('kebijakan', 'kebijakanView')->name('kebijakan.dashboard');
    Route::get('tata-kelola', 'tataKelolaView')->name('tata-kelola');
    Route::get('manajemen', 'managementView')->name('manajemen');
    Route::get('about', 'visiMisiView')->name('about');
    Route::get('/', 'homeView')->name('home');
    Route::get('/berita', 'beritaView')->name('berita');
    Route::get('/detail/{slug}', 'detailBeritaView')->name('detail.berita');
});







Route::get('/layanan', function () {
    return view('layanan.layanan');
});

Route::get('/tugas', function () {
    return view('profil.tugasFungsi');
});





Route::get('/uker', function () {
    return view('profil.unitKerja');
});

Route::get('/peraturan', function () {
    return view('profil.peraturan');
});

Route::get('/detailProgres', function () {
    return view('detailProgres.DProgres');
});

Route::get('/detailProgres2', function () {
    return view('detailProgres.DProgres2');
});



//admin
Route::get('/admin', function () {
    $artikel = Berita::count();
    $user = User::count();
    $administrasiLayanan = Layanan::where('type', 'Administrasi')->count();
    $publicLayanan = Layanan::where('type', 'Public')->count();
    return view('admin.layout.index', compact('artikel', 'user', 'administrasiLayanan', 'publicLayanan'));
})->middleware('auth');

//kebijakanAdmin
Route::resource('/kebijakans', \App\Http\Controllers\KebijakanController::class);

//manajemenAdmin
Route::resource('/manajemens', \App\Http\Controllers\ManajemenController::class);

//layanan admin
Route::resource('/layanans', \App\Http\Controllers\LayananController::class);

//tatakelola admin
Route::resource('/tatakelolas', \App\Http\Controllers\TataKelolaController::class);

//Footer admin
Route::resource('/footers', \App\Http\Controllers\FooterController::class);

//VisiMisi
Route::get('/visimisis', [App\Http\Controllers\Admin\VisiMisiController::class, 'index'])->name('visimisis.index');
Route::get('/visimisis/edit', [App\Http\Controllers\Admin\VisiMisiController::class, 'editView'])->name('visimisis.edit');
Route::post('/visimisis/edit/store', [App\Http\Controllers\Admin\VisiMisiController::class, 'edit'])->name('visimisis.update');

//link Layanan
Route::get('/link-layanan', [App\Http\Controllers\Admin\LinkLayananController::class, 'index'])->name('link-layanan.index');
Route::get('/link-layanan/create', [App\Http\Controllers\Admin\LinkLayananController::class, 'create'])->name('link-layanan.create');
Route::post('/link-layanan/store', [App\Http\Controllers\Admin\LinkLayananController::class, 'store'])->name('link-layanan.store');
Route::get('/link-layanan/edit/{id}', [App\Http\Controllers\Admin\LinkLayananController::class, 'edit'])->name('link-layanan.edit');
Route::post('/link-layanan/update/{id}', [App\Http\Controllers\Admin\LinkLayananController::class, 'update'])->name('link-layanan.update');
Route::delete('/link-layanan/delete/{id}', [App\Http\Controllers\Admin\LinkLayananController::class, 'destroy'])->name('link-layanan.destroy');


//berita admin
Route::get('/berita-admin', [App\Http\Controllers\Admin\BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create', [App\Http\Controllers\Admin\BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita/store', [App\Http\Controllers\Admin\BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/edit/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'edit'])->name('berita.edit');
Route::post('/berita/update/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'update'])->name('berita.update');
Route::delete('/berita/delete/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'destroy'])->name('berita.destroy');
Route::get('/berita/publish/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'publish'])->name('berita.publish');


//login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/navbarcontrol', function () {
    return view('admin.navbarcontrol.index');
});

Route::get('/manajemenadmin', function () {
    return view('admin.manajemen.index');
});
