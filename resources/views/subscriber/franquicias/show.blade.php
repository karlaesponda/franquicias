@extends('layouts.base')

@section('content')

<div class="container-fluid">
        <div class="row">
            <!-- Leftside bar -->
            <div id="tm-sidebar" class="tm-sidebar"> 
                <nav class="tm-nav">
                    <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div>
                        <br>
                        <br>
                    </div>
                    <div>
                        <div class="tm-brand-box">
                            <h1 class="tm-brand">{{ $franquicia->nombre_restaurante }}</h1>
                            
                        </div>                
                        <ul id="tm-main-nav">
                            <li class="nav-item">                                
                                <a href="#home" class="nav-link current">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-home nav-icon"></i>
                                    Sobre nosotros
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#modelo" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-briefcase nav-icon"></i>
                                    Modelo de negocio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-money-bill nav-icon"></i>
                                    Información
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#soporte" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-clipboard nav-icon"></i>
                                    Soporte y entrenamiento
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#resenas" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-money-bill nav-icon"></i>
                                    Reseñas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-envelope nav-icon"></i>
                                    Contacto
                                </a>
                            </li>
                        </ul>
                    </div>
                    <footer class="mb-3 tm-mt-100">
                        
                    </footer>
                </nav>
            </div>
            

                <!-- Home section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/img-01.jpg"></div>                   
                    <section id="home" class="tm-section">
                        <br>
                        <br>
                        <br>
                        <h2 class="tm-text-primary">{{$franquicia->nombre_restaurante}}</h2>
                        <hr class="mb-5">
                        <div class="row">
                        
                        <br>
                        <h4>
                        Historia
                        </h4>
                        <p>{{$franquicia->historia}}</p>

                        <h4>
                        Misión
                        </h4>
                        <p>{{$franquicia->mision}}</p>
                        <h4>
                        Visión
                        </h4>
                        <p>{{$franquicia->vision}}</p>

                        <p>{{$franquicia->descripcion}}</p>
                             <!--<img src="img/gallery/tn/portrait-01.jpg" alt="Image"/> -->   
                            <!--<img src="img/gallery/tn/portrait-01.jpg" alt="Image"/> -->                             
                    </div>
                    </section>
                </div>
                <!-- Modelo de negocio section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/hamburguesas.jpg"></div>                   
                    <section id="modelo" class="tm-section">
                        <h2 class="tm-text-primary">Modelo de negocio</h2>
                        <hr class="mb-5">
                        <div class="row">
                        <h4>
                        Estándar de calidad 
                        </h4>
                        <p>{{$franquicia->estandar_calidad}}</p>
                        <h4>
                        Mercado meta
                        </h4>
                        <p>
                            {{$franquicia->mercado_meta}}
                        </p>
                        <h4>
                        Menú
                        </h4>
                        <p>
                            {{$franquicia->menu}}
                            <br>
                            <br>
                            
                            <a href="{{ asset('storage/' . $franquicia->menu) }}" download>
                                <button class="boton-descarga" type="button">Descargar Menú</button>
                            </a>

                        </p>

                            <img src="img/menu.png" alt="Image"/>                                 
                            </div>
                            

                    </section>
                </div>
                <!-- Informacion section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/fuego.jpg"></div>
                    <section id="about" class="tm-section">
                        <h2 class="tm-text-primary">Información</h2>
                        <hr class="mb-5">
                        <div class="row tm-row-about">
                            <div class="tm-col-about tm-col-about-l">
                                <p class="mb-4">
                                Para brindar transparencia y demostrar el compromiso con nuestros clientes y colaboradores, puedes
                                conocer detalles sobre nuestros costos de ingredientes, presupuesto operativo o cualquier otro 
                                aspecto financiero relacionado con nuestro modelo operativo.
                                </p>
                                <p class="mb-4">
                                Para acceder a este valioso recurso, simplemente haz clic en el botón "Descargar" a continuación. 
                                </p>
                                <p>
                                {{$franquicia->inf_financiera}}
                                </p>
                                
                                <a href="{{ asset('storage/' . $franquicia->inf_financiera) }}" download>
                                    <button class="boton-descarga" type="button">Descargar Información Financiera</button>
                                </a>
                                <br>
                                <br> 
                            </div>
                            <div class="tm-col-about tm-col-about-r">
                                <img src="img/logo1.jpg" alt="Image" class="img-fluid mb-5 tm-img-about">
                                <p>
                                *agregar una descripcion*
                                </p>
                            </div>
                        </div>
                    </section>
                    </div>
                </div>
                <!-- Soporte section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/img-04.jpg"></div>
                    <div id="soporte" class="tm-section">
                        <h2 class="tm-text-primary">Soporte y entrenamiento</h2>
                        <hr class="mb-5">
                        <div class="row">
                        <h3>Soporte</h3>
                        <p>
                            {{$franquicia->soporte}}
                        </p>
                        <h4>- Asesoramiento en Ubicación:</h4>
                        <p>
                        *Poner campo para que describan si proporcionan esta información*
                        </p>
                        <h4>- Diseño de Tienda y Construcción:</h4>
                        <p>
                        *Poner campo para que describan si proporcionan esta información*
                        </p>
                        <h4>- Marketing y Publicidad: </h4>
                        <p>
                        *Poner campo para que describan si proporcionan esta información*
                        <br>
                        <br>
                        <br>
                        </p>

                        <h3>Programa de Entrenamiento</h3>
                        <p>
                            {{$franquicia->entrenamiento}}
                        </p>
                        <h4>- Preparación de Alimentos:</h4>
                        <p>
                        *Poner campo para que describan si proporcionan esta información*
                        </p>
                        <h4>- Servicio al Cliente:</h4>
                        <p>
                        *Poner campo para que describan si proporcionan esta información*
                        </p>                        
                        <h4>- Gestión de Negocios</h4>
                        <p>
                        *Poner campo para que describan si proporcionan esta información*
                        </p>                        
                        <h4>- Tecnología y Sistemas: </h4>
                        <p>
                        *Poner campo para que describan si proporcionan esta información*
                        </p>                        
                        </div>
                    </div>
                </div>
                <!-- Informacion section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/fuego.jpg"></div>
                    <section id="about" class="tm-section">
                        <h2 class="tm-text-primary">Información</h2>
                        <hr class="mb-5">
                        <div class="row tm-row-about">
                            <div class="tm-col-about tm-col-about-l">
                            @if (Auth::check())
                                @include('subscriber.comments.create')
                            @else
                                <p>Para comentar debe iniciar sesión</p>
                            @endif
                            
                            </div>
                            @if (session('success-error'))
                            <div class="text-danger text-center">
                                <p>{{session('success-error')}}</p>
                            </div>    
                            @endif

                            @include('subscriber.comments.show')
                        </div>
                    </section>
                    </div>
                </div>
                <!-- Reseñas section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/fuego.jpg"></div>
                    <section id="resenas" class="tm-section">
                        <h2 class="tm-text-primary">Reseñas</h2>
                        <hr class="mb-5">
                        <div class="mt-5">
                            <div class="tm-carousel">
                                <div class="tm-carousel-item">
                                    <figure class="effect-honey mb-4">
                                        <img src="img/about-01.jpg" alt="Featured Item">
                                        <figcaption>
                                            <ul class="tm-social">
                                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">Gabriel Mora</h3>
                                        <p>"Si quieres comprar una franquicia y abrir tu propio restaurante, Mítica es la mejor opción"</p>
                                        <h4 class="tm-text-secondary tm-about-subtitle">Comprador</h4>
                                        <i class="fas fa-star nav-icon"></i>
                                        <i class="fas fa-star nav-icon"></i>
                                    </div>
                                </div>
                                
                                <div class="tm-carousel-item">
                                    <figure class="effect-honey mb-4">
                                        <img src="img/about-02.jpg" alt="Featured Item">
                                        <figcaption>
                                            <ul class="tm-social">
                                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">Paula Guzmán</h3>
                                        <p>"Es una gran franquicia y el franquiciador brinda un gran soporte y entrenamiento"</p>
                                        <h4 class="tm-text-secondary tm-about-subtitle">Comprador</h4>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <figure class="effect-honey mb-4">
                                        <img src="img/about-03.jpg" alt="Featured Item">
                                        <figcaption>
                                            <ul class="tm-social">
                                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">David Rodriguez</h3>
                                        <p>"Excelente, te guían en todo el proceso"</p>
                                        <h4 class="tm-text-secondary tm-about-subtitle">Comprador</h4>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <figure class="effect-honey mb-4">
                                        <img src="img/about-01.jpg" alt="Featured Item">
                                        <figcaption>
                                            <ul class="tm-social">
                                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">Manuel Carrillo</h3>
                                        <p>"Es una gran empresa, mantienen un gran estándar"</p>
                                        <h4 class="tm-text-secondary tm-about-subtitle">Comprador</h4>
                                    </div>
                                </div>
                                
                                <div class="tm-carousel-item">
                                    <figure class="effect-honey mb-4">
                                        <img src="img/about-02.jpg" alt="Featured Item">
                                        <figcaption>
                                            <ul class="tm-social">
                                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">Carolina Acosta</h3>
                                        <p>"Es un buen negocio, pero debes cumplir muy bien con los estándares"</p>
                                        <h4 class="tm-text-secondary tm-about-subtitle">Comprador</h4>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <figure class="effect-honey mb-4">
                                        <img src="img/about-03.jpg" alt="Featured Item">
                                        <figcaption>
                                            <ul class="tm-social">
                                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">David Sánchez</h3>
                                        <p>"El mejor restaurante de hamburguesas en el que puedes invertir"</p>
                                        <h4 class="tm-text-secondary tm-about-subtitle">Comprador</h4>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <figure class="effect-honey mb-4">
                                        <img src="img/about-01.jpg" alt="Featured Item">
                                        <figcaption>
                                            <ul class="tm-social">
                                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">Raúl Juárez</h3>
                                        <p>"Algo exigentes para mantener los estándares de calidad"</p>
                                        <h4 class="tm-text-secondary tm-about-subtitle">Comprador</h4>
                                    </div>
                                </div>
                                
                                <div class="tm-carousel-item">
                                    <figure class="effect-honey mb-4">
                                        <img src="img/about-02.jpg" alt="Featured Item">
                                        <figcaption>
                                            <ul class="tm-social">
                                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">Melisa Espinosa</h3>
                                        <p>""</p>
                                        <h4 class="tm-text-secondary tm-about-subtitle">Comprador</h4>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <figure class="effect-honey mb-4">
                                        <img src="img/about-03.jpg" alt="Featured Item">
                                        <figcaption>
                                            <ul class="tm-social">
                                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">David Oropeza</h3>
                                        <p>""</p>
                                        <h4 class="tm-text-secondary tm-about-subtitle">Comprador</h4>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <figure class="effect-honey mb-4">
                                        <img src="img/about-01.jpg" alt="Featured Item">
                                        <figcaption>
                                            <ul class="tm-social">
                                                <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">Iván Zúñiga</h3>
                                        <p>""</p>
                                        <h4 class="tm-text-secondary tm-about-subtitle">Comprador</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- contact section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/img-04.jpg"></div>
                    <div id="contact" class="tm-section">
                        <h2 class="tm-text-primary">Contacto</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-xl-6 tm-contact-col-l mb-4">
                                <form id="contact-form" action="" method="POST" class="tm-contact-form">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="contact-select" name="inquiry">
                                            <option value="-">Subject</option>
                                            <option value="sales">Sales &amp; Marketing</option>
                                            <option value="creative">Creative Design</option>
                                            <option value="uiux">UI / UX</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
                                    </div>
            
                                    <div class="form-group tm-text-right">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-6 tm-contact-col-r">
                                <!-- Map -->
                                <div class="mapouter mb-4">
                                    <div class="gmap_canvas">
                                        <iframe width="100%" height="520" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
            
                                <!-- Address -->
                                <address class="mb-4">
                                    
                                </address>
            
                                <!-- Links -->
                                <ul class="tm-contact-links mb-4">
                                    <li class="mb-2">
                                        <a href="tel:0100200340">
                                            <i class="fas fa-phone mr-2 tm-contact-link-icon"></i>
                                            Tel: 010-020-0340
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:info@company.com">
                                            <i class="fas fa-at mr-2 tm-contact-link-icon"></i>
                                            Email: info@company.com
                                        </a>
                                    </li>
                                </ul>
                                <ul class="tm-contact-social">
                                    <li><a href="https://fb.com/templatemo" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://youtube.com" class="tm-social-link"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Copyright -->                
                <div class="tm-section-wrap tm-copyright row">
                    <div class="col-12">
                        <div class="text-right">
                            
                        </div> 
                    </div>
                </div>                 
            </div> <!-- .tm-main -->                      
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

@endsection


