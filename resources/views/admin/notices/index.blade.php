@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Noticias
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Noticias</div>
                </div>
                 <div class="box-body">
                  <div class="col-xs-5">
                        <a href="{{ route('news.create') }}" class="btn btn-md btn-block btn-primary btn-h1-spacing">Nueva Noticia</a>
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
                  <th>Imagen</th>
                  <th>Noticia</th>
                  <th>Creacion</th>
                  <th></th>
                  <th></th>
              </thead>
              <tbody>
              @if($notices->count() > 0 )
                @foreach ($notices as $notice)
                  <tr>
                    <td>{{ $notice->id }}</td>
                    <td>{{ $notice->title }}</td>
                    <td> <img src="{{ asset('uploads/' . $notice->featured_image )}}" class="thumbnail"></td>
                    <td>{{ substr(strip_tags($notice->body), 0, 25)}} {{ strlen(strip_tags($notice->body)) > 50 ? "..." : "" }}</td>
                    <td>{{ $notice->created_at->diffForHumans() }}</td>
                    <td>
                      <a href="{{ route('news.show', $notice->id)}}" class="btn btn-default btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a  href="{{ route('news.edit', $notice->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                @endforeach
              @else
                
                  <div class="alert alert-danger centeralert">
                    <h4>Mil disculpas</h4>
                    <p>No se han encontrado posts</p>
                  </div>
                
              @endif
              </tbody>
            </table>
                <div class="well">
                  <div class="text-center">
                    {!! $notices->links(); !!}
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
