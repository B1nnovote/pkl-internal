<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\BackendController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// route basic 
Route::get('about', function () {
    return 'ini halaman about';
});

Route::get('profile', function () {
    return view('profile');
});

// route parameter (ditandai dengan {})
Route::get('produk/{namaProduk}', function($a) {
    return 'saya membeli <b>' . $a . '<b>';
});

Route::get('beli/{barang}/{jumlah}', function($a,$b){
    return view('beli', compact('a','b'));
});

//optional parameter 
Route::get('kategori/{namaKategori?}', function($nama=null){
    if ($nama) {
        return 'Anda Memilih Kategori: ' . $nama;
    } else {
    return 'Anda Belum Memilih Kategori !'; 
    }
});

Route::get('promo/{barang?}/{kode?}', function($a=null,$b=null){
    return view('promo', compact('a','b'));
});


//route siswa 
Route::get('siswa',[MyController::class,'index']);
Route::get('siswa/create', [MyController::class, 'create']);
Route::post('/siswa', [MyController::class, 'store']);
Route::get('siswa/{id}', [MyController::class,'show']);
Route::get('siswa/{id}/edit', [MyController::class, 'edit']);
Route::put('siswa/{id}', [MyController::class, 'update']);

Route::delete('siswa/{id}', [MyController::class, 'destroy']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//importt middlewar
//route admin/backend
Route::group(['prefix'=>'admin','middleware'=>['auth', ]], function (){
    Route::get('/', [BackendController::class,'index']);
});

// Admin::class