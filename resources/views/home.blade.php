
@extends('layouts.base')
@section('styles')
 
    <link rel="stylesheet" href="{{asset('css/login/css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/templatemo-klassy-cafe.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/flex-slider.css') }}">
    <link rel="stylesheet" href="{{asset('css/base/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/base/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/slick-theme.css') }}">

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
                                <a href="{{ route('sobre_nosotros.index')}}">Conoce más</a>
                                
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
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>

@endsection
<script src="{{ asset('js/custom.js')}}"></script>

<script src="{{ asset('js/owl-carousel.js')}}"></script>
<script src="{{ asset('js/accordions.js')}}"></script>
<script src="{{ asset('js/datepicker.js')}}"></script>
<script src="{{ asset('js/scrollreveal.min.js')}}"></script>
<script src="{{ asset('js/waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('js/imgfix.min.js')}}"></script> 
<script src="{{ asset('js/slick.js')}}"></script> 
<script src="{{ asset('js/lightbox.js')}}"></script> 
<script src="{{ asset('js/isotope.js')}}"></script> 

<!-- script franquicia -->
<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>         
<script src="{{ asset('js/jquery.singlePageNav.min.js')}}"></script>  
<script src="{{ asset('js/parallax.min.js')}}"></script>    
<script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>     
<script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>          
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script> 
<script src="{{ asset('js/slick.min.js')}}"></script>             
<script src="{{ asset('js/templatemo-script.js')}}"></script>

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