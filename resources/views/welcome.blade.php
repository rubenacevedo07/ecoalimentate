@extends('mainlayout')

@section('metas')
    <meta name="description" content="EcoAlimentate - Conectando Productores y Consumidores">
    <title>EcoAlimentate - Conectando Productores y Consumidores</title>
@endsection

@section('styles')
<style type="text/css">
/* Don't add a check icon to the radio */
input[type="radio"].styled:checked+label:after {
    font-family: 'FontAwesome';
    content: '';
}
</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <style>
input[type=checkbox], input[type=radio] {
margin: 4px 4px 7px;}	
	
        #map {
            height: 100%;
        }
        #floating-panel {
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }
        
        .btn-info {         
			width: 145px;
            margin: 3px;
        }
        
        .mercado {
            margin: 14px 0px 0px 0px;
        }
		table.carta{
		margin-bottom: 0px; 
		}
        p.mercado {
            line-height: 1;
            margin-bottom: 0px;
            text-align: left;
        }
        
        .fa-whatsapp {
            color: #25d366;
        }
        
        .fa-facebook-square fa-pull-left{
            text-align:left;
        }
        
        i.fa-facebook-square fa-pull-left a{
            color: #‎3b5998;
        }
        
        a.facebook{
            color: #‎3b5998;
            text-align:left;
        }
        
        h6 {
            font-size: 14px;
            text-align: left;
        }
        
        .fa-map-marker {
            color: #FE7569;
            padding-right: 3px;
        }

        /* w */
        section.download, #encontra{
            padding: 0!important;
        }
        .naranja{
            background-color:#f8931f;
        }
        .imgprods{
            width: 95%;
            margin: 0 auto;
        }
        .fullrow{
			padding: 10px 0;

            height: 100%;
        }
        .fullrow:hover{
            background-color: #f8b31f;
        -webkit-transition: background-color 1000ms linear;
        -moz-transition: background-color 1000ms linear;
        -o-transition: background-color 1000ms linear;
        -ms-transition: background-color 1000ms linear;
        transition: background-color 1000ms linear;
		}
		.top10{
			margin-top: 10px;
		}
		.top30{
			margin-top: 30px;
		}
		.bot20{
			margin-bottom: 20px;
		}
        .queeseco{
            background-color: #e2e2e2;
            padding: 30px 30px 30px 10px;
        }
        .quees{
            font-size: 1em;
            font-family: Arial; 
        }

        .queeseco h3{
            font-family: 'Amatic SC', Arial!important;
            font-size: 2.2em;
            font-weight: 600;
        }
		.title>h1{
			font-family: 'Amatic SC', Arial!important;
		}
		.list-group {
			padding-left: 0;
			margin-bottom: 0px;
			margin-top: 0px;
		}
        .queeseco h3, .quees{
            color: black!important;         
		}
		.imgcenter{
			margin: 0 auto;
		}
		.site-generator{
			height: 97px;
			padding-top: 5px;
			background-color: #e2e2e2;
		}
		.apoyo{
			margin: 0 auto;
		}

		.legal{
			margin-top: 30px;
			font-size: 1.3em;
			font-style: italic;
			font-family: Times New Roman;
			padding: 15px;
        }
        #noticias{
            background-color: black;
            height: 264px;
            padding: 0;
            padding-top: 20px;
        }
        .smallnew{
            font-size: 0.9em;
        }
        
        .carousel-inner{
            height: 224px;
        }
        .orange{
            color: rgb(248, 147, 31)!important;
            font-weight: 600;
        }
        .mainlogo{
			max-height: 35px;
		}
		 
		.thumbnail .caption {
			padding: 0px; 
			color: #333;
			height:173px;
			margin-bottom: 8px;
		}
		
		h3.seleccion {
			font-family: 'Amatic SC'; 
			font-size: 32px;
			padding-left: 12px;
			padding-right: 12px;
			margin-top: 8px;
			padding-bottom: 15px;
			padding-top: 4px;
			text-align:center; 
			font-weight:bold; 
			margin-bottom:0px;
		}
p.titulo {
    margin: 0 0 0px;
	padding: 8px;
	    color: #fff;
    background-color: #F8931F;
}
p.titulo:hover 
{
 background-color: #F8B31F;
  text-decoration: none;
}

a:hover {
	text-decoration: none;
}

a.title-item:hover {
	background-color: #f8b31f;
}

.list-group-item{
	padding: 5px 15px;
}
	@media only screen and (max-device-width: 480px) {
		h3.seleccion {
				font-size: 22px;
				padding: 11px;
			}
	}

		@media only screen and (min-width : 768px) {
			.centro{
				max-height: 700px;
			}
		}
		@media only screen and (max-width : 767px){
			
		
			.orange{
				font-size: 15px;
			}
			.imgprods{
				width: 75%;
			}
			.legal{
				font-size: 14px;
			}
			.title>h1{
				font-size: 22px;
			}
			.face{
				margin-top: 8px;
			}
			.btn-info{
				width: 130px;
			}
			.section.features,.section-heading, section.features, .device-container{
				margin-bottom: 20px!important;
			}
		}
		
		.filtros{ font-size: 16px;    margin-top: 3px; }
		
		#style-6::-webkit-scrollbar-thumb {
    background-color: #F90;
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
}
    </style>
@endsection


    @section('content')
    <section id="naranja" class="download text-center naranja">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 fullrow">
                    <a href="./productores">
                        <img class="imgprods img-responsive " alt="ecoalimentate productores"  src="{{asset('img/productores-e1422399603106.png')}}">
                    </a>
                </div>
                <div class="col-md-1 fullrow"></div>
                <div class="col-md-3 col-sm-6 fullrow">
                    <a href="./grupos-de-consumo">
                        <img class="imgprods img-responsive " alt="ecoalimentate grupos de consumo"  src="{{asset('img/grupos-de-consumo-e1422399652868.png')}}">
                    </a>
                </div>
				<div class="col-md-1 fullrow"></div>
                <div class="col-md-3 col-sm-6 fullrow">
                    <a href="./puntos-de-venta">
                        <img class="imgprods img-responsive " alt="ecoalimentate puntos de venta"  src="{{asset('img/puntos-de-venta-e1422399511994.png')}}">
                    </a>
                </div>
            </div>
        </div>
    </section>
    

 <section id="mapafiltros" style="padding:0;">
