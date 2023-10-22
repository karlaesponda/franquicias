<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="home.html" class="logo">
                    <img src="{{ asset('img/dauroweb-logo.png') }}" alt="Mi Foto">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href= "{{ route('home.index')}}" class="active">Inicio</a></li>
                        <li class="scroll-to-section"><a href= "{{ route('sobre_nosotros.index')}}" class="active">Sobre nosotros</a></li>
                        <li class="scroll-to-section"><a href= "{{ route('franquicias.lista')}}" class="active">Franquicias</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Reseñas</a></li>
                        <li class="scroll-to-section"><a href="#reservation">Registrate</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->



<!--
<header class="header">
    <div class="menu">

        <div class="logo">
            
            <a href="#"><img src="" alt="Logo"></a>
        </div>

        // si el usuario no está autenticado
        @guest
        <ul class="d-flex">
            <li class="me-2"><a href="{{route('login')}}" class="login">Acceder</a></li>
            <br>
            <li><a href="{{route('register')}}" class="create">Crear cuenta</a></li>
        </ul>
        @else

        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" 
               data-bs-toggle="dropdown" aria-expanded="false">
          
                <span class="name-user">{{Auth::user()->name}}</span>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item"
                        href="#">Perfil</a></li>
                
                <li><a class="dropdown-item" href="#">Ir al admin</a></li>
                
                <li>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" 
                    style="display: none;">
                    
                    @csrf
                    </form>
                    <a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault(); 
                           document.getElementById('logout-form').submit();">Salir</a>
                </li>
            </ul>
        </div>
        @endguest
        </nav>
    </div>

</header>
-->