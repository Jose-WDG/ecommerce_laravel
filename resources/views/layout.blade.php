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
                            <li class="upper-links"><a class="links" href="#">Revenda</a></li>
                            <li class="upper-links"><a class="links" href="#">Afiliados</a></li>
                            <li class="upper-links"><a class="links" href="#">Informações</a></li>
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
                                <input class="flipkart-navbar-input col-xs-10" type="" placeholder="Digite o nome do produto..." name="">
                                <button class="flipkart-navbar-button col-md-1 col-xs-2">
                                    <svg width="15px" height="15px">
                                        <i class="fas fa-search"></i>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="cart largenav col-sm-2">
                            <a class="cart-button">
                                <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                                  <i class="fas fa-1x fa-shopping-cart"></i>
                                </svg> Link
                                <span class="item-number ">0</span>
                            </a>
                        </div>
      
                    </div>
                </div>
            </div>
            <div id="mySidenav" class="sidenav">
                <div class="container" style="background-color: #000; padding-top: 10px;">
                    <span class="sidenav-heading logo">HOLLY</span>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                </div>
                <a href="#">masculino</a>
                <a href="#">feminino</a>
                <a href="#">infantil</a>
                <a href="#">esporte</a>
                <a href="#">inspiracao</a>
                  <a href="#">outlet</a>
      
            </div>
        <div class="container">
          <ul class="nav navbar-nav nav-custom">
      
            <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 um">
              <a class="links text-center" href="login.php" style="text-transform: uppercase;">MASCULINO</a>
                <ul class="dropdown-menu">
                    <li class="profile-li"><a class="profile-links" href="#">link</a></li>
                </ul>
            </li>
      
      
            <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 dois">
              <a class="links text-center" href="login.php" style="text-transform: uppercase;">FEMININO</a>
                <ul class="dropdown-menu">
                    <li class="profile-li"><a class="profile-links" href="#">link</a></li>
                </ul>
            </li>
      
      
            <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 tres">
              <a class="links text-center" href="login.php" style="text-transform: uppercase;">INFANTIL</a>
                <ul class="dropdown-menu">
                    <li class="profile-li"><a class="profile-links" href="#">link</a></li>
                </ul>
            </li>
      
      
            <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 quatro">
              <a class="links text-center" href="login.php" style="text-transform: uppercase;">ESPORTE</a>
                <ul class="dropdown-menu">
                    <li class="profile-li"><a class="profile-links" href="#">link</a></li>
                </ul>
            </li>
      
            <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 cinco">
              <a class="links text-center" href="login.php" style="text-transform: uppercase;">INSPIRAÇÃO</a>
                <ul class="dropdown-menu">
                    <li class="profile-li"><a class="profile-links" href="#">link</a></li>
                </ul>
            </li>
      
      
            <li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 six">
              <a class="links text-center" href="login.php" style="text-transform: uppercase;">OUTLET</a>
                <ul class="dropdown-menu">
                    <li class="profile-li"><a class="profile-links" href="#">link</a></li>
                </ul>
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
<footer>
    <div class="container-fluid">
      <div class="container"><!-- CONTAINER -->
        <div class="row">
        <div class="title-lancamento text-center"><i class="fab fa-2x fa-instagram"></i>  SIGA NOSSO <a href="#">INSTAGRAM@HOLLY</a></div>
          <h2 class="text-center">embed do instagram</h2>
        </div>
      </div><!-- FIM  CONTAINER -->
  
    <section class="home-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="single">
              <h2>RECEBA NOSSAS OFERTAS POR E-MAIL</h2>
            <div class="input-group">
              <input type="email" class="form-control" placeholder="E-mail">
              <span class="input-group-btn">
              <button class="btn btn-theme" type="submit">Subscribe</button>
              </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
        <div class="lg-col-3 col-md-3 col-sm-12 col-xm-12">
          <div class="">
            <img class="img-responsive" src="{{ url('storage/imagens/site/HOLLY-LOGO.png') }}">
            <!-- Cololar texto sobre a loja -->
          </div>
        </div>
  
        <div class="lg-col-3 col-md-3 col-sm-12 col-xm-12">
          <div class="">
              <span class="title-footer">Categorias</span>
          </div>
        <ul class="list-footer">
            <li><a href="#">Legging</a></li>
            <li><a href="#">COLLECTIONS</a></li>
            <li><a href="#">Decoração & Arte</a></li>
            <li><a href="#">Vestidos</a></li>
            <li><a href="#">Agasalhos</a></li>
            <li><a href="#">Camisetas</a></li>
            <li><a href="#">Baby Look Long</a></li>
            <li><a href="#">Regatas</a></li>
            <li><a href="#">PROMOÇÕES</a></li>
          </ul>
        </div>
  
        <div class="lg-col-3 col-md-3 col-sm-12 col-xm-12">
          <div class="">
              <span class="title-footer">CONTEÚDO</span>
          </div>
          <ul class="list-footer">
            <li><a href="#">Fale Conosco</a></li>
          <li><a href="{{ route('duvidas') }}">Faq</a></li>
            <li><a href="#">Formas de pagamentos</a></li>
            <li><a href="#">Frete</a></li>
            <li><a href="#">Na estrada dos estilosos!</a></li>
            <li><a href="#">Política de privacidade</a></li>
            <li><a href="#">Política de trocas</a></li>
            <li><a href="#">Prazos de entrega</a></li>
            <li><a href="#">Sobre nós</a></li>
            <li><a href="#">Tabela de medidas</a></li>
            <li><a href="#">Vídeos</a></li>
          </ul>
        </div>
  
        <div class="lg-col-3 col-md-3 col-sm-12 col-xm-12">
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
  
          <div class="lg-col-6 col-md-6 col-sm-12 col-xm-12">
            <div class="coi-lg-8 col-md-8">
              <div class="" style="margin-bottom: 30px;">
                <span class="title-footer">Pague Com</span>
                <img class="img-responsive" src="{{ url('storage/imagens/site/forma de pagamento.png') }}">
              </div>
            </div>
          </div>
  
          <div class="lg-col-6 col-md-6 col-sm-12 col-xm-12">
            <div class="coi-lg-8 col-md-8">
              <div class="" style="margin-bottom: 30px;">
                <span class="title-footer">SELOS</span>
                <img class="img-responsive" src="{{ url('storage/imagens/site/internet-segura.jpg') }}">
              </div>
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