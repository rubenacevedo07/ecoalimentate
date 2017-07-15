@extends('mainlayout')

@section('metas')
    <meta name="description" content="Nuestros Objetivos | Ecoalimentate">
    <title>Nuestros Objetivos | Ecoalimentate</title>
@endsection

@section('styles')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <style>
        /* w */
        
        #cabecera{
            margin-top: 55px;
            height: 90px;
            background-color: rgb(248, 147, 31);
            
        }
        .titles{        
            font-family: 'Amatic SC', Arial!important;           
            font-size: 28px;
        }
        #cabecera .titles{
            font-size: 38px!important;
            font-weight: bolder;
            color: white;
        }
        .justify{
            text-align: justify;
        }
        .hand{
            margin:30px auto;
        }
        .bar{
            max-width: 10000px;
            border-width: 2px;
            border-color: #f8b31f;
            height: 20px;
        }
        .justify{
            text-align: justify;
        }
        
        #institucional{
            padding-top: 30px;
        }
        #institucional a{
            color: #aaa;
        }
        .lip{
            margin-bottom: 5px;
            font-size: 18px;
        }
        @media only screen and (min-width : 768px) {
          
        }
        @media only screen and (max-width : 767px){
            
        }
        /* */
    </style>
@endsection


    
    @section('content')
    
    <div id="cabecera">
        <div class="container">
            <h1 class="titles">Enlaces Sugeridos</h1>
        </div>
    </div>
    <section id="institucional">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0">
                    <ul style="list-style-type: disc;">
                        <li class="lip"><a target="_blank" href="http://tallerecologista.org.ar">Taller Ecologista Rosario</a></li>
                        <li class="lip"><a target="_blank" href="http://catedralibredesoberaniaalimentaria.blogspot.com.ar/">Cátedra libre de Soberanía Alimentaria UBA</a></li>
                        <li class="lip"><a target="_blank" href="http://www.grain.org/es">Grain</a></li>
                        <li class="lip"><a target="_blank" href="http://www.biodiversidadla.org/">Biodiversidad en América Latina</a></li>
                        <li class="lip"><a target="_blank" href="http://www.etcgroup.org/es">ETC Group</a></li>
                        <li class="lip"><a target="_blank" href="https://www.facebook.com/saludsocioambiental.fcmunr">Cátedra de Salud Socioambiental UNR</a></li>
                        <li class="lip"><a target="_blank" href="http://www.observatoriodelsur.unr.edu.ar/">Observatorio del Sur UNR</a></li>
                        <li class="lip"><a target="_blank" href="http://www.agriurbanarosario.com.ar/">Agricultura Urbana de Rosario</a></li>
                        <li class="lip"><a target="_blank" href="http://ecologiapolitica.info/wordpress/">Revista de Ecología Política</a></li>
                        <li class="lip"><a target="_blank" href="https://www.tierra.org/spip/spip.php">Amigos de la Tierra</a></li>
                        <li class="lip"><a target="_blank" href="http://viacampesina.org/es/">Via Campesina</a></li>
                        <li class="lip"><a target="_blank" href="http://www.fian.org/es/">Fian</a></li>
                        <li class="lip"><a target="_blank" href="http://www.gepama.com.ar/">GEPAMA</a></li>
                        <li class="lip"><a target="_blank" href="http://www.ecoportal.net/">Ecoportal</a></li>
                        <li class="lip"><a target="_blank" href="http://www.tramatierra.org.ar/">Tramatierra</a></li>
                        <li class="lip"><a target="_blank" href="http://www.rap-al.org/">Red de Acción en Plaguicidas y sus alternativas en America Latina</a></li>
                        <li class="lip"><a target="_blank" href="http://maela-agroecologia.org/">Movimiento Agroecológico de America Latina y el Caribe</a></li>
                        </ul>
                </div>  
            </div>
        </div>
    </section>


   @endsection


    @section('scripts')

    @endsection 