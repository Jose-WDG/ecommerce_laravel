@extends('layout')


@section('conteudo')
<div class="container">
    <div class="form-group">
      <div class="col-md-offset-3 col-lg-6 text-center">
        {!! Form::open(['route'=>'entrar','method'=>'post']) !!}
        <div class="form-group">
            <div class="col-md-offset-1 col-sm-10">
            <label for="email" class="control-label control-label-custom text-left">Email</label><br><br>
            {!! Form::text('email' ,null,['class'=>'form-control','placeholder'=>'Email']) !!}
          </div>
        </div>

        <div class="form-group">

          <div class="col-md-offset-1 col-sm-10">
            <label for="senha" class="control-label text-left">Senha</label><br><br>
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="senha">
              <a href="{{ route('recuperar senha') }}" >Esqueceu sua senha?</a>
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-offset-1 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-offset-1 col-sm-10">
            <button type="submit" class="btn btn-default btn-default-custom" value="Enviar">Sign in</button>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-offset-1 col-sm-10">
            <legend class="legenda"></legend>
            <h4>Não sou cliente</h4>
Ao criar uma conta, você concorda com nossos termos de uso, condições, política de privacidade e que tem pelo menos 16 anos de idade.
            <a class="btn btn-default btn-default-custom" href="{{ route('novaConta.index') }}">Criar conta</a>
          </div>
        </div>

      </div>

      <div>

    </div>


        {!! Form::close() !!}
  
  <div class="clearfix"></div>
  
       <div class="row text-center">
          <legend class="legenda">Fazer login com:</legend>
          <a class="icons-socials" href="#"><img src="{{ url('storage/imagens/icons/facebook-holly.png') }}"></a>
          <a class="icons-socials" href="#"><img src="{{ url('storage/imagens/icons/twitter.png') }}"></a>
        </div>
  
  </div>
@endsection


