@extends('mainlayout')

@section('metas')
    <meta name="description" content="Agenda | Ecoalimentate">
    <title>Agenda | Ecoalimentate</title>
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
            <h1 class="titles">Agenda</h1>
        </div>
    </div>
    <section id="contacto">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Sección en construcción</h3>
            </div>
        </div>
    </section>


@endsection


@section('scripts')

@endsection