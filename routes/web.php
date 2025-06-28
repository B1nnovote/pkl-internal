<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\backend\OrderController as OrdersController; 

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\MyController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

// Route::get('/', function() {
//     return view('layouts.components-frontend.frontend');
// });

//route member atau guest
Route::get('/',[FrontendController::class,'index']);
Route::get('/product', [FrontendController::class, 'product'])->name('product.index');
Route::get('/product/{product}', [FrontendController::class, 'singleProduct'])->name('product.show');
Route::get('/product/category/{slug}', [FrontendController::class, 'filterByCategory'])->name('product.filter');
Route::get('/search',[FrontendController::class,'search'])->name('product.search');

Route::get('/about', [FrontendController::class, 'about']);

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::put('/cart-update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');

//orders
Route::get('/checkout',[CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');


// review
Route::post('/product/{product}/review', [\App\Http\Controllers\ReviewController::class, 'store'])
    ->middleware('auth')->name('review.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin / Backend
Route::group(['prefix' => 'admin', 'as' => 'backend.', 'middleware' => ['auth', Admin::class]], function () {
    Route::get('/', [BackendController::class, 'index']);

    // crud resource
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/orders', OrdersController::class);
    Route::put('/orders/{id}/status', [OrdersController::class, 'updateStatus'])->name('orders.updateStatus');
});



// // route basic 
// Route::get('about', function() {
//     return 'ini halaman about';
// });

// Route::get('profile', function() {
//     return view('profile');
// });

// // route parameter (ditandai dengan {})
// Route::get('produk/{namaProduk}', function($a) {
//     return 'saya membeli <b>' . $a . '<b>';
// });

// Route::get('beli/{barang}/{jumlah}', function($a,$b){
//     return view('beli', compact('a','b'));
// });

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
Route::group(
    [
        'prefix'=>'admin',
        'as' => 'backend.',
        'middleware'=>['auth', Admin::class ]], 
    function ()
    {
    Route::get('/', [BackendController::class,'index']);
    //crud
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
     });
