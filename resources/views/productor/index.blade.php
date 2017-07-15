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
            height: 550px;
          }
        
    </style>


@endsection
    
    @section('content')
    
    <div id="cabecera">
        <div class="container">
            <h4 class="titles">Panel Administración Mercados</h4>
        </div>
    </div>
    <section id="contacto">
      
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 text-center">
                @can('mostrar-mercado')

                  @if($mercado)
                    {{ $mercado->mercado }}
                  @else
                     <p>"Usted no ha cargado su mercado"</p>
                    <a href="{{ url('mercados/create')}}">
                      <button class="btn btn-primary">Cargar Mercado</button>
                    </a>

                  @endif

                @endcan
            </div>
          </div>
    @can('ver-mercados')
      <div class="container">
        <div class="row rowx">
        @foreach($all as $single)
          @if($single->visible = 0)
           <div class="alert alert-danger centeralert">
                    <p>SOLICITAR HABILITACIÓN DEL EMPRENDIMIENTO AL ADMINISTRADOR</p>
                  </div>
          @endif
          <div class="col-xs-6 col-sm-4">
            @if(! empty ($single->logo))
            <img src="{{ asset('uploads/'.$single->logo) }}" class="img-responsive imgx">
            @endif
            <h3>{{ $single->mercado }}</h3>
            <p>Categoria: {{ $single->category }}</p>
          
            <div class="center">
                      <a href="{{ route('mercados.show', $single->id)}}" class="btn btn-default btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a  href="{{ route('mercados.edit', $single->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            </div>
          </div>
        
        @endforeach
        </div>
        <div class="text-center">{{ $all->links() }}</div>
      </div>

    

    @endcan
                
              

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

  <script src="{{asset('js/places.js')}}"></script>
  <script src="{{asset('js/imageviewer.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAssWrbJn1x2zbxMWVPgkyUg356RTMHx_c&libraries=places&callback=initAutocomplete"
              async defer></script>


    @endsection 