<!--<div class="row" style="padding-bottom: 0.3cm; background-color:#e2e2e2;padding-bottom: 0.4cm;
    margin-bottom: 5px; border: 1px solid #ddd;padding: 3px;">
	
</div>
<div class="row" style="margin-bottom: 15px; margin-top: 12px; ">

				
					
  </div>    -->   
  
            <div class="row" style="background-color:#e2e2e2;     margin-top: 25px;    margin-bottom: 25px;">
			<div class="col-md-4" style="padding-bottom: 0.3cm; padding-bottom: 0.4cm;
    margin-bottom: 5px; border: 1px solid #ddd;padding: 3px;"> 
			<h3 class="seleccion" style="margin-top:0;">Seleccione los productos que esta buscando</h3>
			<div class="col-md-6"> 
<!--<div class="col-md-3 mercado filtros" style="text-align:left; padding-left: 1cm;">-->
						<input onclick="Productos('0');" type="checkbox" value="Aceites  " id="0" class="styled">Aceites</input><br>
						<input onclick="Productos('1');" type="checkbox" value="Azúcares  " id="1" class="styled">Azúcares</input><br>
						<input onclick="Productos('2');" type="checkbox" value="Bebidas " id="2" class="styled">Bebidas </input><br>
						<input onclick="Productos('3');" type="checkbox" value="Carnes  " id="3">Carnes</input><br>
						<input onclick="Productos('4');" type="checkbox" value="Cereales  "   id="4">Cereales</input><br>
						<input onclick="Productos('5');" type="checkbox" value="Conservas "  id="5">Conservas</input><br>
		<!--				</div>	
<div class="col-md-3 mercado filtros"  style="text-align:left;  padding-left: 1cm;">-->						
						
						<input onclick="Productos('6');" type="checkbox" value="Deshidratados "   id="6">Deshidratados</input><br>
						<input onclick="Productos('7');" type="checkbox" value="Dulces y Miel "  id="7">Dulces y Miel</input><br>
						<input onclick="Productos('8');" type="checkbox" value="Embutidos "  id="8">Embutidos</input><br>
						<input onclick="Productos('9');" type="checkbox" value="Fideos y Arroz "  id="9">Fideos y Arroz</input><br>
						<input onclick="Productos('10');" type="checkbox" value="Frutas y Verduras  "  id="10">Frutas y Verduras </input><br>
						
									</div><div class="col-md-6"> 
<!--					
</div>						
<div class="col-md-3 mercado filtros"  style="text-align:left; padding-left: 1cm;">-->					
						<input onclick="Productos('11');" type="checkbox" value="Frutos secos "  id="11">Frutos secos</input><br>
						<input onclick="Productos('12');" type="checkbox" value="Hierbas  "  id="12">Hierbas</input><br>
						<input onclick="Productos('13');" type="checkbox" value="Harinas  "  id="13">Harinas</input><br>
						<input onclick="Productos('14');" type="checkbox" value="Huevos "  id="14">Huevos</input><br>
						<input onclick="Productos('15');" type="checkbox" value="Infusiones "  id="15">Infusiones</input><br>
						<input onclick="Productos('16');" type="checkbox" value="Lacteos  "  id="16" >Lacteos</input><br>		
	<!--
</div>						
<div class="col-md-3 mercado filtros"  style="text-align:left; padding-left: 1cm;">-->		
								
						<input onclick="Productos('17');" type="checkbox" value="Legumbres  "  id="17">Legumbres</input><br>
						<input onclick="Productos('18');" type="checkbox" value="Panificados  "  id="18">Panificados</input><br>
						<input onclick="Productos('19');" type="checkbox" value="Pescados "  id="19">Pescados</input><br>
						<input onclick="Productos('20');" type="checkbox" value="Medallones "  id="20">Medallones</input><br>
						<input onclick="Productos('21');" type="checkbox" value="Otros  "  id="21">Otros</input> <br>
</div>		</div>						
					
<!--
  <form>
  
    <input type="checkbox" name="newsletter" value="Hourly" checked="checked">
 
    <input type="checkbox" name="newsletter" value="Daily">
    <input type="checkbox" name="newsletter" value="Weekly">
 
    <input type="checkbox" name="newsletter" value="Monthly" checked>
    <input type="checkbox" name="newsletter" value="Yearly">
  
</form>-->

					<!-- Inicio Mercados Box 
				
-->
				 <div class="col-md-8 carta " style="height:400px!important;margin-left: -10px;
    padding-left: 38px;">

					<div id="map"></div>	
	            </div>
				
           
            </div>
			<div class="row" style="padding-bottom: 0.3cm;">
							<div class="col-md-12" style="text-align:center;
				    padding: 16px !important;
				 margin-bottom: 5px; padding: 3px;" id="style-6">


 <div class="col-md-3 carta  5">
    <div class="thumbnail">      
      <div class="caption">
            <a href="/mercado/5"   class="title-item"><p class="titulo">Feria Costa Alta</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>	Av. E. Carrasco y Martín Fierro	</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>	Domingos y feriados 11 a 19 hs.</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3414802444</li>
			</ul>
      </div>
    </div>
</div>
 
 
<div class="col-md-3 carta  10">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/10" class="title-item"><p class="titulo">Mercado Organico de Fisherton</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Schweitzer 9020</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i> Primer domingo de cada mes	</li>
			</ul>
      </div>
    </div>
</div>
 

<div class="col-md-3 carta  11">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/11" class="title-item"><p class="titulo">Pichangu. Bar cooperativo autogestionado </p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Salta y Rodrifuez	</li>			  
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 152548877 </li>
			</ul>
      </div>
    </div>
</div>
 
<div class="col-md-3 carta  12">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/12" class="title-item"><p class="titulo">La gran Aldea	</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Lucio V. López	</li>			  
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 156281502 </li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>Todos los 1er y 3er sábados de cada mes</li>
			</ul>
      </div>
    </div>
