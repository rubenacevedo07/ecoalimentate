@extends('backpack::layout')

@section('before_styles')

{!! HTML::style('css/parsley.css') !!}

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

@endsection

@section('header')
    <section class="content-header">
      <div class="clearfix"></div>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Recursos</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">

            <div class="box box-default">
                <div class="box-header with-border">
                  <div class="box-title">
        Crear recurso audiovisual</div>
                @if ($errors->any())
                   @foreach ($errors->all() as $error)
                      <div>{{ $error }}</div>
                  @endforeach
                @endif
                </div>
                <div class="box-body">
                  
    {!! Form::open(array('route' => 'recursos.store', 'data-parsley-validate' => '', 'files' => true)) !!}

        {{ Form::label('title', 'Titulo') }}
        {{ Form::text('title',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Insertar Titulo del Audiovisual')) }}

        {{ Form::label('description','Descripcion del audiovisual',['class'=>'btn-h1-spacing'] ) }}
        {{ Form::textarea('description',null, array('class' => 'form-control')) }}
        
        
        {{ Form::label('link', 'Link del Video') }}
        {{ Form::text('link',null, array('class' => 'form-control', 'maxlength' =>'255', 'placeholder' => 'Insertar link del Video')) }}


        {{ Form::submit('Subir Audiovisual', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;') ) }}
    {!! Form::close() !!}

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

@endsection