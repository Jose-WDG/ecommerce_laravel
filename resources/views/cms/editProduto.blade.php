<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastrar Produtos</title>
  	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- Use Font Awesome's  -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<!-- css geral -->
		<link rel="stylesheet" href="{{ url('css/style.css') }}">
		<!-- Só carrega esse estilo se for a pagina comprar.php -->
		<link rel="stylesheet" href="{{ url('css/compra-style.css') }}">
		<!-- Include the above in your HEAD tag  -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
<h1 class="text-center">Editar produtos</h1>
<div class="container">
        @if ($errors->all())
        <div class="alert alert-danger" role="alert">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
    <form action="{{ route('produtos.update',$produto->id) }}" enctype="multipart/form-data" method="POST">
        
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
          <label for="nome">Nome do Produto</label>
          <input name="nome" type="text" class="form-control"  value="{{ $produto->nome }}">
        </div>
      
        <div class="form-group">
            <label for="descricao">Descrição do produto</label>
            <textarea class="form-control"  name="descricao" rows="3" >{{ $produto->descricao }}</textarea>
        </div>
        <div class="form-group">
            <label for="img-frente">img frente</label>
            <input name="img-frente" type="file" class="form-control" >
          </div>
          <div class="form-group">
              <label for="img-costa">img costas</label>
              <input name="img-costa" type="file" class="form-control" >
            </div>
        <div class="form-group">
            <label for="preco">preço em R$</label>
            <input type="number" class="form-control" name="preco" value="{{ $produto->preco }}">
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-success">Salvar</button>
          </div> 
        
      </form>
    </div>
</body>
</html>