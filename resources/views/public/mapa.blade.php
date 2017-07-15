@extends('mainlayout')

@section('metas')
    <meta name="description" content="Nuestro mapa de la soberanía Alimentaria | Ecoalimentate">
    <title>Mapa Soberanía Alimentaria | Ecoalimentate</title>
@endsection

@section('styles')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <link rel="stylesheet" type="text/css" href="{{asset('/vendor/map-icons/dist/css/map-icons.css')}}">

    <style>
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
            width: 160px;
            margin: 3px;
        }

        .mercado {
            margin: 14px 0px 0px 0px;
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

        /* w */

        .hand{
            margin:30px auto;
        }
        .bar{
            max-width: 10000px;
            border-width: 2px;
            border-color: #f8b31f;
            height: 20px;
        }
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
        #institucional{
            padding-top: 50px;
        }
        #institucional a{
            color: #aaa;
            padding: 40px;
            padding-bottom: 0;
        }
        .lip{
            margin-bottom: 6px;
        }
        .producer{
            min-height: 80px;
            max-height: 90px;
            margin: 5px auto;
        }
        .producer:hover{
            background-color: #f8b31f;

        }
        #mapax{
            padding: 0;
        }
        #map{
            height: 500px;
        }
        @media only screen and (min-width : 768px) {
            .centro{
                max-height: 700px;
            }
            .imglogo{
                margin-top: 5px;
            }
        }
        @media only screen and (max-width : 767px){
            .orange{
                font-size: 15px;
            }
            .section.features,.section-heading, section.features, .device-container{
                margin-bottom: 20px!important;
            }
        }

        .map-icon-label .map-icon {
            position: absolute;
            font-size: 24px;
            color: #FFFFFF;
            line-height: 48px;
            text-align: center;
            white-space: nowrap;
        }

        .marker-title svg path {
            fill: #0CB;

        }
        .marker-feria svg path {
            fill: #f4901f;
        }
        /* */
    </style>
@endsection


@section('content')

    <div id="cabecera">
        <div class="container">
            <h1 class="titles">Nuestro mapa de la soberanía Alimentaria</h1>
        </div>
    </div>
    <section id="institucional">
        <div class="container">

            <h1 class="text-center">
                Productores
                <div class="marker-title">
                    <svg baseProfile="basic" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                        <path d="M24 0c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z"></path>
                    </svg>
                </div>
                Ferias de Alimentos
                <div class="marker-feria">
                    <svg baseProfile="basic" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                        <path d="M24 0c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z"></path>
                    </svg>
                </div>
            </h1>
            <br>
            <div id="map"></div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>

        var data = {!! json_encode($producers) !!};

        console.log(data);
    </script>

    <script src="{{asset('js/mapa.js')}}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAssWrbJn1x2zbxMWVPgkyUg356RTMHx_c&callback=initAutocomplete" async defer></script>

    <script type="text/javascript" src="{{asset('/vendor/map-icons/dist/js/map-icons.js')}}"></script>
@endsection
