@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Usuarios</div>
                </div>

                <div class="box-body">
              <table class="table table-hover table-striped">
                <thead>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Rol</th>
                  <th>Mercado asignado</th>
                  <th>Creacion</th>
                  <th></th>
              </thead>
              <tbody>
              @if($users->count() > 0 )
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>@foreach( $user->roles as $role ) 
                      
                            {{ $role->name }}
                       
                        @endforeach </td>
                    <td>

                      @if($user->hasRole('productor'))
                      @foreach($mercado as $merc)
                        @if($user->owns($merc))
                          {{ $merc->mercado }}
                        @endif
                      @endforeach
                      @endif
                    </td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    @if($user->hasRole('superadmin'))
                    @else

                      @can('cambiar-roles')
                      <td>
                        <a  href="{{ route('user.edit', $user->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      </td>
                      @endcan
                    @endif

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
                    {!! $users->links(); !!}
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
