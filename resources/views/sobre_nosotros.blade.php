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
                    <img class="img-fluid w-100" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-6">
                <h6 class="d-inline-block text-uppercase bg-light py-1 px-2 texto-fb5849">Sobre Nosotros</h6>
                
                    <h1 class="mb-4">Culinary Finder</h1>
                    <p class="pl-4  border-fb5849">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet 
                        diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed 
                        ipsum et kasd erat duo eos et erat</p>
                </div>
            </div>
        </div>
    </div>

@endsection