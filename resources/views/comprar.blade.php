@extends('layout')

@section('conteudo')
<div class="container">
  <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12 box-comprar">
          <img class="img-responsive" src="{{asset('storage/'.str_after($produto->imgFrente,'public/'))}}"/>
      </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
              <div class="menu-links">
                  menu
              </div>
              <div class="nome-produto-comprar text-center">
                 {{ $produto->nome }}
              </div>
              <div>
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
              <div class="medidas ">
                    <span>Descrição:<span><br>
                    {{$produto->descricao}}
              </div>
              <div class="medidas ">
                  <span>MEDIDAS</span>
                  <p>Selecione a opção de <span>Tamanhos de Posters:<span></p>
                      <ul>
                          <li class="col-lg-3 col-md-3 col-sm-12 col-xm-12"><a href="#">A2 (42,0 X 59,0 cm)</a></li>
                          <li class="col-lg-3 col-md-3 col-sm-12 col-xm-12"><a href="#">A3 (29,7 X 42,0 cm)</a></li>
                          <li class="col-lg-3 col-md-3 col-sm-12 col-xm-12"><a href="#">A4 (21,0 X 29,7 cm)</a></li>
                          <li class="col-lg-3 col-md-3 col-sm-12 col-xm-12"><a href="#">A5 (14,8 X 21,0 cm)</a></li>
                      </ul>
              </div>
              <div class="descricao-pagamento col-lg-12 col-md-12 col-sm-12 col-xm-12 box-comprar">
                 <p> A partir de
                 <span>R$ {{ $produto->preco}}</span>
                  até <span>3x de R$ {{ number_format($produto->preco/3, 2) }} sem juros</span> ou <span>R$ {{ $produto->preco}} via Depósito</span></p>
              </div>
              <div class="area-btn">
                    <form action="{{ route('Carrinho.adicionar') }}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{ $produto->id }}">
                            <button class="btn-comprar col-lg-12" data-dalay="50" data-toggle="tooltip" title="O produto será adicionado ao seu carrinho" style="border:none;">
                                <span style="color:#fff;"><i class="fas fa-lock" style="margin-right:5px;"></i>Comprar<span>
                            </button>
                        </form>
                  
              </div>
              <div class="btn-parcela">
              <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle btn-custom" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img class="btn-img-parcela" src=" {{ url('imagens/site/btn-pagseguro-cards.png') }}" ><span>Parcelas</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="dropdownMenuButton">
                      <ul>
                          <li><a class="dropdown-item" href="#"><span>1x</span> de R$ 17,90 sem juros</a></li>
                          <li><a class="dropdown-item" href="#"><span>2x</span> de R$ 8,95 sem juros</a></li>
                          <li><a class="dropdown-item" href="#"><span>3x</span> de R$ 5,96 sem juros</a></li>
                      </ul>



              </div>
              </div>

                  <div class="col-sm-12 cal-cep">


                      <div class="input-group">
                          <input type="number" class="form-control" placeholder="CEP">
                          <span class="input-group-btn">
                              <button class="btn btn-theme btn-custom" style="background-color: #000;color: #fff;" type="submit">CALCULAR</button>
                          </span>
                          </div>
                      </div>

          </div>

      </div>
	</div>
	@endsection
