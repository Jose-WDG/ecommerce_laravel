@extends('layout')

@section('conteudo')
<div class="container container-custom">
    <h2>Criar Conta</h2>
    <form class="form-horizontal-custom">
      <div class="form-group">
        <div class="col-lg-12">
          <div class="form-check form-check-inline">
            <label for="exampleInputEmail1">Comprar Como;</label><br>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Pessoa Física</label>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Pessoa Juridica</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12">
          <label for="exampleInputEmail1">Nome Completo:</label>
          <input type="text" class="form-control" id="nome" aria-describedby="Nome completo" placeholder="Nome completo">
        </div>
      </div>
  
      <div class="form-group">
        <div class="col-lg-12">
        <label for="exampleInputPassword1">E-mail:</label>
        <input type="email" class="form-control" id="email" placeholder="E-mail">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-12">
        <label for="exampleInputEmail1">CPF:</label>
        <input type="number" class="form-control" id="nome" aria-describedby="CPF" placeholder="">
      </div>
    </div>
  
    <div class="form-group">
      <div class="col-lg-12">
        <label for="exampleInputEmail1">Nascimento:</label>
        <input type="date" class="form-control" id="nome" aria-describedby="Nome completo" placeholder="Data de nascimento">
      </div>
    </div>
  
    <div class="form-group">
      <div class="col-lg-12">
        <label for="exampleInputEmail1">Celular:</label>
        <input type="text" class="form-control" id="nome" aria-describedby="numero-celular" placeholder="(00) 00000000">
      </div>
    </div>
  
    <div class="form-group">
      <div class="col-lg-12">
        <label for="exampleInputEmail1">Outro Telefone:</label>
        <input type="text" class="form-control" id="nome" aria-describedby="Numero-telefone" placeholder="(00) 00000000">
      </div>
    </div>
      <div class="form-group">
        <div class="col-lg-12">
          <div class="form-check form-check-inline">
            <label for="exampleInputEmail1">Gênero:</label><br>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Feminino</label>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Masculino</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12">
          <label for="exampleInputEmail1">Senha:</label>
          <input type="password" class="form-control" id="senha" aria-describedby="senha" placeholder="***********">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12">
          <label for="exampleInputEmail1">Confirma Senha:</label>
          <input type="password" class="form-control" id="senha" aria-describedby="confirma-senha" placeholder="***********">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Desejo receber alertas por SMS
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Desejo receber e-mails com avisos importantes (ex. status de pedido)
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Desejo receber e-mails com promoções
            </label>
          </div>
        </div>
      </div>
  
    <div class="form-check text-center">
      <div class="col-lg-12">
      <button type="submit" class="btn btn-primary btn-default-custom">Gravar</button>
      </div>
      </div>
      <div class="clearfix"></div>
    </form>
  </div>
@endsection