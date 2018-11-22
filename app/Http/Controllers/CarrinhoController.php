<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\Http\Controllers\Controller;
use App\pedido;


class CarrinhoController extends Controller
{
    function __construct()
    {
        # obriga esta logado
        $this->middleware('auth');
    }
    public function index(){
     $pedidos = pedido::where([
         'status' => 'RE',
         'user_id'=>Auth::id()
     ])->get();
     dd([
        $pedidos,
        $pedidos[0]->pedido_produtos,
        $pedidos[0]->pedido_produtos[0]->produto
     ]);
     return view('carrinho.index',compact('pedidos'));
    }
}
