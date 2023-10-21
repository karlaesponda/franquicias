<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('img/icono.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">


    <!-- jQuery -->
    <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>

    <!-- Scripts de bootstrap -->
    <script src="{{asset('js/app.js')}}"></script>
    
    <!-- Bootstrap -->
    <script src="{{ asset('js/popper.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Estilos css generales 
    <link href="{{ asset('css/base/css/general.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base/css/footer.css') }}" rel="stylesheet">-->
   
    <!-- Estilos de mi front-end -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/templatemo-klassy-cafe.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/templatemo-upright.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/magnific-popup.css') }}">
    
    <!-- Estilos de cada franquicia -->
    <link rel="stylesheet" href="{{asset('css/base/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/base/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/slick-theme.css') }}">
<!-- Plugins -->
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

<!-- Global Init -->

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>   


    <!-- Estilos cambiantes -->
    @yield('styles')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <style>
    /* Estilo del botón */
    .boton-descarga {
      background-color: #f07474; /* Color de fondo */
      color: white; /* Color del texto */
      border: 2px solid #f07474; /* Color del contorno (mismo color que el fondo) */
      padding: 10px 15px; /* Espaciado interno */
      border-radius: 5px; /* Bordes redondeados */
      font-size: 16px; /* Tamaño del texto */
      cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
      transition: background-color 0.3s, color 0.3s; /* Efecto de transición al pasar el cursor */
      margin: 0 auto;
      margin-right: auto;
      margin-left: auto;
    }

    /* Cambiar el estilo al pasar el cursor sobre el botón */
    .boton-descarga:hover {
      background-color: #ff5757; /* Cambiar el color de fondo al pasar el cursor */
      border: 2px solid #ff5757; /* Cambiar el color del contorno al pasar el cursor */
    }
    </style>
</head>

<body>

    <div class="content">
        <!-- Incluir menú -->
        @include('layouts.menu')
        <section class="section">
        @yield('content')
   
        </section>

        <!-- Incluir footer -->
        @include('layouts.footer')
    </div>

 
</body>

</html>