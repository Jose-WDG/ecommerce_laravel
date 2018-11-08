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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('holly')->group(function()
{
    Route::resource('/', 'ListarProdutos');
    Route::resource('comprar', 'ListarProdutos');
    
    /**
     * Rotas de login e sauth
     */
    Route::get('login', 'ClienteController@fazerLogin' );
    Route::post('login', 'ClienteController@auth')->name('entrar');

    Route::resource('novaConta','ClientesController' );

    Route::get('/Recuperar Senha', 'viewController@get_view_recuperarSenha')->name('recuperar senha');
    Route::get('/Duvidas', 'viewController@get_view_duvidas')->name('duvidas');
    Route::post('sair','viewController@sair')->name('sair');
    
    Route::resource('produtos', 'ProdutosControler');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
