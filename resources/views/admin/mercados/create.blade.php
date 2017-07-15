@extends('backpack::layout')

@section('before_styles')

{!! HTML::style('css/parsley.css') !!}
{!! HTML::style('css/select2.min.css') !!}


  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

  
  <script type="text/javascript">
    tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
    menubar: false,
    plugins: 'link code',
    statusbar: false,
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
        Cargar Mercado
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Cargar Mercado</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">

            <div class="box box-default">
                <div class="box-header with-border">
                @if ($errors->any())
                   @foreach ($errors->all() as $error)
                      <div>{{ $error }}</div>
                  @endforeach
                @endif
                </div>
                <div class="box-body">
                  
                  <div class="row" id="app">

          <div class="col-xs-12">
                  <div id="floating-panel">
                    <div class="cont">
                    
                    {!! Form::open(array('route' => 'mercadoadmin.store', 'data-parsley-validate' => '', 'files' => true)) !!}

                        {{ Form::label('mercado', ' Nombre Mercado',array('class'=>'top10')) }}
                        {{ Form::text('mercado',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Insertar nombre del emprendimiento')) }}

                        {{ Form::label('domicilio', ' Direccion', array('class'=>'top10')) }}
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
                        {{ Form::label('telefono', 'Telefono', array('class'=>'top10')) }}
                        {{ Form::text('telefono',null, array('type'=>'text', 'class' => 'form-control', 'maxlength' =>'45', 'placeholder' => 'Horarios')) }}
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-md-6">
                                {{ Form::label('mercadocategory_id','Categoría *', ['class'=>'btn-h1-spacing']) }}
                                <select class="form-control" name="mercadocategory_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                </select>
                          </div>
                          <div class="col-md-6">
                                {{ Form::label('productos','Productos', ['class'=>'btn-h1-spacing']) }}
                                <select class="form-control js-example-basic-multiple" name="productos[]" multiple="multiple">
                                @foreach($productos as $producto)
                                    <option value="{{$producto->id}}">{{$producto->producto}}</option>
                                @endforeach
                                </select>

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                             {{ Form::label('email', 'Email', array('class'=>'top10')) }}
                        {{ Form::text('email',null, array('type'=>'email', 'class' => 'form-control', 'required' => '', 'maxlength' =>'155', 'placeholder' => 'Email')) }}
                       
                          </div>
                          <div class="col-md-6">
                               {{ Form::label('users','Asignar usuario', ['class'=>'btn-h1-spacing']) }}
                                <select class="form-control js-example-basic-multiple" name="users[]" multiple="multiple">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                                </select>
                          </div>
                        </div>

                        <div class="well top10">
                        {{ Form::label('logo','Cargar logo', ['class'=>'top10'] ) }}
                        <img id="myimage" class="img-responsive contimg">

                        {{ Form::file('logo', ['onchange' => 'onFileSelected(event)']) }}
                        </div>
                        <div class="well top10">
                        {{ Form::label('imagen','Cargar imagen', ['class'=>'top10'] ) }}
                        <img id="mysecond" class="img-responsive contimg">
                        {{ Form::file('imagen', ['onchange' => 'onFileSelectedos(event)']) }}
                        </div>
                        {{ Form::label('video', 'Link Youtube', array('class'=>'top10')) }}
                        {{ Form::text('video',null, array('type'=>'text', 'class' => 'form-control', 'maxlength' =>'155', 'placeholder' => 'Insertar link Youtube')) }}
                        
                        {{ Form::label('url_web', 'Sitio Web', array('class'=>'top10')) }}
                        {{ Form::text('url_web',null, array('class' => 'form-control', 'maxlength' =>'155', 'placeholder' => 'Sitio Web')) }}

                        {{ Form::label('url_facebook', 'Facebook', array('class'=>'top10')) }}
                        {{ Form::text('url_facebook',null, array('class' => 'form-control', 'maxlength' =>'155', 'placeholder' => 'Pagina de Facebook')) }}

                        <div class="row">
                            <div class="col-xs-12">
                                {{ Form::label('visible', 'Visible/Aprobado : ', array('class'=>'top10')) }}
                                {{ Form::checkbox('visible',null) }}
                            </div>
                        </div>

                         {{ Form::submit('Guardar', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;') ) }}


                    {!! Form::close() !!}
                  


             
                    </div>
                  </div>
                  
           </div>   
        </div> 

                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('after_scripts')
  {!! HTML::script('js/parsley.min.js') !!}
  {!! HTML::script('js/es.js') !!}
  {!! HTML::script('js/select2.min.js') !!}

  <script type="text/javascript">
     $('.js-example-basic-multiple').select2();
  </script>

  <script src="{{asset('js/places.js')}}"></script>
  <script src="{{asset('js/imageviewer.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAssWrbJn1x2zbxMWVPgkyUg356RTMHx_c&libraries=places&callback=initAutocomplete"
              async defer></script>

@endsection