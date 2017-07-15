@extends('mainlayout')

@section('metas')
    <meta name="description" content="Grupos de Consumo | Ecoalimentate">
    <title>Grupos de Consumo | Ecoalimentate</title>
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
        .panel-title a{
            text-align: center;
            color: #f8b31f!important;
            font-weight: bold;
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
            <h1 class="titles">Grupos de Consumo</h1>
        </div>
    </div>
    <section id="institucional">
        <div class="container">
            <div class="row">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title text-center">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Qué es un grupo de consumo
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <h1>Qué es y Cómo funciona un grupo de consumo</h1>
<p>Se trata de pequeñas organizaciones o grupos de consumidores que se ponen directamente en contacto con el productor y realizan una compra directa a él.
Surge de manera cooperativa entre ambos consumidores y productores
Autogestionados – gestión y planificación se realizan por parte de ambos productores y consumidores. Distintos modelos de asociación a través de distintos acuerdos de compra estable.
Con compromiso de compra estable. Este acuerdo, formal o informal, puede definirse a lo largo plazo o puede constituir en una compra permanente de duración indefinida.
Los productos se entregan bajo formas de cestas fijas o cestas cuyo contenido se elije por los consumidores. Se trata por la mayoría de productos frescos, frutas y verduras de temporada.
Con la entrega se pueden encargar los consumidores organizándose por turnos de buscar sus cestas directamente en el lugar de producción o los productores, que pueden organizar entrega hasta un punto previamente acordado.
El contacto directo con el productor genera vínculo de confianza y favorece la estabilidad en las relaciones.
La venta directa que se realiza en este tipo de iniciativas presenta la ventaja en cuanto a la definición del precio. Dado a que no se incorpora ningún costo de transporte ni de intermediarios, el único precio que se paga es el del productor.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title text-center">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Grupos de consumo existentes
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <ul>
<li><a href="https://www.facebook.com/almacen.ambulante/?fref=ts" target="_blank">Almacén Ambulante &#8211; Cooperativa de Producción y Distribución</a></li>
<li>La Fresca – <a href="https://www.facebook.com/cooperativa.mercadosolidario/?fref=ts" target="_blank">Cooperativa Mercado Solidario y la Red de Comercio Justo del Litoral</a></li>
<li><a href="https://www.facebook.com/lossoles.feriadeartesanias?fref=ts" target="_blank">Los Soles – Pack de Vegetales</a></li>
<li>Frutas Frescas</li>
<li><a href="http://companianatural.blogspot.com.ar/" target="_blank">Companía natural</a> &#8211; <a href="https://www.facebook.com/compania.natural/?fref=ts" target="_blank">FB</a></li>
<li><a href="https://www.facebook.com/Sentaditxs-1663639143850537/?fref=ts" target="_blank">Sentaditxs &#8211; Trigo Sano</a></li>
<li><a href="http://www.misionantiinflacion.com.ar/" target="_blank">Misión Anti inflación</a> &#8211; <a href="https://www.facebook.com/misionantiinflacion" target="_blank">FB</a></li>
<li>Compra Grupal &#8211; Funes</li>
<li><a href="http://www.agriurbanarosario.com.ar/" target="_blank">Red de Huerteras y Huerteros de Rosario</a> &#8211; <a href="https://www.facebook.com/agriculturaurbana.ros/?fref=ts" target="_blank">FB</a></li>
<li><a href="https://www.facebook.com/BOLSAPANDICHOSA/?fref=ts" target="_blank">Bolsa Pandichosa</a></li>
<li><a href="https://www.facebook.com/PorotoSantto/?fref=ts" target="_blank">Poroto Santto</a></li>
</ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title text-center">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Forma tu grupo de consumo
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <h1>Forma tu grupo de consumo</h1>
<p>Cómo armar un grupo de consumo:

Si no encontrás ningún grupo o cooperativa de consumo, te animamos a formar uno. En principio requiere cierto esfuerzo, pero te aseguramos que vale la pena para acceder a alimentos más sanos a precios más accesibles.

Te sugerimos algunos elementos, que siempre pueden ser útiles, pero que tendrás que adaptar a las necesidades y especificidades del grupo.

</p><p>
 

– 1º paso: reuní un grupo de personas

 

Un número óptimo, para empezar, suele ser juntar 10 casas, aunque a veces con 5 basta. El tamaño del grupo debe fijarse en relación con el pedido mínimo que puede hacer rentable la distribución, y también con la facilidad que tengan para organizarse. Facilita el trabajo si las personas que integran el grupo son familiares, amigos/as, o compañeros/as de trabajo, en síntesis personas a las que puedas ver con frecuencia. También es importante, por ejemplo, considerar el espacio que tenés para recibir los productos.

 
</p><p>
– 2º paso: acordar la forma del grupo

 

A veces los/as productores/as sugerirán la forma de organizar los pedidos, pero, si no, lo tendrás que pensar y diseñar con tus compañerxs. También hay que pensar otras cosas: ¿cada cuánto tiempo se quiere recibir los alimentos? ¿cómo se va a organizar el reparto? ¿ los pagos? ¿quién se comunica con los/as productores/as? ¿qué tipo de alimento se quiere integre y qué características tendrá el mismo?

 
</p><p>
3º paso: buscar productores/as locales

 

Para ello podés hablar con otros grupos de consumo, con asociaciones de agricultores/as ecológicas de nuestra zona. Normalmente, los grupos empiezan pidiendo producto fresco (frutas y hortalizas), que se consume de forma más cotidiana, y más tarde buscan otros productores: pan, aceite, huevos…

 
</p><p>
4º paso: acordar un sistema de pedido, reparto y pagos

 

Primero asignar un lugar de recepción de los alimentos. Después acordar con los/as agricultores/as en el día y la hora de reparto, y en cómo y cuando realizaras los pedidos (por Internet, por teléfono…) y la forma de pago (a la semana, al mes, el día de entrega, por transferencia…)

</p><p> 

5° paso: poner el grupo en marcha

 

La experiencia irá mejorando la organización del grupo y seguramente empezará a ampliarse y establecerse la vinculación con los/as productores/as.

Como nos interesa, te sugerimos que nos escribas y nos cuentes los aprendizajes de tu propia experiencia, para que se vaya replicando o reinventando en otras formas de consumo diferentes.

 
</p>
<p class="text-center"> 

Envianos un mensaje a <strong>soberanialimentaria@taller.org.ar</strong> </p>
      </div>
    </div>
  </div>
</div>        
            </div>
        </div>
</section>


   @endsection


    @section('scripts')

    @endsection 