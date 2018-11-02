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
    <h1 class="text-center">Cadastra Produtos</h1>
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
     

        <form action="{{ route('produtos.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
              <label for="nome">Nome do Produto</label>
              <input name="nome" type="text" class="form-control"  placeholder="Nome do produto">
            </div>
          
            <div class="form-group">
                <label for="descricao">Descrição do produto</label>
                <textarea class="form-control"  name="descricao" rows="3"></textarea>

            </div>
             <div class="form-group">
              <label for="imgFrente">img frente</label>
              <input name="imgFrente" type="file" class="form-control" >
            </div>
            <div class="form-group">
                <label for="imgCosta">img costas</label>
                <input name="imgCosta" type="file" class="form-control" >
              </div>
            <div class="form-group">
                <label for="preco">preço em R$</label>
                <input type="number" class="form-control" name="preco">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Cadastrar</button>
              </div> 
            
          </form>
          <h1 class="text-center">Lista de Produtos</h1>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">id Produtos</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">preço R$</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($produtos as $produto)
              <tr>
              <th scope="row">{{ $produto->id }}</th>
  
                  <td>{{ $produto->nome }}</td>
                  <td>{{ $produto->descricao }}</td>
                  <td>{{ $produto->preco }}</td>
              <td><form action="{{ route('produtos.destroy',$produto->id) }}" method="POST">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger" onclick=" return confirm('Tem certeza que deseja remover o cliente?')">Deletar</button>
                  </form></td>
                  <td><a href="{{ route('produtos.edit',$produto->id) }}" class="btn btn-warning">Editar</a></td>
                </tr>
              @endforeach
              
            </tbody>
          </table>
    </div>
    

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>