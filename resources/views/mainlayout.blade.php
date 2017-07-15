<!DOCTYPE html>
<html lang="es">

<head>
    
    @yield('metas')
    
    @include('partials._commonstyles')

    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        .navbar-default{
            background-color: white;
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
        .mainlogo{
            max-height: 45px;
            margin-top: -6px;
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

        .legal{
            margin-top: 30px;
            font-size: 1.3em;
            font-style: italic;
            font-family: Times New Roman;
            padding: 15px;
        }    
        .navbar-brand{
            padding-top: 10px;
        }    
        .title>h1{
            font-family: 'Amatic SC', Arial!important;
            
        }
        .navbar-default .nav>li>a, .navbar-default .nav>li>a:focus{
            color: black;
        }
        @media only screen and (max-width : 767px){
            .legal{
                font-size: 14px;
            }
            .title>h1{
                font-size: 22px;
            }
            .face{
                margin-top: 8px;
            }
        }        


    </style>

    @yield('styles')
</head>

<body id="page-top">

  @include('partials._navbar')

  @yield('content')


    <div class="site-generator">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <img src="{{asset('img/logotaller2.jpg')}}" class="img-responsive apoyo"/>
                </div>
                <div class="col-xs-6">
                    <img src="{{asset('img/henrich.jpg')}}" class="img-responsive apoyo"/>
                </div>              
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <a href="https://www.facebook.com/pages/Ecoalimentate/446697735468121?fref=ts" target="_blank">
                        <img src="{{asset('img/seguinosface.png')}}" class="img-responsive imgcenter">
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="text-center title">
                        <h1>SOBERANÍA ALIMENTARIA
                            <br>
                            soberaniaalimentaria@taller.org.ar
                        </h1>

                    </div>
                </div>
            </div>
            <div class="row">
                <p class="legal"> <b>Ecoalimentate</b> realiza su mejor esfuerzo, pero no garantiza la completa exactitud, fiabilidad, veracidad, utilidad y/o actualidad de los contenidos. <br> La información de este portal sólo tiene carácter informativo, consultivo, divulgativo y está sometida a posibles cambios periódicos sin previo aviso por ampliación, mejora, corrección o actualización de los contenidos.</p>
            </div>
        </div>
    </footer>
   
    @yield('secondcontent')

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    
    @yield('scripts')
    <script src="{{asset('js/new-age.min.js')}}"></script>
    
</body>

</html>
