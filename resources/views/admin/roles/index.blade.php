@extends('backpack::layout')


@section('before_styles')
  <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Roles de Usuario
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Roles</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

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
                            <th>Permisos</th>

                          </tr>
                        </thead>
                        <tbody>
                          @foreach($roles as $rol)
                          <tr>
                            <th>{{$rol->id}}</th>
                            <td>{{$rol->name}}</td>
                            <td>
                              @foreach($rol->permissions as $permis)
                               <span class="label label-default">
                                  {{$permis->name}}
                                </span><br>
                              @endforeach
                            </td>
                            <td>
                          <a  href="{{ route('roles.edit', $rol->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-4">
                      <div class="well">
                        {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
                          <p>Nuevo Rol de Usuario</p>
                            {{ Form::label('name', 'Nombre:') }}
                              {{ Form::text('name', null, ['class' => 'form-control']) }}

                              {{ Form::submit('Crear Rol', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
                    
                            {!! Form::close() !!}
                      </div>
                    </div>
                      
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