</div>
 
<div class="col-md-3 carta  13">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/13" class="title-item"><p class="titulo">Bate Fruta	</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>9 de Julio 659	</li>			  
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 156281502 </li>
			  <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>	batefruta@gmail.com</li>
			</ul>
      </div>
    </div>
</div>
 
<div class="col-md-3 carta  14">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/14" class="title-item"><p class="titulo">P.A.CA Proyecto Agroecológico Casilda</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>P.A.CA Proyecto Agroecológico Casilda	Ruta S26</li>			  
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3464691227 </li>
			  <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>	epspiaggi@hotmail.com</li>
			</ul>
      </div>
    </div>
</div>
 
<div class="col-md-3 carta  15">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/15" class="title-item"><p class="titulo">Pan Dicho</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>	Amenabar y Buenos Aires	</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i> Todos los jueves de 16:30 a 20:00</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 153584604</li>
			  <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>	pandicho@gmail.com</li>
			</ul>
      </div>
    </div>
</div>

<div class="col-md-3 carta  16">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/16" class="title-item"><p class="titulo">Chacra Monteflores</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>	Paraje Rural Monteflore, Ruta A012, Km 1	</li>
			</ul>
      </div>
    </div>
</div>


<div class="col-md-3 carta  17">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/17" class="title-item"><p class="titulo">Tambo La Resistencia</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Bv. Bouchard 4200 </li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 156955404</li>
			  <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>	tambo.lr@gmail.com</li>
			</ul>
      </div>
    </div>
</div> 
    
 
<div class="col-md-3 carta  18">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/18" class="title-item"><p class="titulo">Cooperativa Mainumbí</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Mitre 517 	 </li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i> Todos los jueves de 16:30 a 20:00</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3415640685</li>
			  <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>	porotosantto@gmail.com</li>
			</ul>
      </div>
    </div>
</div> 
  
  <div class="col-md-3 carta  19">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/19" class="title-item"><p class="titulo">Jorge Maldonado miel y cera</p></a>
			
      </div>
    </div>
</div> 
  
 <div class="col-md-3 carta  20">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/20" class="title-item"><p class="titulo">Centro de Estudios Agropecuarios CEA</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Zona rural  Totoras ruta 91 </li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3401405390</li>
			</ul>
      </div>
    </div>
</div>
  
 <div class="col-md-3 carta  21">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/21" class="title-item"><p class="titulo">Poroto Santo</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>	Tarragona y Morrison</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i> Todos los jueves de 16:30 a 20:00</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 155418451</li>
			  <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>	porotosantto@gmail.com</li>
			</ul>
      </div>
    </div>
</div>
  
 <div class="col-md-3 carta  22">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/22" class="title-item"><p class="titulo">La Porfia</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>	Amenabar y Buenos Aires	</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3416108437</li>
			  <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>	almacenambulante@gmail.com</li>
			</ul>
      </div>
    </div>
</div>

<div class="col-md-3 carta 23">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/23" class="title-item"><p class="titulo">Paskana Khuyana</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> O Higgins 9131</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 341152722667</li>
			</ul>
      </div>
    </div>
</div>      

<div class="col-md-3 carta 24">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/24" class="title-item"><p class="titulo">Milartes</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> 9 de Julio 659</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 448-1957</li>
			</ul>
      </div>
    </div>
</div>      

<div class="col-md-3 carta 24">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/26" class="title-item"><p class="titulo">Mercado Popular</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Tucumán 1349 </li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i> Todos los jueves de 16:30 a 20:00</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3416808343</li>
			  <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>	tambo.lr@gmail.com</li>
			</ul>
      </div>
    </div>
</div>    

<div class="col-md-3 carta 26">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/26" class="title-item"><p class="titulo">Intysol</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Avenida de Los Granaderos </li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3416808343</li>
			</ul>
      </div>
    </div>
</div>     

<div class="col-md-3 carta 27">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/27" class="title-item"><p class="titulo">Sentaditxs</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Avenida de Los Granaderos </li>
			</ul>
      </div>
    </div>
</div>     
 
<div class="col-md-3 carta 28">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/28" class="title-item"><p class="titulo">Parque Huerta - Hogar Español</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Avenida Avellaneda Bis </li>			  
			</ul>
      </div>
    </div>
</div>    



<div class="col-md-3 carta 29">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/29" class="title-item"><p class="titulo">Parque Huerta - Los Horneros</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Avenida Joaquín Suárez	 </li>
			</ul>
      </div>
    </div>
</div>  
 

<div class="col-md-3 carta 30">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/30" class="title-item"><p class="titulo"> Parque Huerta - Las Flores	 </p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Avenida San Martín	</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i> Lun a Vie 8:30 a 20:30 Hs, Sab 9:00 a 14:00 Hs.</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3414268537</li>
			  <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>	mercadosolidario@coopmail.com</li>
			</ul>
      </div>
    </div>
</div>
  
<div class="col-md-3 carta 31">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/31" class="title-item"><p class="titulo"> Parque Huerta - Molino Blanco	Ayacucho</p></a>
			<ul class="list-group">
			
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Ayacucho</li>
			</ul>
      </div>
    </div>
</div>  

<div class="col-md-3 carta 32">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/32" class="title-item"><p class="titulo">Parque Huerta - La Tablada</p></a>
			<ul class="list-group">
			  
			</ul>
      </div>
    </div>
</div>   

<div class="col-md-3 carta 33">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/33" class="title-item"><p class="titulo">Parque Huerta - Bosque de los constituyentes</p></a>
			<ul class="list-group">
			 
			</ul>
      </div>
    </div>
</div>   
  
<div class="col-md-3 carta 34">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/34" class="title-item"><p class="titulo">Almacén Natural Naomo</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Bolivia 608</li>
			</ul>
      </div>
    </div>
</div>    
  
<div class="col-md-3 carta 35">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/35" class="title-item"><p class="titulo">Pronoar Almacén de productos naturales</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Necochea 1685</li>
			</ul>
      </div>
    </div>
