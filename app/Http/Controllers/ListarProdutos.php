<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\produto;
class ListarProdutos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = produto::orderBy('created_at')->get();
        $produtos_destaque = produto::orderBy('nome')->paginate(4);
        return view('index',compact('produtos','produtos_destaque'));
    }
   
    public function busca(Request $request)
    {
        
        $resultado_pesquisa = produto::where('nome','LIKE','%'.$request->criterio.'%')->get();
        return view('resul',
            [
                'resul'=>$resultado_pesquisa,
                'nome_pesquisado'=>$request->criterio
            ]
        );
        
    }
    public function categoria(Request $request)
    {
        
        $resultado_pesquisa = produto::where('categoria','LIKE','%'.$request->camiseta.'%')->get();
        return view('categoria',
        [
            'resul'=>$resultado_pesquisa,
            'categoria'=>$request->camiseta
        ]
    );
    }
      /**
     * Comprar produto
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = produto::find($id);
        return view('comprar',compact('produto'));
    }
}
