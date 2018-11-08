<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class viewController extends Controller
{
    /**
     * retorna produtos para o crudProdutos
     *
     * @return void
     */
   

    public function get_view_index()
    {
        return view('index');  
    }
    public function get_view_cromprar()
    {
        return view('comprar'); 
    }
    public function get_view_login()
    {
        return view('clientes.login'); 
    }
    public function get_view_novaConta()
    {
        return view('clientes.novaConta');
    }
    public function get_view_recuperarSenha()
    {
        return view('clientes.recuperarSenha');
    }
    public function get_view_duvidas()
    {
        return view('clientes.faq');  
    }
   
   public function sair(){
       Auth::logout();
       return redirect()->route('index');

   }
}
