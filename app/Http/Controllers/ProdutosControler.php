<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produto;
use Validator;
use App\Http\Requests\ProdutoRequest;
class ProdutosControler extends Controller
{
    /**
     * Retorna a view com os produtos listados
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = \App\produto::get();
        return view('cms.crudProdutos',compact('produtos'));
        
    
    }

    /**
     * Retorna a view de criação 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //não tem
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {
        $novo_produto = new produto;
      
        if($request->hasFile('imgFrente') ):
            $novo_produto->imgFrente = $request->imgFrente->store('public/storage');
        else:
            $novo_produto->imgFrente = 'Não foi definida uma imagem';
        endif;
            
        
        if($request->hasFile('imgCosta') ):
            $novo_produto->imgCosta = $request->imgCosta->store('public/storage');
        else:
            $novo_produto->imgCosta = 'Não foi definida uma imagem';
        endif;
        
        $novo_produto->nome = $request->input('nome');
        $novo_produto->descricao = $request->input('descricao');
        $novo_produto->preco = $request->input('preco');
        $novo_produto->save();
        return redirect()->route('produtos.index').'<script>alert("produto criado com sucesso!")</script>';

    }

    /**
     * retorna a view para mostrar
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = produto::find($id);
        return view('cms.editProduto',compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoRequest $request, $id)
    {
      
        $produto = produto::find($id);
        if($request->hasFile('imgFrente') ):
            $$produto->imgFrente = $request->imgFrente->store('public/storage');
        endif;
            
        
        if($request->hasFile('imgCosta') ):
            $$produto->imgCosta = $request->imgCosta->store('public/storage');
        endif;
        
   
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->save();
        return redirect()->route('produtos.index').'<script>alert("Editado com sucesso!")</script>';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = produto::find($id);
        $produto->delete();
        return redirect()->route('produtos.index');
    }
}
