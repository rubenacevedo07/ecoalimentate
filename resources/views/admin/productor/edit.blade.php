@extends('backpack::layout')

@section('before_styles')

    {!! HTML::style('css/admin.css') !!}
    {!! HTML::style('css/parsley.css') !!}
    {!! HTML::style('css/select2.min.css') !!}

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',  // change this value according to your HTML
            menubar: false,
            plugins: 'link',
            language_url : '/js/es.js'
        });
    </script>
    <style>
        #map {
            margin-top: 10px;
            height: 250px;
        }
    </style>
@endsection

@section('header')
    <section class="content-header">
        <h1>
            Edicion de Noticias
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">Editar Mercado</li>
        </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Editar mercado <b>{{$mercado->mercado}}</b></div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
                <div class="box-body">
                    {!! Form::model($mercado, ['route' => ['mercadoadmin.update', $mercado->id], 'method' => 'PUT', 'files'=> true ]) !!}


                    {{ Form::label('mercado', ' Nombre Mercado',array('class'=>'top10')) }}
                    {{ Form::text('mercado',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Insertar nombre del emprendimiento')) }}

                    {{ Form::label('domicilio', ' Dirección', array('class'=>'top10')) }}
                    {{ Form::text('domicilio', null,array( 'id' =>'pac','class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Ingrese la dirección de su emprendimiento')) }}


                    <div id="map"></div>

                    {{ Form::hidden('latitud',null,array('id'=>'lat')) }}
                    {{ Form::hidden('longitud',null,array('id'=>'long')) }}

                    {{ Form::label('descripcion','Descripción',['class'=>'top10'] ) }}
                    {{ Form::textarea('descripcion',null, array('class' => 'form-control')) }}


                    <div class="row">
                        <div class="col-sm-6">
                            {{ Form::label('horarios', 'Horarios', array('class'=>'top10')) }}
                            {{ Form::text('horarios',null, array('type'=>'text', 'class' => 'form-control', 'maxlength' =>'155', 'placeholder' => 'Horarios')) }}
                        </div>
                        <div class="col-sm-6">
                            {{ Form::label('telefono', 'Teléfono', array('class'=>'top10')) }}
                            {{ Form::text('telefono',null, array('type'=>'text', 'class' => 'form-control', 'maxlength' =>'45', 'placeholder' => 'Teléfono')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            {{ Form::label('mercadocategory_id','Categoría', ['class'=>'form-spacing-top']) }}
                            {{ Form::select('mercadocategory_id', $mercadocategories, null, ['class' => 'form-control']) }}
                        </div>
                        <div class="col-sm-6">
                            {{ Form::label('productos', 'Productos',['class'=>'form-spacing-top']) }}
                            {{ Form::select('productos[]',$productos, null, ['class'=>'form-control select2-multi', 'multiple'=>'multiple']) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            {{ Form::label('email', 'Email', array('class'=>'top10')) }}
                            {{ Form::text('email',null, array('type'=>'email', 'class' => 'form-control', 'maxlength' =>'155', 'placeholder' => 'Email')) }}
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="well top10">
                                {{ Form::label('logo','Cargar logo', ['class'=>'top10'] ) }}


                                @if (! empty($mercado->logo))
                                    <img id="myimage" class="img-responsive contimg" src="{{ asset('uploads/'. $mercado->logo)}}">
                                @else

                                    <img id="myimage" class="img-responsive contimg" src="{{ asset('uploads/notfound.png')}}">
                                @endif


                                {{ Form::file('logo', ['onchange' => 'onFileSelected(event)']) }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="well top10">
                                {{ Form::label('imagen','Cargar imagen', ['class'=>'top10'] ) }}
                                @if (! empty($mercado->imagen))
                                    <img id="mysecond" class="img-responsive contimg" src="{{ asset('uploads/'. $mercado->imagen)}}">
                                @else

                                    <img id="mysecond" class="img-responsive contimg" src="{{ asset('uploads/notfound.png')}}">
                                @endif

                                {{ Form::file('imagen', ['onchange' => 'onFileSelectedos(event)']) }}
                            </div>
                        </div>
                    </div>

                    @if(! empty($mercado->url_youtube))
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$mercado->url_youtube}}" id="show" name="show"></iframe>
                        </div>
                    @endif

                    {{ Form::label('video', 'Actualizar Link Youtube', array('class'=>'top10')) }}
                    {{ Form::text('video',null, array('type'=>'email', 'class' => 'form-control', 'maxlength' =>'155', 'placeholder' => 'Insertar link Youtube')) }}


                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            {{ Form::label('url_web', 'Sitio Web', array('class'=>'top10')) }}
                            {{ Form::text('url_web',null, array('class' => 'form-control', 'maxlength' =>'155', 'placeholder' => 'Sitio Web')) }}
                        </div>
                        <div class="col-xs-12 col-sm-6">

                            {{ Form::label('url_facebook', 'Facebook', array('class'=>'top10')) }}
                            {{ Form::text('url_facebook',null, array('class' => 'form-control', 'maxlength' =>'155', 'placeholder' => 'Pagina de Facebook')) }}
                        </div>
                    </div>
                    {{ Form::submit('Actualizar', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;') ) }}

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('after_scripts')
    {{ HTML::script('js/parsley.min.js') }}
    {{ HTML::script('js/es.js') }}
    {{ HTML::script('js/select2.min.js') }}

    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($mercado->productos()->getRelatedIds()) !!}).trigger('change');

    </script>

    {{ HTML::script('js/imageviewer.js') }}
    <script type="text/javascript">

        var myLatLng = { lat: {{$mercado->latitud}}, lng: {{$mercado->longitud}} };


    </script>
    <script src="{{asset('js/placesedit.js')}}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAssWrbJn1x2zbxMWVPgkyUg356RTMHx_c&libraries=places&callback=initAutocomplete"
            async defer></script>


@endsection
