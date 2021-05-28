<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', 'ProductController@index')->name('produtcs.index');

Route::get('/login', function() {
    return 'login';
})->name('login');

/*
Route::middleware([])->group(function() {
    Route::prefix('/admin')->group(function() {
        Route::namespace('Admin')->group(function() {
            Route::name('admin.')->group(function() {
                Route::get('/dashboard', 'TesteController@Teste')->name('dashboard');

                Route::get('/financeiro', 'TesteController@Teste')->name('financeiro');

                Route::get('/produtos', 'TesteController@Teste')->name('produtos');

                Route::get('/', function() {
                    return redirect()->route('admin.dashboard');
                })->name('admin.home');
            });
        });
    });
});
*/

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin'
],function() {
    Route::get('/dashboard', 'TesteController@Teste')->name('admin.dashboard');

    Route::get('/financeiro', 'TesteController@Teste')->name('admin.financeiro');

    Route::get('/produtos', 'TesteController@Teste')->name('admin.produtos');

    Route::get('/', function() {
        return redirect()->route('admin.dashboard');
    })->name('admin.home');
});

Route::get('/redirect3', function() {
    return redirect()->route('url.name');
});

Route::get('/nome-url', function() {
    return 'ha ha ha';
})->name('url.name');

Route::view('/view', 'welcome');

Route::redirect('/redirect1', '/redirect2');

// Route::get('/redirect1', function() {
//     return redirect('/redirect2');
// });

Route::get('/redirect2', function() {
    return 'Redirect 02';
});

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
