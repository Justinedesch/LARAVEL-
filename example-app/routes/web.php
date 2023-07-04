<?php

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

Route::get('/', function () {
    return 'homepage';
});

Route::get('/product', function () {
    return 'liste des produits';
});

Route::get('/product/{id}', function (string $id) {
    return 'Fiche du produit' ;
});

Route::get('/cart', function () {
    return 'Panier';
});
