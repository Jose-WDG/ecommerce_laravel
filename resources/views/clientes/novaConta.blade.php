@extends('layout')

@section('conteudo')
<div class="container container-custom">
    <h2>Criar Conta</h2>
    <form class="form-horizontal-custom" action="{{ route('novaConta.store') }} " method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <div class="col-lg-12">
          <div class="form-check form-check-inline">
            <label for="exampleInputEmail1">Comprar Como;</label><br>
            <input class="form-check-input" type="checkbox" id="tipoDePessoa" value="option1">
            <label class="form-check-label" for="tipoDePessoa">Pessoa Física</label>
            <input class="form-check-input" type="checkbox" id="tipoDePessoa" value="option1">
            <label class="form-check-label" for="tipoDePessoa">Pessoa Juridica</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12">
          <label for="nome">Nome Completo:</label>
          <input type="text" class="form-control" name="nome" id="nome" aria-describedby="Nome completo" placeholder="Nome completo">
        </div>
      </div>
  
      <div class="form-group">
        <div class="col-lg-12">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-12">
        <label for="cpf">CPF:</label>
        <input type="number" class="form-control" name="cpf" id="nome" aria-describedby="CPF" placeholder="">
      </div>
    </div>
  
    <div class="form-group">
      <div class="col-lg-12">
        <label for="dataDeNascimento">Nascimento:</label>
        <input type="text" class="form-control" name="dataDeNascimento" id="dataDeNascimento">
      </div>
    </div>
  
    <div class="form-group">
      <div class="col-lg-12">
        <label for="celular">Celular:</label>
        <input type="text" class="form-control" name="celular" id="celular" aria-describedby="numero-celular" placeholder="(00) 00000000">
      </div>
    </div>
  
    <div class="form-group">
      <div class="col-lg-12">
        <label for="outroTelefone">Outro Telefone:</label>
        <input type="text" class="form-control" name="outroTelefone" id="outroTelefone" aria-describedby="Numero-telefone" placeholder="(00) 00000000">
      </div>
    </div>
      <div class="form-group">
        <div class="col-lg-12">
          <div class="form-check form-check-inline">
            <label for="genero">Gênero:</label><br>
            <input class="form-check-input" type="checkbox" id="genero" value="option1">
            <label class="form-check-label" for="genero">Feminino</label>
            <input class="form-check-input" type="checkbox" id="genero" value="option1">
            <label class="form-check-label" for="genero">Masculino</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-12">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" name="senha" id="senha" aria-describedby="senha" placeholder="***********">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12">
          <label for="senhaConfirme">Confirma Senha:</label>
          <input type="password" class="form-control" name="senhaConfirme" id="senha" aria-describedby="confirma-senha" placeholder="***********">
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