</div>    
  
   <div class="col-md-3 carta 36">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/36" class="title-item"><p class="titulo">Punto Mercado Holístico</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Pueyrredón 601	</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i> Lun a Vie 8:30 a 20:30 Hs, Sab 9:00 a 14:00 Hs.</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3414268537</li>
			</ul>
      </div>
    </div>
</div>    
 
 
 <div class="col-md-3 carta 37">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/37" class="title-item"><p class="titulo">Huerta Sana Ibarlucea	</p></a>
			<ul class="list-group">
			
			</ul>
      </div>
    </div>
</div>    
 
  
<div class="col-md-3 carta 38">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/38" class="title-item"><p class="titulo">Lobito Cambá</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> San Martín 4906</li>
			</ul>
      </div>
    </div>
</div>   



<!--
<div class="col-md-3 carta 52">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/52" class="title-item"><p class="titulo">La Compañía Natural	</p></a>
			<ul class="list-group">
					  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Moreno 589</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>Sáb. de 10:00 a 13:00	<br>	Sáb. de 10:00 a 13:00	 </li>
		
			</ul>
      </div>
    </div>
</div>-->

<div class="col-md-3 carta 51">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/51" class="title-item"><p class="titulo">Suelo Común		</p></a>
			<ul class="list-group">
				<li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3416051021</li>
			</ul>
      </div>
    </div>
</div>

<div class="col-md-3 carta 50">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/50" class="title-item"><p class="titulo">Miel Reinita	</p></a>
			<ul class="list-group">
			</ul>
      </div>
    </div>
</div>

<div class="col-md-3 carta 49">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/49" class="title-item"><p class="titulo">Almacén las 3 Ecologías		</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Pte. Roca y el Río</li>
			</ul>
      </div>
    </div>
</div>

<div class="col-md-3 carta 48">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/48" class="title-item"><p class="titulo">Cooperativa Mercado Solidario 1	</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>9 de Julio 659</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>	 Lun a Vie 16:00 a 20:00 Hs, Sab 10:00 a 13:00 Hs.	<br>	Lun a Vie 16:00 a 20:00 Hs, Sab 10:00 a 13:00 Hs. </li>
			</ul>
      </div>
    </div>
</div>

<div class="col-md-3 carta 47">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/47" class="title-item"><p class="titulo">Cooperativa Mercado Solidario 2	</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Santiago 989</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>	 Lun a Vie 16:00 a 20:00 Hs, Sab 10:00 a 13:00 Hs.	<br>	Lun a Vie 16:00 a 20:00 Hs, Sab 10:00 a 13:00 Hs. </li>
			</ul>
      </div>
    </div>
</div>


<div class="col-md-3 carta 46">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/46" class="title-item"><p class="titulo">Jorge Ricardo Barrios	</p></a>
			<ul class="list-group">
			</ul>
      </div>
    </div>
</div>

<div class="col-md-3 carta 45">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/45" class="title-item"><p class="titulo">Granja El Manso	</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3402492852</li>
			</ul>
      </div>
    </div>
</div>

<div class="col-md-3 carta 44">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/44" class="title-item"><p class="titulo">El Buen Vivir	</p></a>
			<ul class="list-group">
			</ul>
      </div>
    </div>
</div>

<div class="col-md-3 carta 43">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/43" class="title-item"><p class="titulo">Huerta Los Sueños Cumplidos	</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Cisneros 5608</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 341152022480</li>
			</ul>
      </div>
    </div>
</div>    

<div class="col-md-3 carta 42">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/42" class="title-item"><p class="titulo">El Huerterito</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Fresno 7840</li>
			</ul>
      </div>
    </div>
</div>    


<div class="col-md-3 carta 41">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/41" class="title-item"><p class="titulo">Dulces del Jardín</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>General López 1465</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 341155017361</li>
			</ul>
      </div>
    </div>
</div>    


<div class="col-md-3 carta 40">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/40" class="title-item"><p class="titulo">Paihuen del Alba</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Baigorria 1194</li>
			</ul>
      </div>
    </div>
</div>    

<div class="col-md-3 carta 39">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/39" class="title-item"><p class="titulo">Vanesa La Milanesa</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Ayacucho 2900</li>
			</ul>
      </div>
    </div>
</div>    


 
<div class="col-md-3 carta 3">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/3"  class="title-item"><p class="titulo">Feria Plaza López</p></a>
			<ul class="list-group">
				<li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>	Avenida Pellegrini 700</li>
				<li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>		Viernes 9 a 13 hs.</li>
				<li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i>	3414802444</li>
			</ul>
      </div>
    </div>
</div>
 
<div class="col-md-3 carta  8">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/8" class="title-item"><p class="titulo">Feria CMD Sur Rosa Ziperovich</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Av Francia 4435</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i> Jueves 9:00 a 13:00 hs</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3414802444</li>
			</ul>
      </div>
    </div>
</div>

 <div class="col-md-3 carta  7">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/7" class="title-item"><p class="titulo">Feria CMD Sudoeste Emilia Bertolé</p></a>        
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Av Francia 4435</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i> Jueves 9:00 a 13:00 hs</li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3414802444</li>
			</ul>
      </div>
    </div>
</div>

<div class="col-md-3 carta  4">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/4"   class="title-item"><p class="titulo">Feria Plaza Alberdi</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i> Bv. Rondeau 1900 </li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>	Viernes 9 a 13 hs.</li>
			</ul>
      </div>
    </div>
</div>
<div class="col-md-3 carta  6">
    <div class="thumbnail">      
      <div class="caption">
         <a href="/mercado/6"  class="title-item"><p class="titulo">Feria Cuatro Plazas</p></a>    
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>Mendoza y Provincias Unidas	</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>	Sábados y domingos 15:00 a 19:00 hs. </li>
			  <li class="list-group-item"><i class="fa fa-lg fa-whatsapp"></i> 3414802444</li>
			</ul>
      </div>
    </div>
</div>

<div class="col-md-3 carta  9">
    <div class="thumbnail">      
      <div class="caption">
        <a href="/mercado/9" class="title-item"><p class="titulo">Feria de productos frescos en el Trocadero</p></a>
			<ul class="list-group">
			  <li class="list-group-item"><i class="fa fa-lg fa-map-marker"></i>	9 de Julio 659</li>
			  <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i> Todos los jueves de 16:30 a 20:00</li>
			  <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>	mercadosolidario@coopmail.com</li>
			</ul>
      </div>
    </div>
