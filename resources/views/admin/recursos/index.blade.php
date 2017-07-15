@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Recursos Audiovisuales
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Recursos Audiovisuales</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Recursos Audiovisuales</div>
                </div>
                 <div class="box-body">
                  <div class="col-xs-5">
                        <a href="{{ route('recursos.create') }}" class="btn btn-md btn-block btn-primary btn-h1-spacing">Nuevo Recurso</a>
                    </div>
                    <div class="col-xs-7">
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
                    
                  </div>
                    
                </div>
                <div class="box-body">
                  <table class="table table-hover table-striped">
                <thead>
                  <th>#</th>
                  <th>Titulo</th>
                  <th>Descripcion</th>
                  <th>Creacion</th>
                  <th></th>
                  <th></th>
              </thead>
              <tbody>
              @if($recursos->count() > 0 )
                @foreach ($recursos as $recurso)
                  <tr>
                    <td>{{ $recurso->id }}</td>
                    <td>{{ $recurso->title }}</td>
                    <td>{{ substr(strip_tags($recurso->body), 0, 25)}} {{ strlen(strip_tags($recurso->body)) > 50 ? "..." : "" }}</td>
                    <td>{{ $recurso->created_at->diffForHumans() }}</td>
                    <td>
                      <a href="{{ route('recursos.show', $recurso->id)}}" class="btn btn-default btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a  href="{{ route('recursos.edit', $recurso->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                @endforeach
              @else
                
                  <div class="alert alert-danger centeralert">
                    <h4>Mil disculpas</h4>
                    <p>No se han encontrado recursos</p>
                  </div>
                
              @endif
              </tbody>
            </table>
                <div class="well">
                  <div class="text-center">
                    {!! $recursos->links(); !!}
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
