@extends('backpack::layout')


@section('before_styles')
  <link rel="stylesheet" href="{{ URL::asset('styles/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Categorías
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Categorías Noticias</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="box box-default">
                <div class="box-header with-border">
                   @if (Session::has('success'))
                           <div class="alert alert-success" role="alert">
                              <strong>Perfecto!</strong> {{ Session::get('success') }}
                            </div>

                    @endif
                    @if (count($errors) > 0)
                            <div class="alert alert-danger" role="alert">
                              <strong>Errores:</strong>
                              <ul>
                              @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach  
                              </ul>
                            </div>
                    @endif
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-8">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nombre</th>

                          </tr>
                        </thead>
                        <tbody>
                          @foreach($categories as $category)
                          <tr>
                            <th>{{$category->id}}</th>
                            <td>{{$category->name}}</td>
                            <td>
                              {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}

                        {{ Form::button('<i class="fa fa-trash"></i>', array('class'=>'btn btn-default btn-xs', 'type'=>'submit')) }}

                      {!! Form::close() !!}
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-4">
                      <div class="well">
                        {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
          <p>Nueva Categoria</p>
          {{ Form::label('name', 'Nombre:') }}
          {{ Form::text('name', null, ['class' => 'form-control']) }}

          {{ Form::submit('Crear Categoría', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
        
        {!! Form::close() !!}


                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection