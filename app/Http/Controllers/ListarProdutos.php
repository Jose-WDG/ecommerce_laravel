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
