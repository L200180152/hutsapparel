<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\produk_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Admin

Route::get('/produk-adm', [produk_controller::class, 'index'])->name('rute_produkadmin');

Route::post('/produk-adm', [produk_controller::class, 'tambah'])->name('rute_tambahproduk');

Route::delete('/produk-adm/{id}', [produk_controller::class, 'hapus'])->name('rute_hapusproduk');

Route::get('/produk-adm/{id}/edit', [produk_controller::class, 'edit'])->name('rute_editproduk');

Route::post('/produk-adm/{id}', [produk_controller::class, 'ubah'])->name('rute_updateproduk');






Route::get('/transaksi', function () {
    return view('admin.transaksi', [
        "judul" => "Halaman Transaksi"
    ]);
});

Route::get('/add-admin', function () {
    return view('admin.addadmin', [
        "judul" => "Sign Up Admin"
    ]);
});

Route::post('/add-admin', [RegisterController::class, 'add_admin'])->name('tambah_admin');

Route::get('/admins', function () {
    return view('admin.dashboard', [
        "judul" => "Dashboard"
    ]);
});

Route::get('/customadmin', function () {
    return view('admin.customadmin', [
        "judul" => "Halaman custom"
    ]);
});


// Route::get('/admins', function () {
//     return view('admin.mainadmin', [
//         "judul" => "Dashboar Admin"
//     ]);
// });

// Route::get('/loginadmin', function () {
//     return view('admin.loginadmin', [
//         "judul" => "Login Admin"
//     ]);
// });

Route::get('/loginadmin', [LoginController::class, 'login_admin'])->name('login_admin');
Route::post('/loginadmins', [LoginController::class, 'login_admin_action'])->name('login_admin_action');



// User 

Route::get('/', function () {
    return view('user.home', [
        "judul" => "Home"
    ]);
});

Route::get('/belanja', [produk_controller::class, 'indexUser'])->name('rute_daftar_produk');

//User Detail Produk

// Route::get('/detailproduk', function () {
//     return view('user.detailproduk', [
//         "judul" => "Detail Produk"
//     ]);
// });

Route::get('/detailproduk/{id}/', [produk_controller::class, 'details_produk'])->name('details_produk');

Route::get('/about', function () {
    return view('user.about', [
        "judul" => "About",
        "name" => "Mu'taz Al Farisi",
        "email" => "mtzal128@gmail.com",
        "image" => "mumuk.png"
    ]);
});


Route::get('/custom', function () {
    return view('user.custom', [
        "judul" => "Custom"
    ]);
});

Route::get('/payproduk', function () {
    return view('user.payproduk', [
        "judul" => "Halaman Pembayaran"
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('rute_akunuser');
