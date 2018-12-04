<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HOLLY</title>
  
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- Use Font Awesome's  -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<!-- css geral -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<!-- Só carrega esse estilo se for a pagina comprar.php -->
		<link rel="stylesheet" href="{{ asset('css/compra-style.css') }}">
		<!-- Include the above in your HEAD tag  -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
  <body>

    <header>
      @section('menu')
        <nav class="navbar navbar-default navbar-custom">
            <div class="flipkart-navbar">
                <div class="container">
                    <div class="row row1">
                        <ul class="largenav pull-right">
                            <li class="upper-links"><a class="links" href="{{ url('holly') }}">Home</a></li>
                            <li class="upper-links"><a class="links" href="#">Sobre</a></li>
                            <li class="upper-links"><a class="links" href="#">Contato</a></li>
                            <li class="upper-links"><a class="links" href="#"></a></li>
                            
                                @guest
                                <li class="upper-links">
                                    <a  href="#">
                                        <svg class="" width="16px" height="12px" style="overflow: visible;">
                                            <i class="fas fa-1x fa-bell" style="color:#fff;"></i>
                                        </svg>
                                    </a>
                                </li>
                              <li class="upper-links dropdown"><a class="nav-link links" href="{{ route('login') }}">{{ __('Login') }}</a>
                                
                                <ul class="dropdown-menu">
                                    <li class="profile-li">
                                        @if (Route::has('register'))
                                          <a class="nav-link links" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                                        @endif
                                      </li>
                                    </ul>
                                
                            @else
                            <li class="upper-links"><a class="links" href="#">Meus dados</a></li>
                            <li class="upper-links"><a class="links" href="#">Meus pedidos</a></li>
                            <li class="upper-links"><a class="links" href="#">Lista de desejos</a></li>
                            <li class="upper-links">
                                <a  href="#">
                                    <svg class="" width="16px" height="12px" style="overflow: visible;">
                                        <i class="fas fa-1x fa-bell" style="color:#fff;"></i>
                                    </svg>
                                </a>
                            </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle links" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item links" href="{{ route('sair') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('sair') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                                    
                                </li>
      
                        </ul>
                    </div>
                    <div class="row row2">
                        <div class="col-sm-2">
                            <h2 style="margin:0px; text-align:center;">
                            <span class="smallnav men"><a href="{{ route('index') }}" class="logo">HOLLY</a></span>
                              <span class="smallnav menu" onclick="openNav()">☰</span>
                            </h2>
                            <h1 style="margin:0px;">
                            <span class="largenav logo"><a href="{{ route('index') }}" class="logo">HOLLY</a></span>
                            </h1>
                        </div>
                        <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-10">
                            <div class="row">
                            <form action="{{ url('holly/pesquisa')}}" method="POST">
                                    @csrf
                                        <input class="flipkart-navbar-input col-xs-10" type="" placeholder="Digite o nome do produto..." name="criterio">
                                        <button type="submit" class="flipkart-navbar-button col-md-1 col-xs-2">
                                            <svg width="15px" height="15px">
                                                <i class="fas fa-search"></i>
                                            </svg>
                                        </button>
                                </form>
                            </div>
                        </div>
                        <div class="cart largenav col-sm-2">
                        <a class="cart-button" href="{{ route('carrinho.index')}}">
                                <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                                  <i class="fas fa-1x fa-shopping-cart"></i>
                                </svg>
                                <span class="item-number ">0</span>
                            </a>
                        </div>
      
                    </div>
                </div>
            </div>
            <!-- MOBILE MENU  -->
            <div id="mySidenav" class="sidenav">
                <div class="container" style="background-color: #000; padding-top: 10px;">
                    <p class="sidenav-heading logo">HOLLY</p>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                </div>
                <ul class="">
                    @guest
                        <a class="nav-link links" href="{{ route('login') }}">{{ __('Login') }}</a>
                      @if (Route::has('register'))
                        <a class="nav-link links" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                      @endif
                      @else
                      <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle links" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item links" href="{{ route('sair') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('sair') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                            <a class="links" href="#">Meus dados</a>
                            <a class="links" href="#">Meus pedidos</a>
                            <a class="links" href="#">Lista de desejos</a>

                            
                      @endguest
                      <li>
                        <hr />
                          <span style="color:#000; text-transform: uppercase;">Categorias</span>
                          <hr />
                      </li>
                        <li>
                        <form action="{{ url('holly/categoria')}}" method="POST">
                            @csrf
                                <button type="submit" 
                                 style="text-transform: uppercase;color:#000;
                                background:#fff;border:none;" name="camiseta" value="camiseta">CAMISETAS</button>
                            </form>
                        </li>

            <li>
                    <form action="{{ url('holly/categoria')}}" method="POST">
                        @csrf
                            <button type="submit" 
                             style="text-transform: uppercase;color:#000;
                            background:#fff;border:none;" name="camiseta" value="blusa">BLUSA</button>
                        </form>
            </li>
      
      
            <li>
                    <form action="{{ url('holly/categoria')}}" method="POST">
                        @csrf
                            <button type="submit" 
                            style="text-transform: uppercase;color:#000;
                            background:#fff;border:none;" name="camiseta" value="regata">REGATA</button>
                        </form>
            </li>
      
      
            <li>
                    <form action="{{ url('holly/categoria')}}" method="POST">
                        @csrf
                            <button type="submit" 
                             style="text-transform: uppercase;color:#000;
                            background:#fff;border:none;" name="camiseta" value="lagging">LEGGING</button>
                        </form>
            </li>
      
            <li>
                    <form action="{{ url('holly/categoria')}}" method="POST">
                        @csrf
                            <button type="submit" 
                             style="text-transform: uppercase;color:#000;
                            background:#fff;border:none;" name="camiseta" value="vestido">VESTIDOS</button>
                        </form>
            </li>
      
      
            <li>
                    <form action="{{ url('holly/categoria')}}" method="POST">
                        @csrf
                            <button type="submit" 
                             style="text-transform: uppercase;color:#000;
                            background:#fff;border:none;" name="camiseta" value="outlet">OUTLET</button>
                        </form>
            </li>
            
      
          </ul>
      
            </div>

            <!-- MENU DESCK -->
        <div class="container">
          <ul class="nav navbar-nav nav-custom">
                        <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 um">
                        <form action="{{ url('holly/categoria')}}" method="POST">
                            @csrf
                                <button type="submit" 
                                class="links text-center" style="text-transform: uppercase;color:#000;
                                background:#fff;border:none;" name="camiseta" value="camiseta">CAMISETAS</button>
                            </form>
                        </li>

            <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 dois">
                    <form action="{{ url('holly/categoria')}}" method="POST">
                        @csrf
                            <button type="submit" 
                            class="links text-center" style="text-transform: uppercase;color:#000;
                            background:#fff;border:none;" name="camiseta" value="blusa">BLUSA</button>
                        </form>
            </li>
      
      
            <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 tres">
                    <form action="{{ url('holly/categoria')}}" method="POST">
                        @csrf
                            <button type="submit" 
                            class="links text-center" style="text-transform: uppercase;color:#000;
                            background:#fff;border:none;" name="camiseta" value="regata">REGATA</button>
                        </form>
            </li>
      
      
            <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 quatro">
                    <form action="{{ url('holly/categoria')}}" method="POST">
                        @csrf
                            <button type="submit" 
                            class="links text-center" style="text-transform: uppercase;color:#000;
                            background:#fff;border:none;" name="camiseta" value="lagging">LEGGING</button>
                        </form>
            </li>
      
            <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 cinco">
                    <form action="{{ url('holly/categoria')}}" method="POST">
                        @csrf
                            <button type="submit" 
                            class="links text-center" style="text-transform: uppercase;color:#000;
                            background:#fff;border:none;" name="camiseta" value="vestido">VESTIDOS</button>
                        </form>
            </li>
      
      
            <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 six">
                    <form action="{{ url('holly/categoria')}}" method="POST">
                        @csrf
                            <button type="submit" 
                            class="links text-center" style="text-transform: uppercase;color:#000;
                            background:#fff;border:none;" name="camiseta" value="outlet">OUTLET</button>
                        </form>
            </li>
            <hr />
      
          </ul>
        </div>
      </nav>
     @show
    </header>
    
    <main>
        <div class="header">
          </div>
      @yield('conteudo')
    </main> 
    
