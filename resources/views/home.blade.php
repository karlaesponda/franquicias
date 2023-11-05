
@extends('layouts.base')
@section('styles')
<!-- 
<link rel="stylesheet" href="{{asset('css/login/css/login.css')}}">
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        
        <link href="{{asset('css/show/css/styles.css')}}" rel="stylesheet" />
        -->
@endsection

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Franquicias</h4>
                            <h6>Plataforma para vender o comprar Franquicias</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Conoce más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                            <img src="{{ asset('img/slide-01.jpg') }}" alt="Mi Foto">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                            <img src="{{ asset('img/slide-02.jpg') }}" alt="Mi Foto">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                            <img src="{{ asset('img/slide-02.jpg') }}" alt="Mi Foto">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Sobre nosotros</h6>
                            <h2>Empresa %100 yucateca</h2>
                        </div>
                        <p>Somos una empresa originaria de Mérida Yucatán que te brindará toda la información y los medios necesarios para contactar franquicias y llevar a cabo tu sueño de poner un negocio.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/imagen1.jpg') }}" alt="Mi Foto">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('img/imagen2.jpg') }}" alt="Mi Foto">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('img/imagen3.jpg') }}" alt="Mi Foto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="{{ asset('img/dauroweb-logo.png') }}" alt="Mi Foto">
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Franquicias</h6>
                        <h2>Catálogo de franquicias disponibles</h2>
                    </div>
                </div> 
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class='info'>
                              <h1 class='title'>Eladio´s Bar</h1>
                              <p class='description'>Botanas, platillos y bebidas con la mejor atención</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contacto<i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class='info'>
                              <h1 class='title'>Las Adoraditas</h1>
                              <p class='description'>Las auténticas Adoraditas de Mérida Yucatán</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contacto<i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class='info'>
                              <h1 class='title'>Angry Angus</h1>
                              <p class='description'>Hamburguesas de la más alta calidad con carne 100% de res</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contacto<i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class='info'>
                              <h1 class='title'>Mítica</h1>
                              <p class='description'>Mítica es un concepto de hamburguesería fast-casual</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Contacto<i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class='info'>
                              <h1 class='title'>El Colon</h1>
                              <p class='description'>Heladería más famosa con 100 años de antigüedad</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class='info'>
                              <h1 class='title'>Klassic Cake</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
    
    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Experiencias</h6>
                        <h2>Opiniones sobre nuestros usuarios</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                            <img src="{{ asset('img/persona.jpg') }}" alt="Mi Foto">
                        </div>
                        <div class="down-content">
                            <h4>Karla Esponda</h4>
                            <span>"Gracias a esta plataforma abrí un local de mi restaurante favorito"</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                            <img src="{{ asset('img/persona1.jpg') }}" alt="Mi Foto">
                        </div>
                        <div class="down-content">
                            <h4>Mónica Méndez</h4>
                            <span>"Es la mejor plataforma para expandir tu negocio"</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            </ul>
                            <img src="{{ asset('img/chefs-03.jpg') }}" alt="Mi Foto">
                        </div>
                        <div class="down-content">
                            <h4>Peter Perkson</h4>
                            <span>"Gracias a los nuevos locales de franquicias logré conseguir trabajo"</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Registrate</h6>
                            <h2>Crea un usuario para obtener información completa...</h2>
                        </div>
                        <p>si quieres vender o comprar una franquicia primero debes registrarte para acceder a todas las funcionalidades de la plataforma</p>
                        <p>si necesitas ayuda o más información sobre el proceso, contáctanos</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Número de teléfono</h4>
                                    <span><a href="#">000-000-000</a><br><a href="#">000-000-000</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Email</h4>
                                    <span><a href="#">contactanos@dauroweb.com</a><br><a href="#">contactanos2@dauroweb.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Ingresa los siguientes datos</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="number-guests" name="number-guests" id="number-guests">
                                    <option value="number-guests">Rol</option>
                                    <option name="1" id="1">Venta</option>
                                    <option name="2" id="2">Compra</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <p> </p>
                            </div>

                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Registrarse</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
@endsection


<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($franquicias as $franquicia)
                        {{$franquicia->title}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

-->