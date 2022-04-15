@extends('adminlte::page')

@section('title', 'Ofertas del dia')

@section('content_header')
<h1 class='text-center alert-danger'>Bienvenido al panel principal de CITIUS COMPUTACION</h1>

@stop

@section('content')
    <div class="absolute bottom-0 left-0">
        <img class="container d-flex flex-nowrap" id="img-oferta" src="./images/ofertas.png" card-img-top" width="350px" alt="...">
    </div>
    <div class="modall">
        <div class="prueba-modal" id='prueba-modal1'>
        <div class="container-modal">
        <h3 class="title alert alert-danger">Teclado HyperX FPS</h3>
        <h3>Especificaciones:</h3>
        <ul class="mt-2 font-weight-bold">
            <li>Consolas compatibles: ps4, ps3, xbox series xis y xbox one.</li>
            <li>Función antighosting incorporada</li>
            <li>Tipo de teclado: mecánico</li>
            <li>Tecla cilíndrica</li>
            <li>Con conector USB</li>
            <li>Con cable removible</li>
        </ul>
        <button class="cerrar btn btn-danger m-4">Cerrar ventana</button>
        </div>
        </div>
        </div>
        <div class="prueba-modal" id='prueba-modal2'>
        <div class="container-modal">
        <h3 class="title alert alert-danger">Monitor gamer LG 24GL600F led 23.6"</h3>
        <h3>Especificaciones:</h3>
        <ul class="mt-2 font-weight-bold">
            <li>Pantalla led de 23.6 "</li>
            <li>Tiene una resolución de 1920px-1080px.</li>
            <li>Relación de aspecto de 16:9</li>
            <li>Panel TN</li>
            <li>Tipos de conexión: DisplayPort 1.2, 2 HDMI, Jack 3.5 mm.</li>
        </ul>
        <button class="cerrar btn btn-danger m-4">Cerrar ventana</button>
        </div>
        </div>

        <div class="prueba-modal" id='prueba-modal3'>
        <div class="container-modal">
        <h3 class="title alert alert-danger">Monitor Samsung Curved White 27 "</h3>
        <h3>Especificaciones:</h3>
        <ul class="mt-2 font-weight-bold">
            <li>Pantalla led de 27 ".</li>
            <li>Curvo</li>
            <li>Tiene una resolución de 1920px-1080px.</li>
            <li>Relación de aspecto de 16:9.</li>
            <li>Panel VA</li>
            <li>Su brillo es de 250cd/m².</li>
        </ul>
        <button class="cerrar btn btn-danger m-4">Cerrar ventana</button>
        </div>
        </div>

        <div class="prueba-modal" id='prueba-modal4'>
        <div class="container-modal">
        <h3 class="title alert alert-danger">Notebook Asus X515EA slate gray 15.6"</h3>
        <h3>Especificaciones:</h3>
        <ul class="mt-2 font-weight-bold">
            <li>Memoria RAM:8 GB RAM</li>
            <li>Memoria de almacenamiento: 512 GB SSD</li>
            <li>Procesador:Intel Core i5 1135G7</li>
            <li>Placa de video:Intel Iris Xe Graphics G7 80EUs</li>
            <li>Resolución de 1920x1080 px.</li>
            <li>Conexión wifi y bluetooth.</li>
            <li>Posee pad numérico</li>
        </ul>
        <button class="cerrar btn btn-danger m-4">Cerrar ventana</button>
        </div>
        </div>

        <div class="prueba-modal" id='prueba-modal5'>
        <div class="container-modal">
        <h3 class="title alert alert-danger">PLACA DE VIDEO RTX 2060 GIGABYTE</h3>
        <h3>Especificaciones:</h3>
        <ul class="mt-2 font-weight-bold">
            <li>Reloj de núcleo: 1680 MHz</li>
            <li>Reloj de la memoria: 14000 MHz</li>
            <li>Tamaño de la memoria: 6 GB</li>
            <li>Tipo de memoria: GDDR6</li>
            <li>Bus de memoria: 192 bits</li>
            <li>Salida: DisplayPort 1.4 * 3 - HDMI 2.0b * 1</li>
        </ul>
        <button class="cerrar btn btn-danger m-4">Cerrar ventana</button>
        </div>
        </div>
    
    </div>

   <div class="container container2 mt-4 d-flex flex-nowrap">
    <div class="card m-2" style="width: 25rem;" id='prueba' >
    <img src="./images/teclado.png" card-img-top" alt="...">
    <div class="card-body">
        <h6 class="font-bold">Teclado HyperX FPS</h6>
        <h2 class="precios">$7.999</h2>
        <button class="btn btn-primary" id='caracteristica'data-toggle="modal" data-target="#">Caracteristicas</button>
        <hr>
        <!-- <p class="card-text">Especial para horas extensas de trabajo o para juegos</p> -->
        <a href="https://mpago.la/1pMHHzn" target="_blank"  class="btn btn-primary">Comprar</a>


    </div>
    </div>
    
    <div class="card m-2" style="width: 26rem;">
    <img src="./images/monitorLG.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h6 class="font-bold">Monitor LG 24'</h6>
        <h2 class="precios">$23.999</h2>
        <button class="btn btn-primary" id='caracteristica2'data-toggle="modal" data-target="#">Caracteristicas</button>
        <hr>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="https://mpago.la/133u5VW" target="_blank"  class="btn btn-primary">Comprar</a>
    </div>
    </div>
    <div class="card m-2" style="width: 26.5rem;">
    <img src="./images/monitorSAMSUNG.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h6 class="font-bold">Monitor SAMSUNG 27'</h6>
        <h2 class="precios">$26.999</h2>
        <button class="btn btn-primary" id='caracteristica3'data-toggle="modal" data-target="#">Caracteristicas</button>
        <hr>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="https://mpago.la/1auorcw" target="_blank"  class="btn btn-primary">Comprar</a>
    </div>
    </div>
    <div class="card m-2" style="width: 24.7rem;">
    <img src="./images/notebook.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h6 class="font-bold">NOTEBOOK ASUS</h6>
        <h2 class="precios">$89.999</h2>
        <button class="btn btn-primary" id='caracteristica4'data-toggle="modal" data-target="#">Caracteristicas</button>
        <hr>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="https://mpago.la/2w2WeZW" target="_blank"  class="btn btn-primary">Comprar</a>
    </div>
    </div>
    <div class="card m-2" style="width: 25rem;">
    <img src="./images/placa.png" class="card-img-top" alt="...">
    <div class="card-body" >
        <h6 class="font-bold">RTX 2060 GIGABYTE</h6>
        <h2 class="precios">$124.999</h2>
        <button class="btn btn-primary" id='caracteristica5'data-toggle="modal" data-target="#">Caracteristicas</button>
        <hr>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <a href="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=316648919-86122640-99de-424f-856d-4e4a02f31da6" target="_blank"  class="btn btn-primary">Comprar</a>
        <!-- MODAL -->
        <div class="modal fade" id="contenedor-modal" tabindex="-1">
            <div class="modal-dialog"></div>
        </div>
    </div>
    </div>
   </div>