</div>
<!--
<div class="info_content">
	<img src="http://ecoalimentate.org.ar/img/productores.png" style="text-align:center; width: 64px;"/>
	 <p style="margin-bottom: 8px; margin-top: 5px;">Feria de productos frescos en el Trocadero<p>
	 <a href="/mercado/9" class="title-item"><p class="titulo" style="">Ver mas</p></a>
</div>
-->
</div>
			
			</div>

			
		    </section>	
<div class="row" style="padding-bottom: 0.3cm;"></div>


    <section id="noticias">
        <div class="container">
            <div class="row">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    

                    @foreach($notices->chunk(2) as $count => $item)
    
                        <div class="item {{ $count == 0 ? 'active' : ''}}">
                            <div class="row">
                            @foreach($item as $event)
                            <div class="col-xs-6">
                                <div class="row">
                                <div class="col-sm-4 col-sm-offset-0 col-md-4 col-xs-8 col-xs-offset-2">
                                    <a href="#">
                                        <img src="{{asset('uploads/' .$event->featured_image)}}"  class="img-responsive top10">
                                    </a>
                                </div>
                                <div class="col-sm-8">
                                    <a href="{{ route('noticias.single', $event->slug) }}">
                                        <h4 class="text-center orange">{{ $event->title }}</h4>
                                        <p class="smallnew hidden-xs">
                                            {{ substr(strip_tags($event->body), 0, 250)}} {{ strlen(strip_tags($event->body)) > 50 ? "..." : "" }}
                                        <br> [ver mas...]  </p>
                                    </a>
                                </div>
                                </div>
                            </div>
                            @endforeach 
                            </div>
                        </div>

                    @endforeach




                  </div>

                  
                </div>
            </div>
        </div>
    @endsection    
    @section('scripts')
    <!-- EcoMaps -->
	<script>

var markers = [      
['NaturalezaViva',-28.935153,-59.563751 , '/img/local1.png'],
['FeriaPlazaSanMartín',-32.944433,-60.649313 , '/img/local1.png'],
['FeriaPlazaLópez',-32.958169,-60.635387 , '/img/local1.png'],
['FeriaPlazaAlberdi',-32.895363,-60.691975 , '/img/local1.png'],
['FeriaCostaAlta',-32.876145,-60.688219 , '/img/local1.png'],
['FeriaCuatroPlazas',-32.940367,-60.712552 , '/img/local1.png'],
['FeriaCMDSudoesteEmiliaBertolé',-32.983282,-60.676628 , '/img/local1.png'],
['FeriaCMDSurRosaZiperovich',-32.989768,-60.621802 , '/img/local1.png'],
['FeriadeproductosfrescosenelTrocadero',-32.954863,-60.633995 , '/img/local1.png'],
['MercadoOrganicodeFisherton',-32.914458,-60.758736 , '/img/local1.png'],
['Pichangu.Barcooperativoautogestionado',-32.935973,-60.656848 , '/img/local1.png'],
['LagranAldea',-32.712852,-61.021015 , '/img/local1.png'],
['BateFruta',-32.954863,-60.633995 , '/img/local1.png'],
['P.A.CAProyectoAgroecológicoCasilda',-33.10026,-61.118767 , '/img/local1.png'],
['PanDicho',-32.973172,-60.639167 , '/img/local1.png'],
['ChacraMonteflore',-33.085789,-60.578957 , '/img/local1.png'],
['TamboLaResistencia',-32.89086,-60.74865 , '/img/local1.png'],
['CooperativaMainumbí',-32.578497,-61.168785 , '/img/local1.png'],
['JorgeMaldonadomielycera',-32.509762,-61.258392 , '/img/local1.png'],
['CentrodeEstudiosAgropecuariosCEA',-32.585796,-61.167808 , '/img/local1.png'],
['PorotoSantto',-32.925599,-60.734611 , '/img/local1.png'],
['LaPorfia',-32.85173,-60.787468 , '/img/local1.png'],
['PaskanaKhuyana',-32.926682,-60.762656 , '/img/local1.png'],
['Milartes',-32.954863,-60.633995 , '/img/local1.png'],
['MercadoPopular',-32.941166,-60.640533 , '/img/local1.png'],
['Intysol',-32.967789,-60.623814 , '/img/local1.png'],
['Sentaditxs',-32.889606,-60.708346 , '/img/local1.png'],
['ParqueHuerta-HogarEspañol',-32.993943,-60.68646 , '/img/local1.png'],
['ParqueHuerta-LosHorneros',-32.890165,-60.726446 , '/img/local1.png'],
['ParqueHuerta-LasFlores',-33.020125,-60.653393 , '/img/local1.png'],
['ParqueHuerta-MolinoBlanco',-33.01363,-60.636163 , '/img/local1.png'],
['ParqueHuerta-LaTablada',-32.994357,-60.619833 , '/img/local1.png'],
['ParqueHuerta-Bosquedelosconstituyentes',-32.900957,-60.726457 , '/img/local1.png'],
['AlmacénNaturalNaomo',-32.934689,-60.7141 , '/img/local1.png'],
['PronoarAlmacéndeproductosnaturales',-32.959564,-60.626835 , '/img/local1.png'],
['PuntoMercadoHolístico',-32.940637,-60.656917 , '/img/local1.png'],
['HuertaSanaIbarlucea',-32.8607,-60.779414 , '/img/local1.png'],
['LobitoCambá',-32.994487,-60.647588 , '/img/local1.png'],
['VanesaLaMilanesa',-32.973072,-60.633066 , '/img/local1.png'],
['PaihuendelAlba',-32.892703,-60.698903 , '/img/local1.png'],
['DulcesdelJardín',-32.91316,-60.81667 , '/img/local1.png'],
['ElHuerterito',-32.908775,-60.727594 , '/img/local1.png'],
['HuertaLosSueñosCumplidos',-32.980228,-60.689893 , '/img/local1.png'],
['ElBuenVivir',-32.688148,-64.691448 , '/img/local1.png'],
['GranjaElManso',-33.125188,-60.716114 , '/img/local1.png'],
['JorgeRicardoBarrios',-30.562852,-59.953938 , '/img/local1.png'],
['CooperativaMercadoSolidario2',-32.945712,-60.656513 , '/img/local1.png'],
['CooperativaMercadoSolidario1',-32.955012,-60.636424 , '/img/local1.png'],
['Almacénlas3Ecologías',-32.934857,-60.643115 , '/img/local1.png'],
['MielReinita',-32.85623,-60.790615 , '/img/local1.png'],
['SueloComún',-32.716858,-61.026607 , '/img/local1.png'],
['LaCompañíaNatural',-33.005239,-60.664047 , '/img/local1.png'],
  ];
  
