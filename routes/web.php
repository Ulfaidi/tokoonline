<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    Admin\KategoriController,
    Admin\ProdukController,
    Admin\CustomerController,
    Admin\UserController,
    WebsiteController,
    
};

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

Route::get('/getprovince', [TestController::class, 'getprovince']);
Route::get('/getcity', [TestController::class, 'getcity']);
Route::get('/cekongkir', [TestController::class, 'cekongkir']);
Route::post('/prosescekongkir', [TestController::class, 'prosescekongkir'])->name('prosescekongkir');



Route::get('/', [WebsiteController::class, 'index']);
Route::get('/profil', [WebsiteController::class, 'profil']);
Route::get('/produk', [WebsiteController::class, 'produk'])->middleware('auth');
Route::get('/detail', [WebsiteController::class, 'detail']);

Route::middleware(['auth'])->group(function () {
    Route::post('/update-profile', [CustomerController::class, 'updateProfile'])->name('update-profile');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group([
    // 'middleware' => ['auth'],
    'prefix' => "kategori"
], function ($router) {
    Route::get('/', [KategoriController::class, 'show']);
    Route::get('/create', [KategoriController::class, 'create']);
    Route::post('/store', [KategoriController::class, 'store']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::get('/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
});

Route::group([
    // 'middleware' => ['auth'],
    'prefix' => "produk"
], function ($router) {
    Route::get('/', [ProdukController::class, 'show']);
    Route::get('/create', [ProdukController::class, 'create']);
    Route::post('/store', [ProdukController::class, 'store']);
    Route::get('/{id}/edit', [ProdukController::class, 'edit']);
    Route::put('/{id}', [ProdukController::class, 'update']);
    Route::get('/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
});

Route::group([
    // 'middleware' => ['auth'],
    'prefix' => "customer"
], function ($router) {
    Route::get('/', [CustomerController::class, 'show']);
    Route::get('/create', [CustomerController::class, 'create']);
    Route::post('/store', [CustomerController::class, 'store']);
    Route::get('/{id}/edit', [CustomerController::class, 'edit']);
    Route::put('/{id}', [CustomerController::class, 'update']);
    Route::get('/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
});