@extends('layout')

@section('conteudo')
    
<div class="container">
    <div class="row">
        <h3>Produtos no Carrinho</h3>
        <hr/>
        @if (Session::has('mensagem-sucesso'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('mensagem-sucesso') }}
            </div>
        @endif
        @if (Session::has('mensagem-falha'))
        <div class="alert alert-warning" role="alert">
            {{ Session::get('mensagem-falha') }}
        </div>
        @endif
        @forelse ($pedidos as $pedido)
            <h5 class="col-lg-6 col-md-6 col-sm-12">Pedido: {{ $pedido->id }}</h5>
            <h5 class="col-lg-6 col-md-6 col-sm-12">Criado em: {{ $pedido->created_at->format('d/m/y H:i') }}</h5>
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">img</th>
                        <th scope="col">Qtd</th>
                        <th scope="col">Produtos</th>
                        <th scope="col">Valor unit</th>
                        <th scope="col">Desconto</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total_pedido = 0;
                    @endphp
                    @foreach ($pedido->pedido_produtos as $pedido_produto)

                        <tr>
                        <td class="col=lg-2 col-md-2 col-sm-12">
                            <img height="100" width="100" src="{{ asset('storage/'.str_after($pedido_produto->produto->imgFrente,'public/')) }}" alt="">    
                        </td>
                        <td class="col=lg-2 col-md-2 col-sm-12" align="center">
                            <div align="center">
                                
                                <a class="col-lg-4 col-md-4 col-sm-4 " href="#" onclick="carrinhoRemoverProduto(
                                    {{$pedido->id}},{{$pedido_produto->produto_id}},1)">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                </a>    
                                
                                <span class="col-lg-4 col-md-4 col-sm-4" >{{ $pedido_produto->qtd }}</span>
                                
                                <a class="col-lg-4 col-md-4 col-sm-4"  href="#" onclick="carrinhoAdicionarProduto(
                                {{$pedido_produto->produto_id}})">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                </a>
                            
                            </div>
                            <a href="#" class="" data-positon="right" data-delay="50" data-toggle="tooltip" title="Retirar produto do carrinho?" onclick="carrinhoRemoverProduto(
                                {{$pedido->id}},{{$pedido_produto->produto_id}},0)">Retirar produto</a>    
                        </td>
                        <td class="col=lg-2 col-md-2 col-sm-12 col-xm-12">{{ $pedido_produto->produto->nome }}</td>
                        <td class="col=lg-2 col-md-2 col-sm-12 col-xm-12">R$: {{ number_format($pedido_produto->valores,2,',','.') }}</td>
                        <td class="col=lg-2 col-md-2 col-sm-12 col-xm-12">R$: {{ number_format($pedido_produto->desconto,2,',','.') }}</td>
                        @php
                            $total_produto = $pedido_produto->valores - $pedido_produto->desconto
                            ;
                            $total_pedido += $total_produto;
                        @endphp
                            <td>R$:{{ number_format($total_produto,2,',','.') }}</td>    
                        </tr>    
                    @endforeach
                </tbody>
            </table>
            <div class="container text-center">
                    <div align="right">
                            <strong>Total do pedido: </strong>
                            <span>R$: {{ number_format($total_pedido,2,',','.') }}</span>
                        </div>
                        <!-- BOTÃO CONTINUAR COMPRANDO / CSS INLINE-->
                        <div align="right">
                                <a href="{{ route('index') }}" class="btn btn-success" data-positon="top" data-delay="50"
                                 data-toggle="tooltip" title="Voltar a página inicial para continuar comprando?"
                                 style="width:250px; height:50px; padding:15px; background-color:black; border:none;margin:2px; ">Continuar comprando</a>  
                        {{-- <form action="{{ route('Carrinho.concluir') }}" method="post">
                                {{ csrf_field() }}
                                    <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
                                        <button class="btn btn-success" data-positon="top" data-delay="50"
                                        data-toggle="tooltip" title="Adquirir produtos concluindo a compra?"
                                        style="width:250px; height:50px; padding:15px; background-color:black; border:none; margin:2px;">Cocluir compras</button> 

                            </form> --}}
                        </div>
            </div>
            
        @empty
            <h3>Não há nenhum pedido no carrinho</h3>
        @endforelse
    </div>
</div>
<form id="form-remover-produto" method="POST" action="{{route('Carrinho.remover')}}">
    {{ csrf_field() }}
    {{ method_field("DELETE") }}
    <input type="hidden" name="pedido_id">
    <input type="hidden" name="produto_id">
    <input type="hidden" name="item">
</form>
<form id="form-adicionar-produto" method="POST" action="{{route('Carrinho.adicionar')}}">
    {{ csrf_field() }}
    <input type="hidden" name="id">
</form>
{{-- @push('scripts')
<script type="text/javascript" src="/js/script.js"></script>
@endpush --}}
{{-- <script type="text/javascript">
    /*função de teste  para metodo remover */
    function removeProduto(p_idpedido,p_idproduto, p_item){
        $.ajax({
            url: "{{route('Carrinho.remover')}}",
            method: "DELETE",
            data: {
                _token: "{{ csrf_token() }}",
                pedido_id: p_idpedido,
                produto_id: p_idproduto,
                item: p_item}
            }).always(function(){
                location.reload();
            });
       
    }
    
</script> --}}
@endsection
