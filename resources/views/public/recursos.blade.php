@extends('mainlayout')

@section('metas')
    <meta name="description" content="Noticias | Ecoalimentate">
    <title>Noticias | Ecoalimentate</title>
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
        /*cssnoticias*/
        .notiimg{
            max-height: 100px;
            margin: 0 auto;
            margin-top: 10px;
        }
        .titlenoti{
            font-size: 1.3em;
            color: #f8b31f;
            font-weight: bolder;
        }
        .bodynoti>p,
        .bodynoti>p>span{
            font-family: 'Maven Pro', Arial!important;  
            color: black!important;
            font-size: 14px!important;
        }
        hr{
            max-width: 100%;
            border: 1px solid #f8b31f;
            position: relative;
            bottom: 0;
        } 
        .embed-responsive-16by9{
            margin-top:10px;
        }
        .pagination>.active>a, .pagination>.active>a:focus,
         .pagination>.active>a:hover, .pagination>.active>span,
          .pagination>.active>span:focus, .pagination>.active>span:hover{
            background-color: #f8b31f;
            border-color: #f8b31f;
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
            <h1 class="titles">Recursos Audiovisuales</h1>
        </div>
    </div>
    <section id="institucional">
        <div class="container">
            <div class="row">
                    @foreach($recursos as $recurso)
                            <div class="col-md-4">
                                    @if(! empty($recurso->videoid))
                                      <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$recurso->videoid}}" id="show" name="show"></iframe>
                                      </div>
                                    @endif
                                    <h3 class="titlenoti">{{$recurso->title}}
                                    <!--{!! $recurso->body !!}--><br>
                                    <small>{{ substr(strip_tags($recurso->description), 0, 100)}} {{ strlen(strip_tags($recurso->description)) > 100 ? "Ver mas ..." : "" }}</small></h3>
                                
                            <hr>       

                            </div>
                    
                    @endforeach
            </div>
            <div class="text-center">{{ $recursos->links() }}</div>
            
        </div>
    </section>


   @endsection


    @section('scripts')

    @endsection 