var gooMarker = [];
  var map;
function initMap() {

   
   

  var haightAshbury = {lat: 37.769, lng: -122.446};
  var RosarioCentro = {lat: -32.942109, lng: -60.653025};
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 5,
    center: RosarioCentro,
    mapTypeId: 'roadmap'
						
  });
                      
  // Info Window Content
  var infoWindowContent = [
																					
																					
																					
																					
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/1">	Naturaleza Viva	 </a>  <h6>	3482498072	<br>	Guadalupe Norte	<br>	Aceites - Dulces y Miel - Harinas - Lacteos	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/2">	Feria Plaza San Martín	 </a>  <h6>	3414802444	<br>	Córdoba 1900	<br>	Lunes de 9 a 13 hs. y miércoles de 9 a 18 hs.	<br>	Lunes de 9 a 13 hs. y miércoles de 9 a 18 hs.	<br>	Conservas - Frutas y Verduras - Infusiones - Panificados	<br> </h6>' + '</div>'],							
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/3">	Feria Plaza López	 </a>  <h6>	3414802444	<br>	Avenida Pellegrini 700	<br>	Viernes 9 a 13 hs.	<br>	Viernes 9 a 13 hs.	<br>	Aceites - Conservas - Frutas y Verduras - Infusiones - Panificados	<br> </h6>' + '</div>'],							
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/4">	Feria Plaza Alberdi	 </a>  <h6>Bv. Rondeau 1900	<br>	Viernes 9 a 13 hs.	<br>	Viernes 9 a 13 hs.	<br>	Frutas y Verduras - Conservas - Infusiones - Panificados	<br> </h6>' + '</div>'],										
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/5">	Feria Costa Alta	 </a>  <h6>	3414802444	<br>	Av. E. Carrasco y Martín Fierro	<br>	Domingos y feriados 11 a 19 hs.	<br>	Domingos y feriados 11 a 19 hs.	<br>	Conservas - Frutas y Verduras - Infusiones - Panificados	<br> </h6>' + '</div>'],							
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/6">	Feria Cuatro Plazas	 </a>  <h6>	3414802444	<br>	Avenida Mendoza y Provincias Unidas	<br>	Sábados y domingos 15:00 a 19:00 hs. (invierno) y 16:00 a 20:00 hs. (v	<br>	Sábados y domingos 15:00 a 19:00 hs. (invierno) y 16:00 a 20:00 hs. (v	<br>	Conservas - Frutas y Verduras - Infusiones - Panificados	<br> </h6>' + '</div>'],							
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/7">	Feria CMD Sudoeste Emilia Bertolé	 </a>  <h6>	333	<br>	Av Francia 4435	<br>	jueves 9:00 a 13:00 hs.dd	<br>	jueves 9:00 a 13:00 hs.dd	<br>	Aceites - Conservas - Frutas y Verduras - Infusiones - Panificados	<br> </h6>' + '</div>'],							
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/8">	Feria CMD Sur Rosa Ziperovich	 </a>  <h6>	3414802444	<br>	Avenida Uriburu 637	<br>	Jueves 9:00 a 13:00 hs	<br>	Jueves 9:00 a 13:00 hs	<br>	Conservas - Frutas y Verduras - Infusiones - Panificados	<br> </h6>' + '</div>'],							
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/9">	Feria de productos frescos en el Trocadero	 </a>  <h6>9 de Julio 659	<br>	Todos los jueves de 16:30 a 20:00	<br>	Todos los jueves de 16:30 a 20:00	<br>	Bebidas - Cereales - Dulces y Miel - Huevos - Infusiones - Lacteos	<br> </h6>' + '</div>'],										
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/10">	Mercado Organico de Fisherton 	 </a>  <h6>Schweitzer 9020	<br>	Primer domingo de cada mes	<br>	Primer domingo de cada mes	<br>	Aceites - Dulces y Miel - Embutidos - Frutas y Verduras - Huevos - Panificados	<br> </h6>' + '</div>'],										
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/11">	Pichangu. Bar cooperativo autogestionado	 </a>  <h6>	152548877	<br>	Salta y Rodrifuez	<br>	Bebidas - Harinas - Panificados	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/12">	La gran Aldea	 </a>  <h6>		<br>	Lucio V. López	<br>	Todos los 1er y 3er sábados de cada mes	<br>	Todos los 1er y 3er sábados de cada mes	<br>		<br> </h6>' + '</div>'],							
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/13">	Bate Fruta	 </a>  <h6>	156281502	<br>	9 de Julio 659	<br>	Bebidas - Dulces y Miel	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/14">	P.A.CA Proyecto Agroecológico Casilda	 </a>  <h6>	3464691227	<br>	Ruta S26	<br>	Cereales - Frutas y Verduras - Harinas	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/15">	Pan Dicho	 </a>  <h6>	153584604	<br>	Amenabar y Buenos Aires	<br>	Fideos y Arroz - Panificados	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/16">	Chacra Monteflore	 </a>  <h6>Paraje Rural Monteflore, Ruta A012, Km 1	<br>	Frutas y Verduras - Hierbas - Huevos - Legumbres	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/17">	Tambo La Resistencia	 </a>  <h6>	156955404	<br>	Bv. Bouchard 4200	<br>	Dulces y Miel - Lacteos	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/18">	Cooperativa Mainumbí	 </a>  <h6>	341155640685	<br>	Mitre 517 	<br>	Huevos	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/19">	Jorge Maldonado miel y cera	 </a>  <h6>	<br>	Dulces y Miel	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/20">	Centro de Estudios Agropecuarios CEA	 </a>  <h6>	3401405390	<br>	Zona rural  Totoras ruta 91 	<br>	Frutas y Verduras - Huevos	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/21">	Poroto Santto	 </a>  <h6>	155418451	<br>	Tarragona y Morrison	<br>	Cereales - Conservas - Dulces y Miel - Legumbres	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/22">	La Porfia	 </a>  <h6>	3416108437	<br>		<br>	Harinas	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/23">	Paskana Khuyana	 </a>  <h6>	341152722667	<br>	O Higgins 9131	<br>	Dulces y Miel - Embutidos - Panificados	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/24">	Milartes	 </a>  <h6>	3414481957	<br>	9 de Julio 659	<br>	Medallones	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/25">	Mercado Popular	 </a>  <h6>Tucumán 1349	<br>	Carnes - Dulces y Miel - Frutas y Verduras - Huevos - Panificados	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/26">	Intysol	 </a>  <h6>	3416808343	<br>		<br>	Medallones	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/27">	Sentaditxs	 </a>  <h6>Avenida de Los Granaderos	<br>	Cereales - Harinas - Panificados	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/28">	Parque Huerta - Hogar Español	 </a>  <h6>Avenida Avellaneda Bis	<br>	Frutas y Verduras - Hierbas	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/29">	Parque Huerta - Los Horneros	 </a>  <h6>Avenida Joaquín Suárez	<br>	Frutas y Verduras - Hierbas	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/30">	Parque Huerta - Las Flores	 </a>  <h6>Avenida San Martín	<br>	Frutas y Verduras - Hierbas	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/31">	Parque Huerta - Molino Blanco	 </a>  <h6>Ayacucho	<br>	Frutas y Verduras - Hierbas	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/32">	Parque Huerta - La Tablada	 </a>  <h6>	<br>	Frutas y Verduras - Hierbas	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/33">	Parque Huerta - Bosque de los constituyentes	 </a>  <h6>	<br>	Frutas y Verduras - Hierbas	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/34">	Almacén Natural Naomo	 </a>  <h6>Bolivia 608	<br>	Medallones - Panificados - Lacteos - Frutas y Verduras - Hierbas	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/35">	Pronoar Almacén de productos naturales	 </a>  <h6>Necochea 1685	<br>	Aceites - Bebidas - Cereales - Conservas - Dulces y Miel - Frutos secos - Hierbas - Harinas - Infusiones - Legumbres - Panificados - Medallones	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/36">	Punto Mercado Holístico	 </a>  <h6>	3414268537	<br>	Pueyrredón 601	<br>	Lun a Vie 8:30 a 20:30 Hs, Sab 9:00 a 14:00 Hs.	<br>	Lun a Vie 8:30 a 20:30 Hs, Sab 9:00 a 14:00 Hs.	<br>		<br> </h6>' + '</div>'],							
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/37">	Huerta Sana Ibarlucea	 </a>  <h6>	<br>	Cereales - Frutas y Verduras - Hierbas	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/38">	Lobito Cambá	 </a>  <h6>A San Martín 4906	<br>	Conservas	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/39">	Vanesa La Milanesa	 </a>  <h6>Ayacucho 2900	<br>	Lacteos - Legumbres	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/40">	Paihuen del Alba	 </a>  <h6>Baigorria 1194	<br>	Hierbas	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/41">	Dulces del Jardín	 </a>  <h6>	341155017361	<br>	General López 1465	<br>	Dulces y Miel - Frutas y Verduras - Legumbres	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/42">	El Huerterito	 </a>  <h6>		<br>	Fresno 7840	<br>	Frutas y Verduras - Infusiones	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/43">	Huerta Los Sueños Cumplidos	 </a>  <h6>	341152022480	<br>	Cisneros 5608 	<br>	Frutas y Verduras - Hierbas	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/44">	El Buen Vivir	 </a>  <h6>	<br>	Carnes - Dulces y Miel - Infusiones	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/45">	Granja El Manso	 </a>  <h6>	3402492852	<br>		<br>	Carnes - Huevos	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/46">	Jorge Ricardo Barrios	 </a>  <h6>	<br>	Fideos y Arroz	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/47">	Cooperativa Mercado Solidario 2	 </a>  <h6>Santiago 989	<br>	Lun a Vie 16:00 a 20:00 Hs, Sab 10:00 a 13:00 Hs.	<br>	Lun a Vie 16:00 a 20:00 Hs, Sab 10:00 a 13:00 Hs.	<br>	Aceites - Azúcares - Bebidas - Cereales - Conservas - Dulces y Miel - Fideos y Arroz - Frutas y Verduras - Frutos secos - Harinas - Infusiones - Panificados	<br> </h6>' + '</div>'],										
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/48">	Cooperativa Mercado Solidario 1	 </a>  <h6>9 de Julio 659	<br>	Lun a Vie 16:00 a 20:00 Hs, Sab 10:00 a 13:00 Hs.	<br>	Lun a Vie 16:00 a 20:00 Hs, Sab 10:00 a 13:00 Hs.	<br>	Aceites - Azúcares - Bebidas - Cereales - Conservas - Dulces y Miel - Fideos y Arroz - Frutas y Verduras - Frutos secos - Harinas - Infusiones - Panificados	<br> </h6>' + '</div>'],										
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/49">	Almacén las 3 Ecologías	 </a>  <h6>Pte. Roca y el Río	<br>	Vier, Sab y Dom 15:00 a 19:00	<br>	Vier, Sab y Dom 15:00 a 19:00	<br>	Aceites - Azúcares - Bebidas - Cereales - Conservas - Dulces y Miel - Fideos y Arroz - Frutas y Verduras - Frutos secos - Harinas - Infusiones - Panificados	<br> </h6>' + '</div>'],										
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/50">	Miel Reinita	 </a>  <h6>	<br>	Dulces y Miel	<br> </h6>' + '</div>'],														
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/51">	Suelo Común	 </a>  <h6>	3416051021	<br>		<br>	Frutas y Verduras	<br> </h6>' + '</div>'],											
['<div class="info_content">' + '<a class="titulo-mercado" href="/mercado/52">	La Compañía Natural	 </a>  <h6>Moreno 589	<br>	Sáb. de 10:00 a 13:00	<br>	Sáb. de 10:00 a 13:00	<br>	Aceites - Azúcares - Bebidas - Cereales - Conservas - Dulces y Miel - Frutas y Verduras - Frutos secos - Harinas - Infusiones - Panificados	<br> </h6>' + '</div>'],										

];
var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    // Loop through our array of markers & place each one on the map  
  for( i = 0; i < markers.length; i++ ) {
    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
      //bounds.extend(position);
      marker = new google.maps.Marker({
          position: position,
          map: map,
          title: markers[i][0],
		  //icon: iconBase + markers[i][3]
      });

      gooMarker.push(marker);
      // Allow each marker to have an info window    
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
              infoWindow.setContent(infoWindowContent[i][0]);
              infoWindow.open(map, marker);
          }
      })(marker, i));

  }
  // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(12);
        google.maps.event.removeListener(boundsListener);
    });

