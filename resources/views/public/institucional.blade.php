@extends('mainlayout')

@section('metas')
    <meta name="description" content="Quienes Somos | Ecoalimentate">
    <title>Quienes Somos | Ecoalimentate</title>
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
            padding-top: 20px;
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
            <h1 class="titles">Quienes Somos</h1>
        </div>
    </div>
    <section id="institucional">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-0 col-xs-10 col-xs-offset-1">
                    <h3 class="text-center titles">Ecoalimentate</h3>
                    <hr class="bar">
                    <p class="justify">Es una iniciativa del Área de Soberanía Alimentaria de <b> <a href="www.tallerecologista.org.ar" target="_blank">  Taller Ecologista  </a></b> cuya finalidad es promover la producción y el consumo de alimentos sanos y locales, la comercialización directa, los grupos de consumo, las ferias agroecológicas y todo tipo de información que fomente y colabore en la construcción de la soberanía alimentaria. En sus inicios, contó con la colaboración de  la <b> <a href="http://www.launionuyc.org.ar/" target="_blank"> Unión de Usuarios y Consumidores</a></b>  y el financiamiento de <a href="http://es.consumersinternational.org/" target="_blank">International Consumers</a> y  la <a href="http://www.naturskyddsforeningen.se/in-english/About-us/" target="_blank">Sociedad sueca para la conservación de la naturaleza</a>.</p>

                    <h3 class="text-center titles">Taller Ecologista</h3>
                    <hr class="bar">
                    <p class="justify">Es una organización civil sin fines de lucro, creada en 1985 en la ciudad de Rosario. Trabaja en la defensa y preservación del ambiente de manera integral, conjugando los problemas sociales, políticos y económicos con el respeto por los derechos humanos, promoviendo sociedades sustentables que permitan a las generaciones actuales y futuras una vida digna y armoniosa con el entorno.</p>

                    <hr>
                    <p>Ecoalimentate es posible gracias al financiamiento de la Fundación <a href="http://cl.boell.org/es" target="_blank">Heinrich Boll</a></p>


                </div>
                <div class="col-md-5 col-md-offset-0 col-xs-6 col-xs-offset-3">
                    <img src="../img/hand.jpg" class="img-responsive hand">
                </div>
            </div>
        </div>
    </section>


   @endsection


    @section('scripts')

    @endsection 