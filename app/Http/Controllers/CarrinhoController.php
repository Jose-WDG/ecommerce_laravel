<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\Http\Controllers\Controller;
use App\pedido;
use App\produto;
use App\pedido_produto;
class CarrinhoController extends Controller
{
    function __construct()
    {
        # obriga está logado
        $this->middleware('auth');
    }
    
    public function index(){
     $pedidos = pedido::where([
         'status' => 'RE',
         'user_id'=>Auth::id()
     ])->get();
    
     return view('carrinho.index',compact('pedidos'));
    }

    public function adicionar()
    {
        $this->middleware('VerifyCsrfToken');
        $req = Request();
        $idproduto = $req->input('id');

        $produto = produto::find($idproduto);
        if(empty($produto->id))
        {
            $req->Session()->flash('mensagem-falha','Porduto não encontrado em nossa loja');
            return redirect()->route('carrinho.index');
        }

        $idusuario = Auth::id();

        $idpedido = pedido::consultaId([
            'user_id' => $idusuario,
            'status'  => 'RE' //reservado
        ]);
        if(empty($idpedido))
        {
            $pedido_novo = pedido::create([
                'user_id' => $idusuario,
                'status'  => 'RE'
            ]);
            $idpedido = $pedido_novo->id;
        }
        pedido_produto::create([
            'pedido_id' => $idpedido,
            'produto_id'=> $idproduto,
            'valor'     => $produto->preco,
            'status'    => 'RE'
        ]);

        $req->Session()->flash('menssagem-sucesso','produto adicionado ao carrinho com sucesso!');
        return redirect()->route('carrinho.index');
    }
    public function remover()
    {
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido           = $req->input('pedido_id');
        $idproduto          = $req->input('produto_id');
        $remove_apenas_item = (boolean)$req->input('item');
        $idusuario          = Auth::id();

        $idpedido = pedido::consultaId([
            'id'        => $idpedido,
            'user_id'   => $idusuario,
            'status'    => 'RE' // reservada
        ]);
        if(empty($idpedido))
        {
            $req->Session()->flash('mensagem-falha','pedido não encontrado!');
            return redirect()->route('carrinho.index');
        }
        $where_produto = [
            'pedido_id' => $idpedido,
            'produto_id'=> $idproduto
        ];
        $produto = pedido_produto::where($where_produto)->orderBy('id','desc')->first();
        if(empty($produto->id))
        {
            $req->Session()->flash('mensagem-falha','produto não encontrado no carrinho!');
            return redirect()->route('carrinho.index');
        }
        if( $remove_apenas_item)
        {
            $where_produto['id'] = $produto->id;
        }
        pedido_produto::where($where_produto)->delete();

        $check_pedido = pedido_produto::where([
            'pedido_id' => $produto->pedido_id,
       ])->exists();
       if(!$check_pedido)
       {
           pedido::where([
            'id' => $produto->pedido_id
           ])->delete();
       }
       $req->Session()->flash('mensagem-sucesso','produto removido do carrinho com sucesso!');
       return redirect()->route('carrinho.index'); 
    }
    public function concluir(Request $req)
    {
        $idpedido = $req->input('pedido_id');
        $idusuario = Auth::id();

        $check_pedido = pedido::where([
            'id'        => $idpedido,
            'user_id'   => $idusuario,
            'status'    => 'RE' //Reservado
        ])->exists();

        if(!$check_pedido)
        {
            $req->Session()->flash('mensagem-falha','pedido não encontrado!');
            return redirect()->route('carrinho.index');
        }

        $check_produtos = pedido_produto::where([
            'pedido_id' => $idpedido
        ])->exists();
        if(!$check_produtos)
        {
            $req->Session()->flash('mensagem-falha','produtos do pedido não encontrados!');
            return redirect()->route('carrinho.index');
        }
        pedido_produto::where([
            'pedido_id' => $idpedido
        ])->update([
            'status' => 'PA'
        ]);
        pedido::where([
            'id' => $idpedido
        ])->update([
            'status' => 'PA'
        ]);

        $req->Session()->flash('mensagem-sucesso','Compra concluida com sucesso!');
        return redirect()->route('carrinho.compras');
    }
}