@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
            .container-modal {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: space-around;
            align-items: center;
        }
        .modall {
            width: 100%;
            height: 100%;
            background-color: #e3d9d94a;
            z-index: 9999;
            display: block;
            position: fixed;
            display: none;

        }
        }
        .container-modal h3 {
            margin-top:20px
        }
        .alert-danger {
            color: #d50517;
            background-color: #f8d7da;
            border-color: #f5c2c7;
            width: 100%;
            text-align: center;
        }
        .font-weight-bold {
            font-style: oblique;
            font-size: large;
        }
        .prueba-modal {
            width: 300px;
            background-color: #e6ebf1;
            position: fixed;
            top: 0;
            left: 0;
            width: 50%;
            height: auto;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0;
            opacity: 0.9;
            border-radius: 50px;
            z-index:9999;
            display:none;
        }
        .card {
            transition: 0.5s;
        }
        .btn-primary {
            transition: 0.5s;
        }
        .precios {
            color: #cb2d3e;
            margin-bottom: 1em;
            transition: 0.5s;

        }
        .container2:hover {
            padding: 1em
        }
        #img-oferta {
            margin-top: 3em;
            width: 22%;
        }
        
        .card:hover {
            background: #525252;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #3d72b4, #525252);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #3d72b4, #525252); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            padding: 1rem;
            width:30rem;
            opacity: 1
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #c31432
        }
        .precios:hover{
            color: red;

        }
    </style>
@stop

@section('js')

    <script> 
        console.log($('.precios').val());
//         $( "#caracteristica" ).click(function() {
//   alert( "Procesamiento de gráficos: GeForce RTX 2060 - Reloj de núcleo: 1680 MHz" );
// });
$("#caracteristica").click(function(){
  $(".modall").fadeIn();
  $("#prueba-modal1").fadeIn();
  $("#prueba-modal1").animate({left: '550px'});
  $("#prueba-modal1").animate({top: '350px'});
}); 
$("#caracteristica2").click(function(){
  $(".modall").fadeIn();
  $("#prueba-modal2").fadeIn();
  $("#prueba-modal2").animate({left: '550px'});
  $("#prueba-modal2").animate({top: '350px'});
}); 
$("#caracteristica3").click(function(){
  $(".modall").fadeIn();
  $("#prueba-modal3").fadeIn();
  $("#prueba-modal3").animate({left: '550px'});
  $("#prueba-modal3").animate({top: '350px'});
}); 
$("#caracteristica4").click(function(){
  $(".modall").fadeIn();
  $("#prueba-modal4").fadeIn();
  $("#prueba-modal4").animate({left: '550px'});
  $("#prueba-modal4").animate({top: '350px'});
}); 
$("#caracteristica5").click(function(){
  $(".modall").fadeIn();
  $("#prueba-modal5").fadeIn();
  $("#prueba-modal5").animate({left: '550px'});
  $("#prueba-modal5").animate({top: '350px'});
}); 
$(".cerrar").click(function(){
  $(".modall").fadeOut();
  $("#prueba-modal1").fadeOut();
  $("#prueba-modal2").fadeOut();
  $("#prueba-modal3").fadeOut();
  $("#prueba-modal4").fadeOut();
  $("#prueba-modal5").fadeOut();
}); 
    </script>

@stop