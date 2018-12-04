<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Include the above in your HEAD tag -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
   	<!-- css geral -->
		<link rel="stylesheet" href="{{ url('css/style.css') }}">
		<!-- Só carrega esse estilo se for a pagina comprar.php -->
		<link rel="stylesheet" href="{{ url('css/compra-style.css') }}">
		<!-- Include the above in your HEAD tag  -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <title>Gerenciamento do ecommerce</title>
</head>
<body>
  @section('menu')
  <nav class="nav-side-menu">
      <div class="brand">HOLLY</div>
      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    
          <div class="menu-list">
    
              <ul id="menu-content" class="menu-content collapse out">
                  <li>
                    <a href="{{ route('dashboard.index') }}">
                    <i class="fa fa-dashboard fa-lg"></i>Dashboard
                    </a>
                  </li>
  
                  <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                    <a href="#"><i class="fa fa-gift fa-lg"></i> Personalizar <span class="arrow"></span></a>
                  </li>
                  <ul class="sub-menu collapse" id="products">
                      <li class="active"><a href="#">CSS3 Animation</a></li>
                      <li><a href="#">General</a></li>
                      <li><a href="#">Buttons</a></li>
                      <li><a href="#">Tabs & Accordions</a></li>
                      <li><a href="#">Typography</a></li>
                      <li><a href="#">FontAwesome</a></li>
                      <li><a href="#">Slider</a></li>
                      <li><a href="#">Panels</a></li>
                      <li><a href="#">Widgets</a></li>
                      <li><a href="#">Bootstrap Model</a></li>
                  </ul>
  
  
                  <li data-toggle="collapse" data-target="#service" class="collapsed">
                    <a href="#"><i class="fa fa-globe fa-lg"></i> Relatório <span class="arrow"></span></a>
                  </li>  
                  <ul class="sub-menu collapse" id="service">
                    <li>Produtos</li>
                    <li>Categorias</li>
                    <li>holly</li>
                  </ul>
  
  
                  <li data-toggle="collapse" data-target="#new" class="collapsed">
                    <a href="#"><i class="fa fa-car fa-lg"></i> Cadastrar <span class="arrow"></span></a>
                  </li>
                  <ul class="sub-menu collapse" id="new">
                  <a class="link-menu-admin" href="{{ route('categoria.index') }}"><li> Categorias</li></a>
                  <a class="link-menu-admin" href="{{ route('produtos.index') }}"><li >Produtos</li></a>
                    <li>Promoções</li>
                  </ul>
  
  
                   <li>
                    <a href="#">
                    <i class="fa fa-user fa-lg"></i> Profile
                    </a>
                    </li>
  
                   <li>
                    <a href="#">
                    <i class="fa fa-users fa-lg"></i> Users
                    </a>
                  </li>
              </ul>
       </div>
      </nav>
      @show
  
    <div class="conainter-admin">
      @yield('conteudo')
    </div>

    @section('rodape')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    </body>
     @show

</body>
</html>