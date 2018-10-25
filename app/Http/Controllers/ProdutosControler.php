<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\produto;
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
    public function store(Request $request)
    {
        if($request->hasFile('img-frente') ){
            dd($request->file('img-frente'));
        }   
        else{
            dd('img-frente: não tem');
        }
            
        
        if($request->hasFile('img-costa') ):
            dd('img-costa: tem');
        else:
            dd('img-costa: não tem');
        endif;
        $novo_produto = new produto;
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
    public function update(Request $request, $id)
    {
       
        $produto = produto::find($id);
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
