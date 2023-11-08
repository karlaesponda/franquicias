@extends('layouts.base')
@extends('layouts.menu')

@section('content')
<style>
    .texto-fb5849 {
    color: #fb5849;
}
.border-fb5849 {
    border-left: 2px solid #fb5849; /* Ajusta el grosor y el color del borde según tus preferencias */
    
}


</style>

<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <br>
                    <img class="img-fluid w-100" src="{{ asset('img/culinary_finder.png') }}" alt="">
                </div>
                <div class="col-lg-6">
                <h6 class="d-inline-block text-uppercase bg-light py-1 px-2 texto-fb5849">Sobre Nosotros</h6>
                
                    <h1 class="mb-4">Culinary Finder</h1>
                    <p class="pl-4  border-fb5849">En Culinary Finder, nuestro propósito es unir a las comunidades 
                        a través de la comida y brindar oportunidades de negocio que celebren la autenticidad y la diversidad. 
                        Estamos aquí para servir a emprendedores, amantes de la comida y comunidades hambrientas de nuevas experiencias 
                        culinarias.</p>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <h1> ¿Cómo funciona Culinary Finder?</h1>
            <p>Es sencillo. Para adquirir una franquicia, todo lo que necesitas hacer es ponerte en contacto 
            directamente con el franquiciador. Sin embargo, para acceder a la información de contacto de las 
            franquicias, es necesario adquirir una suscripción a Culinary Finder. La información de 
            contacto es proporcionada por nosotros en cada perfil de franquicia una vez que te hayas convertido 
            en suscriptor. Cada franquicia tiene su propia historia, su propio sabor único y su propio camino 
            hacia el éxito. Puedes encontrar todos los detalles de contacto que necesitas en la página de cada 
            franquicia.</p>
        </div>
    </div>

@endsection