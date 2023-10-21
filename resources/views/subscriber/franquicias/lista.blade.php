@extends('layouts.base')
@extends('layouts.menu')

@section('content')

    <!-- ***** Franquicia ***** -->
    <div id="about" class="shop">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="img/logo1.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>Mítica</h2>
                        <p>Conviértete en un embajador de Mítica y comparte la alegría de las hamburguesas excepcionales 
                        con tu comunidad. Juntos, llevaremos la legendaria experiencia de Mítica a lugares donde la pasión
                         por la comida se encuentra con el éxito empresarial. Únete a la revolución de las hamburguesas y 
                         conviértete en una franquicia Mítica ¡hoy mismo!.</p>
                         <li class="read-more"><a href= "{{ route('franquicias.show', $franquicia->slug)}}" class="active">Conoce más</a></li>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***** Reservation Area Ends ***** -->
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="img/logo2.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>Eladio's Bar</h2>
                        <p>Únete a nosotros y lleva la experiencia de Eladio's Bar a nuevas ciudades y comunidades. Conviértete en un 
                            embajador de la diversión y el sabor, y comparte la emoción de Eladio's Bar en todo el país. ¡Es hora de unirte 
                            a nuestra creciente red de franquicias y ser parte de la historia de éxito de Eladio's Bar!"</p>
                        <a class="read_more" href="index.html">Conoce más</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***** Reservation Area Ends ***** -->
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="img/logo3.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>Las Adoraditas</h2>
                        <p>Únete a nosotros y lleva el sabor auténtico de Las Adoraditas a nuevas ubicaciones, compartiendo la alegría de 
                            nuestras tortas irresistibles con comunidades de todo el país. ¡Es hora de ser parte de la exitosa historia de 
                            Las Adoraditas!"</p>
                        <a class="read_more" href="index.html">Conoce más</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***** Reservation Area Ends ***** -->
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="img/logo4.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>Angry Angus</h2>
                        <p>Ofrecemos un sólido modelo de negocio, soporte integral y acceso a nuestra marca de renombre. Conviértete en un 
                            embajador de la hamburguesa con pasión y lleva la experiencia de Angry Angus a nuevas ciudades y comunidades. 
                            Únete a la revolución de las hamburguesas y sé parte del éxito de Angry Angus. ¡Es hora de compartir la pasión 
                            por la hamburguesa!"</p>
                        <a class="read_more" href="index.html">Conoce más</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***** Reservation Area Ends ***** -->
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="img/logo5.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>Helados El Colon</h2>
                        <p>Ofrecemos un modelo de negocio sólido, soporte continuo y la oportunidad de llevar el sabor y la alegría de El Colon
                             a nuevas ubicaciones. Conviértete en un embajador de la felicidad y comparte la magia de nuestros helados. 
                             ¡Es hora de ser parte del éxito de El Colon y hacer que el placer del helado sea accesible para todos!"</p>
                        <a class="read_more" href="index.html">Conoce más</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </div>

@endsection
