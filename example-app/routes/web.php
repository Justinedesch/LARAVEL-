<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class,'index']);


Route::get('/product', [ProductController::class,'show_product']);

Route::get('/product/{id}', function (string $id) {
    return 'Fiche du produit ' .$id ;
});

Route::get('/cart', [CartController::class,'show_cart']);

