<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListProdukController;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return "User dengan ID: " . $id;
});

route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });
    Route::get('/users', function () {
        return "Admin Users";
    });
});

Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
    return view('list_barang', compact('id', 'nama'));
});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);


Route::get('/listproduk', [ListProdukController::class, 'show']);