console.log(gooMarker);

}

// Adds a marker to the map and push to the array.
function addMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  markers.push(marker);
}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Shows any markers currently in the array.
function showMarkers() {
  gooMarker[1].setVisible(true);
}

function showMarkers() {
  gooMarker[1].setVisible(true);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
    setMapOnAll(null);                  // Clear all markers from the map
    var tempArray = markers;            // Create a temporary array
    unset( tempArray[1] );          // Unset the marker to remove
    markers = array_values(tempArray);  // refresh the markers array
    setMapOnAll(map);                   // Show all markers on the map
}

 function displayMarkers(obj,category) {
	var i;
	for (i = 0; i < markers.length; i++){   	
		markers[i].setVisible(false);			 
	}
}    
    
function sortNumber(a,b) {
    return a - b;
}

var data = {"categorias" : [
		"1 3 7 10 35 47 48 49 52",
"47 48 49 52",
"9 11 13 35 47 48 49 52",
"25 44 45",
"9 14 21 27 35 37 47 48 49 52",
"2 3 4 5 6 7 8 21 35 38 47 48 49 52",
"",
"1 9 10 13 17 19 21 23 25 35 41 44 46 47 48 50 52",
"10 23",
"15 46 47 48 49",
"2 3 4 5 6 7 8 9 10 14 16 20 21 25 28 29 30 31 32 33 34 37 41 42 43 47 48 49 51 52",
"35 47 48 49 52",
"16 28 29 30 31 32 33 34 35 37 40 43",
"1 11 14 22 27 35 47 48 49 52",
"9 10 16 18 20 25 45",
"2 3 4 5 6 7 8 9 35 42 44 47 48 49 52",
"1 9 17 34 39",
"16 21 35 39 41",
"2 3 4 5 6 7 8 10 11 15 23 25 27 34 35 47 48 49 52",
"",
"24 26 34 35",
"",
]};

