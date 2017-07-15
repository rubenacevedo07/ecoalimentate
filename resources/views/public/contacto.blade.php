@extends('mainlayout')

@section('metas')
    <meta name="description" content="Contacto | Ecoalimentate">
    <title>Contacto | Ecoalimentate</title>
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
        
        #contacto{
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
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    <div id="cabecera">
        <div class="container">
            <h1 class="titles">Contactenos</h1>
        </div>
    </div>
    <section id="contacto">
       <div class="row">
          <div class="col-md-6 col-md-offset-1 col-xs-12">
              <div class="color">  
                <h2>Contacto</h2>
                <form action="{{ url('/') }}" method="POST" class="form">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label name="nombre">Nombre</label>
                    <input name="nombre" class="form-control" id="nombre" type="text" required placeholder="Nombre:">
                  </div>
                  <div class="form-group">
                    <label name="email">E-mail:</label>
                    <input name="email" class="form-control" id="e-mail" type="email" required placeholder="E-mail:">
                  </div>
                  <div class="form-group" style="align:right">
                    <label name="comentario">Mensaje:</label>
                    <textarea name="comentario" class="form-control" rows="3" id="comentario" type="text"  placeholder="Ingrese su mensaje:" required></textarea>
                  </div>                   
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button class="btn linkform btn-block" type="submit">Enviar</button>
                </form>
             </div>        
          </div>
    
    <div class="col-xs-12 col-md-4 fbpage">
      <div class="fb-page" data-href="https://www.facebook.com/Ecoalimentate-446697735468121/?fref=ts" data-tabs="timeline" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Ecoalimentate-446697735468121/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Ecoalimentate-446697735468121/?fref=ts">Ecoalimentate</a></blockquote></div>
    </div>
        
  </div>
    </section>


   @endsection


    @section('scripts')

    @endsection 