@section('rodape')
<footer class="container-fluid" style="margin-top:20px;">


        <div class="row">
                <div class="lg-col-4 col-md-4 col-sm-12 col-xm-12 text-center">
                        <div class="">
                            <span class="title-footer">Categorias</span>
                        </div>
                      <ul class="list-footer">
                          <li><a href="#">Legging</a></li>
                          <li><a href="#">Vestidos</a></li>
                          <li><a href="#">Blusa</a></li>
                          <li><a href="#">Camisetas</a></li>
                          <li><a href="#">Regatas</a></li>
                          <li><a href="#">Promoções</a></li>
                        </ul>
                      </div>
                
                      <div class="lg-col-4 col-md-4 col-sm-12 col-xm-12 text-center">
                        <div class="">
                            <span class="title-footer">CONTEÚDO</span>
                        </div>
                        <ul class="list-footer">
                          <li><a href="#">Fale Conosco</a></li>
                        <li><a href="{{ route('duvidas') }}">Faq</a></li>
                       
                          <li><a href="#">Política de privacidade</a></li>
                          <li><a href="#">Política de trocas</a></li>
                          <li><a href="#">Sobre nós</a></li>
                        </ul>
                      </div>
                
                      <div class="lg-col-4 col-md-4 col-sm-12 col-xm-12 text-center">
                        <div class="">
                            <span class="title-footer">social</span>
                        </div>
                        <ul class="list-footer">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Linkdin</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">whatsapp</a></li>
                        </ul>
                      </div>       
        </div>
                <div class="row">
                        <div class="coi-lg-6 col-md-6 col-sm-12">
                          <div class="" id="forma-pagamento" style="margin-bottom: 30px;">
                            <span class="title-footer">Pague Com</span>
                            <img class="img-responsive" src="{{ url('imagens/site/forma de pagamento.png') }}"width="500">
                          </div>
                        </div>
                        <div class="coi-lg-6 col-md-6 col-sm-12">
                                <div class="" style="margin-bottom: 30px;">
                                  <span class="title-footer text-center">SELOS</span>
                                  <img class="img-responsive" src="{{ url('imagens/site/internet-segura.jpg') }}" width="500">
                                </div>
                              </div>
                      </div>
                      <div class="text-center copy" >
                            <a href="#">© 2018 Company HOLLY.</a></li>
                        </div>

  </footer>
 
      <script src="{{ asset('js/script.js') }}"></script>
  @show
  </body>
  </html>