 @extends('mainlayout')

@section('metas')
    <meta name="description" content="{{ substr(strip_tags($notice->body), 0, 250)}} }}">


    <?php $titleTag = htmlspecialchars($notice->title); ?>
    <title>{{ $titleTag }}</title>

    <meta property="og:url"           content="http://sd-1182887-h00010.ferozo.net/noticias/{{$notice->slug}}" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="{{ $notice->title }}" />
    <meta property="og:description"   content=" {{ substr(strip_tags($notice->body), 0, 250)}} " />
    <meta property="og:image"         content="http://sd-1182887-h00010.ferozo.net/{{ $notice->featured_image }}" />
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
            max-height: 350px;
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
            <h1 class="titles">Noticias</h1>
        </div>
    </div>
    <section id="institucional">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                @if(! empty($notice->featured_image))
                                 <img src="{{asset('uploads/'.$notice->featured_image )}}" alt="{{$notice->title}}" class="img-responsive notiimg"/>  
                                @endif
                                <h4 class="titlenoti">{{$notice->title}}</h4>
                                {!! $notice->body !!}
                                <br>

                                @if(! empty($notice->video))
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$notice->video}}" id="show" name="show"></iframe>
                                  </div>
                               
                                @endif

                                @if(! empty($notice->link))
                                <div class="text-center">
                                 <a href="{{$notice->link}}" target="_blank"><h3> Ver mas </h3></a> 
                                 <div class="clearfix"></div>
                                  <br>

                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xs-12 col-md-4 text-center">
                                <span>Categoría: <strong>{{$notice->category->name}}</strong>  </span>
                            </div>
                            <div class="col-xs-12 col-md-4 text-center">
                                @if(! empty($notice->tags))
                                    <span> Tags : </span>
                                    @foreach ($notice->tags as $tag)
                                        <span class="label label-default">{{ $tag->name }}</span>
                                    @endforeach
                                
                                @endif

                            </div>
                            <div class="col-xs-12 col-md-4 text-center">
                                <br class="visible-xs">
                                     <div class="fb-share-button" 
                                        data-href="http://sd-1182887-h00010.ferozo.net/noticias/{{$notice->slug}}" 
                                        data-layout="button_count">
                                    </div>
                                
                            </div>    
                        </div>
                    <hr>
                   
                </div>
                
            </div>
            
            
        </div>
    </section>


   @endsection


    @section('scripts')

    @endsection 