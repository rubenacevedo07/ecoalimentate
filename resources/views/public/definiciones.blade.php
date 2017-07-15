@extends('mainlayout')

@section('metas')
    <meta name="description" content="Definiciones | Ecoalimentate">
    <title>Definiciones | Ecoalimentate</title>
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
            <h1 class="titles">Definiciones</h1>
        </div>
    </div>
    <section id="institucional">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-0 col-xs-10 col-xs-offset-1">
                    <h3 class="text-center titles">Soberanía Alimentaria</h3>
                    <hr class="bar">
                    <p class="justify">El derecho de los pueblos a alimentos nutritivos y culturalmente adecuados, accesibles, producidos de forma sostenible y ecológica; y a decidir su propio sistema alimentario y productivo.

                    Sin embargo, en cada territorio la defensa de la Soberanía Alimentaria supone un enfoque diferente. Queremos analizar y difundir la problemática agraria y ganadera de la Comunidad de Rosario, para después trabajar por la compleja construcción de la Soberanía Alimentaria que se implementará de muy diferentes formas, de las que queremos ser partícipes.</p>

                    <h3 class="text-center titles">Qué es la agricultura ecológica</h3>
                    <hr class="bar">
                    <p class="justify">Es un tipo de agricultura que no utiliza productos de síntesis para la fertilización o el mantenimiento de la salud de las plantas, sino que se basa en un manejo no agresivo de las fincas productivas, y en el uso de variedades agrícolas locales, fertilización orgánica y fitosanitarios naturales. Los alimentos ecológicos se distinguen mediante un sello otorgado por la Unión Europea, aunque hay fincas que no necesitan certificación porque consiguen comercializar en base a la confianza del consumidor.

                    Los valores de la agricultura ecológica están en alza, tanto por su rentabilidad y por su creciente demanda por parte de los consumidores, como porque es una actividad respetuosa con el medio ambiente y con la salud de las personas. Por otra parte, la conversión de nuestros campos hacia un manejo ecológico está favoreciendo el mantenimiento de formas de vida dignas y sostenibles en el medio rural.</p>
                
                    <h3 class="text-center titles">Qué es una cooperativa de consumo</h3>
                    <hr class="bar">
                    <p class="justify">Una cooperativa de consumo es un tipo de cooperativa creada por y para los consumidores cuyo fin es el satisfacer sus necesidades, tanto bienes como servicios. Esto le permite ejercer su derecho a organizarse para el autoabastecimiento en las mejores condiciones posibles de calidad y precio.</p>


                    <h3 class="text-center titles">Cuáles son  sus objetivos principales</h3>
                    <hr class="bar">
                    <p class="justify">La adquisición de bienes y/o servicios en las mejores condiciones es el objetivo principal de cualquier cooperativa de consumo. Luego depende de qué se quiera consumir para que los objetivos específicos, lógicamente, varíen.En el caso de las cooperativas de consumo consciente, los objetivos específicos son consumir productos ecológicos, locales, pagando un precio justo en origen y reduciendo la cadena de intermediarios.</p>


                    <h3 class="text-center titles">El sabor de la lengua y el sabor de la mano…</h3>
                    <hr class="bar">
                    <p class="justify">Según Michael Pollan, existen dos sabores bien diferenciados. El sabor de la lengua es el sabor químico y sencillo que tiene lugar cuando las moléculas de los alimentos entran en contacto con las papilas gustativas. El sabor de la mano en cambio es una experiencia mucho mas compleja, que lleva la inconfundible firma de la persona que lo elabora, es decir, el amor, sus ideas, su historia, el lugar donde vive. Muchos científicos y fabricantes de alimentos aprendieron a engañar a nuestras papilas gustativas y hacer que un alimento sintético resulte apetitoso, en cambio, el sabor de la mano nunca podrá ser falsificado.

                    Cocinar tus propios alimentos y elegir alimentos elaborados de forma artesanal es lanzar un grito de protesta, tal vez pequeño pero elocuente, contra la homogeneización de los sabores. Es también una declaración de independencia contra la economía que preferiría que sigamos siendo consumidores pasivos de sus artículos estandarizados.</p>

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