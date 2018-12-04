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
    Route::get('/comprar/{id}', function($id){$produto = App\produto::find($id);return view('comprar',compact('produto'));   
    })->name('produto.exibir')->where(['id'=>'[0-9]+']);

    //rota do carrinho de compras 
    Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');
    Route::get('/carrinho/adicionar', function() {return redirect()->route('index');});
    Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('Carrinho.adicionar');
    Route::delete('/carrinho/remover', 'CarrinhoController@remover')->name('Carrinho.remover');
    Route::post('/carrinho/concluir','CarrinhoController@concluir')->name('Carrinho.concluir');
    Route::get('/carrinho/compras','CarrinhoController@compras')->name('Carrinho.compras');
 
    
    //Rotas de login e sauth
    Route::get('login', 'ClienteController@fazerLogin' );
    Route::post('login', 'ClienteController@auth')->name('entrar');
    Route::resource('novaConta','ClientesController' );
    Route::get('/Recuperar Senha', 'viewController@get_view_recuperarSenha')->name('recuperar senha');

    //faq
    Route::get('/Duvidas', 'viewController@get_view_duvidas')->name('duvidas');
    Route::post('sair','viewController@sair')->name('sair');
    
    //rotas do formulario de busca
    Route::post('/pesquisa','ListarProdutos@busca');
    Route::post('/categoria','ListarProdutos@categoria');
    
    //rotas admin CMS´S
    Route::get('/admin','DashboardController@index')->name('dashboard.index');
    Route::resource('/admin/produtos','ProdutosControler');

    Route::get('/admin/categorias','CategoriaController@index')->name('categoria.index');
});

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
