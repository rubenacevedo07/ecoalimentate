@extends('mainlayout')

@section('metas')
    <meta name="description" content="{{$mercado->mercado}} | Ecoalimentate">
    <title>{{$mercado->mercado}} | Ecoalimentate</title>
@endsection

@section('styles')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <style>
        /* w */
        .navbar {
          margin-bottom: 0;
        }
        #cabecera{
            margin-top: 55px;
            height: 91px;
            background-color: rgb(248, 147, 31);
			margin-bottom: 14px;            
        }
        .titles{        
            font-family: 'Amatic SC', Arial!important;           
            font-size: 28px;
        }
        #cabecera .titles{
            font-weight: bolder;
            color: white;
			font-size: 46px!important;
			text-align: center;
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
       
        #contacto{
          position: relative;
          overflow: hidden;
          padding: 0px;
        }
        
        
        .top10{
          margin-top: 10px;
        }
		
		.sidebar{
			font-size:16px;
			margin-bottom: 10px;
		}

         #map {
            height: 250px;
          }
        
    </style>


@endsection
    
    @section('content')
    @if($mercado->visible == 0)
        <div class="alert alert-danger centeralert">
                    <p>SOLICITAR HABILITACIÓN DEL EMPRENDIMIENTO AL ADMINISTRADOR</p>
                  </div>
                
    @endif
    <div id="cabecera">
        <div class="container">
            <h2 class="titles">{{$mercado->mercado}}</h2>
        </div>
    </div>
    <section id="contacto">
      
            <div class="row">
				<div class="col-md-1"></div>
					<div class="col-md-7">
						
						
						  <p>{!! $mercado->descripcion !!}</p> 
					
						<br></br>
						@if(! empty($mercado->url_youtube))
						  <div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$mercado->url_youtube}}" id="show" name="show"></iframe>
						  </div>
						  <br></br>
						@endif
						
						
					</div>
				<div class="col-md-3" style="margin-left: 15px;">
				<!-- color: #f4901e;font-size: 26px;font-weight: 800;-->
					<h2 class="titles" style="color: #f4901e;font-size: 26px;font-weight: 800;"><span>Datos del emprendimiento</span></h2>
					@if(! empty($mercado->provincia))
					<p class="sidebar">Provincia: <br>{{$mercado->provincia}}</p>
					@endif	
					@if(! empty($mercado->localidad))
					<p class="sidebar">Localidad:<br>{{$mercado->localidad}}</p>
					@endif	
					@if(! empty($mercado->domicilio))
					<p class="sidebar">Domicilio:<br>{{$mercado->domicilio}}</p>
					@endif	
					@if($mercado->telefono != 0)
					<p class="sidebar">Telefono:<br>{{$mercado->telefono}}</p>
					@endif
					@if(! empty($mercado->horarios))
					<p class="sidebar">Horarios:<br>{{$mercado->horarios}}</p>
					@endif	
					@if(! empty($mercado->email))
					<p class="sidebar">Email:<br>{{$mercado->email}}</p>
					@endif
					@if(! empty($mercado->url_web))
					<p class="sidebar">Sitio web:<br>	
					<a href="{{$mercado->url_web}}"style="color:#337ab7;">{{$mercado->url_web}}</a></p>
					@endif
					@if(! empty($mercado->url_facebook))
						<p class="sidebar">Redes sociales:<br>
					<a href="{{$mercado->url_facebook}}" style="margin-bottom: 10px; color:#337ab7;"><i class="fa fa-facebook-official fa-2x" style="margin-bottom: 10px;" aria-hidden="true"></i></a>
					</p>
					@endif
					<p class="sidebar"><b>Productos : </b><br>
						@foreach($mercado->productos as $producto)
						  {{ $producto->producto }}
						@endforeach
					 </p>
					
				   
					
                   
					
					<!--<div id="map"></div>!-->
				</div>
				<div class="col-md-1"></div>
		    </div>
            

    </section>


   @endsection


    @section('scripts')
      {!! HTML::script('js/parsley.min.js') !!}
  {!! HTML::script('js/es.js') !!}
  {!! HTML::script('js/select2.min.js') !!}
  <!--
  <script type="text/javascript">
     $('.js-example-basic-multiple').select2();

  </script>-->
  <script type="text/javascript">
        function initMap() {
        var myLatLng = {lat: -32.9498244, lng: -60.6568433} ;

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        console.log(myLatLng.lat, myLatLng.lng);

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: '<?= $mercado->mercado  ?>'
        });
      }
</script>
  <script src="{{asset('js/imageviewer.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAssWrbJn1x2zbxMWVPgkyUg356RTMHx_c&libraries=places&callback=initMap"
              async defer></script>


    @endsection 