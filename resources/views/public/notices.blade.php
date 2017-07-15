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
            <h1 class="titles">Noticias</h1>
        </div>
    </div>
    <section id="institucional">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @foreach($notices as $notice)
                        <div class="row">
                            <div class="col-md-4">
                                @if(! empty($notice->featured_image))
                                 <img src="{{asset('uploads/'.$notice->featured_image )}}" alt="{{$notice->title}}" class="img-responsive notiimg"/>  
                                @endif
                            </div>
                            <a href="{{ route('noticias.single', $notice->slug) }}">
                                <div class="col-md-8 bodynoti">
                                    <h4 class="titlenoti">{{$notice->title}}</h4>
                                    <!--{!! $notice->body !!}-->
                                    {{ substr(strip_tags($notice->body), 0, 250)}} {{ strlen(strip_tags($notice->body)) > 250 ? "Ver mas ..." : "" }}
                                </div>
                            </a>
                        </div>
                    <hr>
                    @endforeach
                </div>
                
            </div>
            <div class="text-center">{{ $notices->links() }}</div>
            
        </div>
    </section>


   @endsection


    @section('scripts')

    @endsection 