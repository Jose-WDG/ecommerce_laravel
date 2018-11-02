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
    Route::resource('/', 'ListarProdutos'); // para chamar essa rota usa-se a função url('nome da url')
    Route::resource('comprar', 'ListarProdutos'); // para chamar essa rota usa-se a função url('nome da url')

    Route::get('login', 'viewController@get_view_login' )->name('entrar'); // em rotas nomeadas, para chamar essa rota, usa-se a função route('nome da rota')
    Route::get('nova Conta','viewController@get_view_novaConta' )->name('nova conta');// em rotas nomeadas, para chamar essa rota, usa-se a função route('nome da rota')
    Route::get('Recuperar Senha', 'viewController@get_view_recuperarSenha')->name('recuperar senha');// em rotas nomeadas, para chamar essa rota, usa-se a função route('nome da rota')
    Route::get('Duvidas', 'viewController@get_view_duvidas')->name('duvidas');// em rotas nomeadas, para chamar essa rota, usa-se a função route('nome da rota')
     Route::get('admin', function () {
        return view('cms.temaAdmin');
     });
    
    Route::resource('produtos', 'ProdutosControler');// para chamar essa rota usa-se a função url('nome da url')
    
});