data = JSON.stringify(data);
var obj = $.parseJSON(data);
var categorias = new Array();

for (i = 0; i < obj.categorias.length; i++) { 
	var cat = new Array();
	cat = obj.categorias[i].split(" ");
	categorias.push(cat);
}

var categorias_seleccionadas = new Array();

function Productos(index) {
//console.time("t3");
	
	var x = document.getElementById(index).checked;  
	
	categorias_seleccionadas.sort(sortNumber);
	var mercados_borrar = categorias[index].slice(0);
	var categorias_borradas = categorias_seleccionadas.slice(0);
	
	if( x == true){
			for (i = 0; i < categorias[index].length; i++) { 
			categorias_seleccionadas.push(categorias[index][i]);
			}
		}
		else{
		for (j = 0; j < mercados_borrar.length; j++) {					
					var cat = mercados_borrar[j];
					var indice = categorias_seleccionadas.indexOf(cat);
					var bi = indice - j;
					var bor = cat - 1;
					var index = '.' + j + ' ';
					gooMarker[bor].setVisible(false);
					//$(bor).hide();
					//$(index).hide();    
					//document.getElementsByClassName(index).style.visibility="hidden";
					categorias_borradas.splice(bi, 1);
				}
			categorias_seleccionadas = categorias_borradas;
		}
	categorias_seleccionadas.sort(sortNumber);	
	

	for (i = 1; i < 53; i++) { 
		var j = i.toString();
		var indice = categorias_seleccionadas.indexOf(j);
		var j = i - 1;
		var index = '.' + j + ' ';
		if (indice > 0){	
			 //$( j ).show();
/*			$(index).show(); 
			$(j).show(); 
	*/		$(index).css('display', 'block');
			//document.getElementsByClassName(index).style.visibility="visible";
			gooMarker[j].setVisible(true);
   
		}else{
			 //$( j ).hide();display: block;
			 $(index).css('display', 'none');
			//$(index).hide();    
			//document.getElementsByClassName(index).style.visibility="hidden";
			gooMarker[j].setVisible(false);
			if (j == 52){
				 $(index).css('display', 'none');
			}
		}
	}
 }

 </script>
   <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAi5E8Ie4X06cZ_QJlhrIQ5s6dnlrdl7A&callback=initMap"></script>
    <!-- jQuery -->
    <script type="text/javascript">

        (function($) {

            $(function(){
              $('#mainNav').data('size','big');
            });

            $(window).scroll(function(){
              if($(document).scrollTop() > 0)
            {
                if($('#mainNav').data('size') == 'big')
                {
                    $('#mainNav').data('size','small');
                    $('.mainlogo').stop().animate({
                        height:'50px'
                    },600);
                }
            }
            else
              {
                if($('#mainNav').data('size') == 'small')
                  {
                    $('#mainNav').data('size','big');
                    $('.mainlogo').stop().animate({
                        height:'80px'
                    },600);
                  }  
              }
          });
        })(jQuery); // End of use strict


    </script>
    @endsection