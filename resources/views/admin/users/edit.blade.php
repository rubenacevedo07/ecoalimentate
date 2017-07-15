@extends('backpack::layout')

@section('before_styles') 
  <link rel="stylesheet" href="{{ URL::asset('css/parsley.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}">
  
  <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Editar Usuario
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Editar Usuario</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Usuario {{ $user->name }}</div>
                </div>

                <div class="box-body">
                  {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT' ]) !!}
    
                    {{ Form::label('roles', 'Rol de usuario',['class'=>'form-spacing-top']) }}
                    {{ Form::select('roles[]',$roles, null, ['class'=>'form-control js-example-basic-multiple', 'multiple'=>'multiple']) }}
                    

                    {{ Form::submit('Guardar',['class'=>'btn btn-success btn-block']) }}

                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after_scripts')
  {{ HTML::script('js/parsley.min.js') }}
  
  {{ HTML::script('js/select2.min.js') }}

  <script type="text/javascript">
     $(".js-example-basic-multiple").select2();

     $(".js-example-basic-multiple").select2().val({!! json_encode($user->roles()->getRelatedIds()) !!}).trigger('change');



  </script>
@endsection