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
            <h1 class="titles">Nuestros Objetivos</h1>
        </div>
    </div>
    <section id="institucional">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-md-offset-1 col-md-10 col-md-offset-1">
                    <p>- Divulgar la historia del alimento, su origen geográfico, sus métodos productivos y el perfil del productor, con el fin de fortalecer, humanizar y visibilizar a quienes los producen.</p>
                    <p>- Facilitar el acceso a la información de productores, procesadores, ferias y mercados de la economía social de alimentos saludables, de producción agroecológica o en transición y de comercio justo.</p>
                    <p>- Promover el acortamiento de la comercialización de alimentos, evitando el encarecimiento de precios, el control o concentración económica en parte de la cadena y el poder asimétrico entre los sectores de producción, procesamiento y comercialización.</p>
                </div>  
            </div>
        </div>
    </section>


   @endsection


    @section('scripts')

    @endsection 