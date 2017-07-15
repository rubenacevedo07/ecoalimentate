@extends('backpack::layout')

@section('before_styles') 
  <link rel="stylesheet" href="{{ URL::asset('css/parsley.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Edicion de Roles
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Editar Rol</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-default">
                <div class="box-header with-border">
                  <div class="box-title">Editar rol <b>{{$rol->name}}</b></div>
                @if ($errors->any())
                  @foreach ($errors->all() as $error)
                      <div>{{ $error }}</div>
                  @endforeach
                @endif
                </div>
                <div class="box-body">
    {!! Form::model($rol, ['route' => ['roles.update', $rol->id], 'method' => 'PUT' ]) !!}
    
        {{ Form::label('name', 'Nombre Rol:')}}
        {{ Form::text('name', null, ['class'=> 'form-control input-lg'])}}

  
        {{ Form::label('Label', 'Descripción:', ['class'=>'form-spacing-top'])}}
        {{ Form::text('Label', null, ['class'=> 'form-control input-lg'])}}
        
        {{ Form::label('permissions', 'Permisos:',['class'=>'form-spacing-top']) }}
        {{ Form::select('permissions[]',$permissions, null, ['class'=>'form-control js-example-basic-multiple', 'multiple'=>'multiple']) }}
        
        <div class="well form-spacing-top">
          <div class="row">
              <div class="col-xs-6 col-xs-offset-3">
                {{ Form::submit('Actualizar',['class'=>'btn btn-success btn-block']) }}
              </div>
          </div>

        </div>

      </div>

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
     $(".js-example-basic-multiple").select2();

     $(".js-example-basic-multiple").select2().val({!! json_encode($rol->permissions()->getRelatedIds()) !!}).trigger('change');



  </script>
@endsection
