@extends('layouts.temaAdmin')
@section('conteudo')
<h1 class="text-center">Cadastra Categorias</h1>
<div class="container">
  <!-- Validação -->
  @if ( $errors->any())
    <div class="aler alert-danger">
      <ul>
        @foreach ($errors->all() as $erros)
      <li>{{ $erros }}</li> 
        @endforeach

      </ul>
    </div>
  @endif

  @if(  session('sucesso')  )
    <div class="alert alert-success" role="alert">
        {{ session('sucesso') }}
    </div>
   
  @endif
  @if(  session('erro')  )
  <div class="alert alert-success" role="alert">
      {{ session('erro') }}
  </div>
 
  @endif

  @if(  session('editado')  )
    <div class="alert alert-info" role="alert">
        {{ session('editado') }}
    </div>
  @endif

  @if(  session('erroedit')  )
  <div class="alert alert-info" role="alert">
      {{ session('erroedit') }}
  </div>
  @endif

  @if(  session('deletado')  )
  <div class="alert alert-warning" role="alert">
      {{ session('deletado') }}
  </div>
  @endif
<!-- Fim Validação -->
<!-- Form -->
    <form action="{{ route('produtos.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
          <label for="nome">Nome da Categoria*(obrigatório)</label>
          <input name="nome" type="text" class="form-control nome-list"  placeholder="Nome da Categoria">
        </div>
      
        <div class="text-center">
            <button type="submit" class="btn btn-success nome-list">Cadastrar</button>
          </div> 
        
      </form>
      <h1 class="text-center">Lista de Categorias</h1>
    {{-- <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" class="nome-list">id Produtos</th>
            <th scope="col" class="nome-list">Nome</th>
            <th scope="col" class="nome-list">Categoria</th>
            <th scope="col" class="nome-list">Descrição</th>
            <th scope="col" class="nome-list">preço R$</th>
            <th scope="col" class="nome-list">Ações</th>
          </tr>
        </thead>
       
       <tbody>
          @foreach ($produtos as $produto)
          <tr>
          <th scope="row">{{ $produto->id }}</th>

              <td class="nome-list">{{ $produto->nome }}</td>
              <td class="nome-list">{{ $produto->categoria }}</td>
              <td class="nome-list">{{ $produto->descricao }}</td>
              <td class="nome-list">{{ $produto->preco }}</td>
          <td><form action="{{ route('produtos.destroy',$produto->id) }}" method="POST">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
                <button type="submit" class="btn btn-danger nome-list" onclick=" return confirm('Tem certeza que deseja remover o cliente?')" >Deletar</button>
              </form></td>
              <td><a href="{{ route('produtos.edit',$produto->id) }}" class="btn btn-warning nome-list">Editar</a></td>
            </tr>
          @endforeach
          
        </tbody> 
      </table> --}}
</div>
@endsection