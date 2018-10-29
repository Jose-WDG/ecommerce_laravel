<?php

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

Route::get('/', function () {
    return view('layout');
});

Route::prefix('holly')->group(function()
{
    Route::resource('/', 'ListarProdutos');
    Route::resource('comprar', 'ListarProdutos');
    Route::get('/login', 'viewController@get_view_login' )->name('entrar');
    Route::get('/nova Conta','viewController@get_view_novaConta' )->name('nova conta');
    Route::get('/Recuperar Senha', 'viewController@get_view_recuperarSenha')->name('recuperar senha');
    Route::get('/Duvidas', 'viewController@get_view_duvidas')->name('duvidas');
    
    
    Route::resource('produtos', 'ProdutosControler');
    
});
