@extends('layouts.base')


@section('content')
@foreach ($franquicias as $franquicia)
    <a href="{{ route('franquicias.show', $franquicia->id) }}">{{ $franquicia->nombre }}</a>
@endforeach

    <!-- ***** Franquicia ***** -->
    <div id="about" class="shop">
         <div class="container-fluid">
            
            <!-- ***** Reservation Area Ends ***** -->
            @foreach ($franquicias as $franquicia)
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="img/logo2.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <div>
                            <h2>{{ $franquicia->nombre_restaurante }}</h2>
                            <p>
                            {{ $franquicia->descripcion }}
                            <br>
                            <br>
                            <a class="read_more" href="{{ route('franquicias.show', $franquicia->id) }}">Conoce más sobre {{ $franquicia->nombre_restaurante }}</a>
                            </p>
                            
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach

            <!-- ***** Reservation Area Ends ***** -->



            </div>
         </div>
    </div>

@endsection
