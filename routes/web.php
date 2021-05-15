<?php

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

Route::get('/produtos/{idProduct?}', function($idProduct = '') {
    return "Produto: ${idProduct}";
});

Route::get('/categoria/{prm1}/posts', function($prm1) {
    return "Posts da categoria: ${prm1}";
});

Route::get('/categorias/{flag}', function($flag) {
    return "Produtos da categoria: ${flag}";
});

Route::match(['get', 'post'], '/match', function() {
    return 'match';
});

Route::any('/any', function() {
    return 'any';
});

Route::get('/empresa', function() {
    return 'Empresa';
});

Route::get('/', function () {
    return 'ola';
});

Route::get('/contato', function() {
    return view('contact');
});
