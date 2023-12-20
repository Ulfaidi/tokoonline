<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{

    WebsiteController,
    CustomerController,
    TestController
 
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
    Route::post('/update-profile',[CustomerController::class,'updateProfile'])->name('update-profile');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
