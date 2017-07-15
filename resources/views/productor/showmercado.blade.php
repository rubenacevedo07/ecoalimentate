@extends('mainlayout')

@section('metas')
    <meta name="description" content="Contacto | Ecoalimentate">
    <title>Contacto | Ecoalimentate</title>
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
            height: 60px;
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
       
        #contacto{
          position: relative;
          overflow: hidden;
          padding: 0px;
        }
        
        
        .top10{
          margin-top: 10px;
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
            <h4 class="titles">Mi emprendimiento</h4>
        </div>
    </div>
    <section id="contacto">
      
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <div class="well top10">
                <h1 class="text-center">{{$mercado->mercado}}</h1>
                <div id="map"></div>
                </div>
              </div>
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