@extends('layout')

@section('conteudo')
<div class="container">

    <h2>Resultado para: {{$nome_pesquisado}}</h2>

    <ul class="lista-produtos">
        @foreach ($resul as $produto)
              <!-- ROW 1 -->
      <li>
          <div class=" col-lg-3 col-md-3 col-sm-6 col-xm-12">
          <div class="produto-box">
            <img class="produto-img" src="{{ asset('storage/'.str_after($produto->imgFrente,'public/')) }}">
            <img class="img-costa" src="{{ asset('storage/'.str_after($produto->imgCosta,'public/')) }}">
            <div class="produto-descricao">
            <div class="nome-produto text-center"><a href="#">{{ $produto->nome }}</a></div>
              <div class="avalicao-produto">
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1" name="fb" value="1"/>
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2" name="fb" value="2"/>
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3" name="fb" value="3"/>
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4" name="fb" value="4"/>
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5" name="fb" value="5"/>
              </div>
              </div>
              <div class="preco-produto">
                <div class="valor-total">R$ {{ number_format($produto->preco, 2) }}</div>
                <div class="parcela-valor">
                até <span>3x</span> de <span>R$ {{ number_format($produto->preco/3, 2) }}</span> sem juros ou <br><span>R$ {{number_format($produto->preco, 2) }}</span> via Depósito
                </div>
              <div class="comprar-produto">
                <div class="comprar-produto">
                  <a class="btn-vermais" href="{{ route('produto.exibir',$produto->id) }}" data-dalay="50" data-toggle="tooltip" title="O produto será adicionado ao seu carrinho" style="border:none;">
                    Ver mais</a>
              </div>
              </div>
                </div>
            </div>
          </div>
          </div>
        </li>
        @endforeach
      </ul>
</div>

@endsection