@extends('layouts.base')
@section('styles')
<link rel="stylesheet" href="{{asset('css/login/css/login.css')}}">
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/show/css/styles.css')}}" rel="stylesheet" />

@endsection

@section('content')
<style>
    .bg-custom {
    background-color: #fb5849;
}
    .resume-section {
    font-family: 'Poppins', sans-serif;
    font-size: large;
    /* Agrega cualquier otro estilo de fuente que desees */
}

    .info-section {
    font-family: 'Poppins', sans-serif;
    font-size: medium;
    /* Agrega cualquier otro estilo de fuente que desees */
}
    .custom-heading {
        font-family: 'Poppins', sans-serif;
        /*'Dancing Script'*/
        color: #fb5849;
        text-transform: none;
        text-align: left;
    }

    .section-heading {
        font-family: 'Poppins', sans-serif;
        font-size: xx-large;
        /*'Dancing Script'*/
        color: #fb5849;
        text-transform: none;
        text-align: left;
    }

</style>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom" id="sideNav">
            <br><br><br><br><br><br>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="resume-section"><a class="nav-link js-scroll-trigger" href="#sobre_nosotros"><i class="fas fa-home nav-icon"></i>Sobre nosotros</a></i>
                    <br>
                    <li class="resume-section"><a class="nav-link js-scroll-trigger" href="#modelo"><i class="fas fa-briefcase nav-icon"></i>Modelo de Negocio</a></li>
                    <br>
                    <li class="resume-section"><a class="nav-link js-scroll-trigger" href="#finanzas"><i class="fas fa-money-bill nav-icon"></i>Finanzas</a></li>
                    <br>
                    <li class="resume-section"><a class="nav-link js-scroll-trigger" href="#soporte"><i class="fas fa-clipboard nav-icon"></i>Soporte y entrenamiento</a></li>
                    <br>
                    <li class="resume-section"><a class="nav-link js-scroll-trigger" href="#resenas"><i class="fas fa-money-bill nav-icon"></i>Reseñas</a></li>
                    <br>
                    <li class="resume-section"><a class="nav-link js-scroll-trigger" href="#contacto"><i class="fas fa-envelope nav-icon"></i>Contacto</a></li>
                    <br>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-5">
            <!-- Sobre nosotros -->
            <section class="resume-section" id="sobre_nosotros">
                <div class="info-section">
                    <h1 class="mb-0 custom-heading">
                        {{$franquicia->nombre_restaurante}}
                        <!-- <span class="text-primary">{{$franquicia->nombre_restaurante}}</span> -->
                    </h1>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->descripcion}}</p>
                    <h4>Historia</h4>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->historia}}</p>
                    <h4>Misión</h4>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->mision}}</p>
                    <h4>Visión</h4>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->vision}}</p>
                </div> 
            </section>

            <!-- Modelo de negocio-->
            <hr class="m-0" />
            <section class="resume-section" id="modelo">
                <div class="info-section">
                    <h1 class="mb-0 section-heading">
                        Modelo de Negocio 
                    </h1><br><br>
                    <h4>Estándar de Calidad</h4>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->estandar_calidad}}</p>
                    <h4>Mercado Meta</h4>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->mercado_meta}}</p>
                    <h4>Menú</h4>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->vision}}</p>
                    <a href="{{ asset('storage/' . $franquicia->menu) }}" download>
                        <button class="boton-descarga" type="button">Descargar Menú</button>
                    </a>

                </div> 
            </section>

            <!-- Finanzas-->
            <hr class="m-0" />
            <section class="resume-section" id="finanzas">
                <div class="info-section">
                    <h1 class="mb-0 section-heading">
                        Finanzas 
                    </h1><br><br>
                    <h4>Estándar de Calidad</h4>
                    <p class="lead mb-5" style="text-align: left;">Para brindar transparencia y demostrar el compromiso con nuestros clientes y colaboradores, puedes
                                conocer detalles sobre nuestros costos de ingredientes, presupuesto operativo o cualquier otro 
                                aspecto financiero relacionado con nuestro modelo operativo.</p>
                    <p class="lead mb-5" style="text-align: left;">Para acceder a este valioso recurso, simplemente haz clic en el botón "Descargar" a continuación.</p>
                    <a href="{{ asset('storage/' . $franquicia->inf_financiera) }}" download>
                        <button class="boton-descarga" type="button">Descargar Información Financiera</button>
                    </a>
                </div> 
            </section>
        
            <!-- Soporte y mantenimiento-->
            <hr class="m-0" />
            <section class="resume-section" id="soporte">
                <div class="info-section">
                    <h1 class="mb-0 section-heading">
                        Soporte y Entrenamiento 
                    </h1><br><br>
                    <h4>Soporte</h4>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->soporte}}</p>
                    <h5>- Asesoramiento en Ubicación:</h5>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->asesoramiento_ubi}}</p>
                    <h5>- Diseño de Tienda y Construcción:</h5>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->diseno_tienda}}</p>
                    <h5>- Marketing y Publicidad: </h5>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->marketing}}</p>
                    <h4>Entrenamiento</h4>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->entrenamiento}}</p>
                    <h5>- Preparación de Alimentos:</h5>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->preparacion}}</p>
                    <h5>- Servicio al Cliente:</h5>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->servicio_cliente}}</p>
                    <h5>- Gestión de Negocios:</h5>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->gestion}}</p>
                    <h5>- Tecnología y Sistemas:</h5>
                    <p class="lead mb-5" style="text-align: left;">{{$franquicia->tecnologia}}</p>
                </div> 
            </section>

            <!-- Reseñas-->
            <hr class="m-0" />
            <section class="resume-section" id="resenas">
                <div class="info-section">
                    <h1 class="mb-0 section-heading">
                        Reseñas
                    </h1><br><br>
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
            </div> 
            </section>

 

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        
        <script src="{{ asset('js/scripts.js')}}"></script>
@endsection


