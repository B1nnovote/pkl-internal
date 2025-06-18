<?php

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



