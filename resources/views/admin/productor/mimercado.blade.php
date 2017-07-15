@extends('backpack::layout')


@section('before_styles')
  <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Mi Mercado
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Mi Mercado</li>
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
                    <div class="col-xs-12">
                      @if($mercado->count() > 0)
                          @foreach($mercado as $merc)

                                <div class="row">
                                    <div class="col-md-6 col-md-offset-1">
                                        <div class="box box-default">

                                            <div class="container-center">
                                                <div class="text-center">
                                                    @if(! empty($merc->logo))
                                                        <img class="logo img-responsive" src="{{ asset('uploads/' . $merc->logo )}}" />
                                                    @endif
                                                    <h1 class="text-center">
                                                        <b>{{ $merc->mercado }}</b>
                                                    </h1>

                                                    <hr>
                                                    <br>

                                                    @if(! empty($merc->imagen))
                                                        <img class="postimg img-responsive" src="{{ asset('uploads/' . $merc->imagen )}}" />
                                                    @endif
                                                </div>
                                                <div class="contnot">
                                                    <p>{!! $merc->descripcion !!}</p>
                                                </div>
                                                <br>
                                                @if(! empty($merc->url_youtube))
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$merc->url_youtube}}" id="show" name="show"></iframe>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 rightrow">

                                        <div class="row ">

                                            <div class="clearfix"></div>
                                            <div class="col-xs-12">
                                                <p> <b>URL :</b> <br></p><br>
                                            </div>
                                            <div class="col-xs-12 ">

                                                <b>Categoría : </b>{{ $merc->category }}


                                            </div>
                                            <div class="col-xs-12 ">
                                                <br>
                                                <b>Productos : </b> <br>
                                                <div class="btn-h1-spacing">
                                                    @foreach($merc->productos as $producto)
                                                        {{ $producto->producto }}
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row btn-spacing">
                                            <div class="col-sm-6">
                                                {!! HTML::linkRoute('mimercado.edit','Editar', array($merc->id), array('class'=>'btn btn-primary btn-block')) !!}
                                            </div>

                                            <div class="col-sm-6">
                                                <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">Eliminar</button>
                                            </div>
                                            <div id="myModal" class="modal fade" role="dialog">
                                                <div class="modal-dialog modal-sm">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Confirmar</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Desea eliminar este mercado?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Cerrar</button>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    {!! Form::open(['route' => ['mimercado.destroy', $merc->id], 'method' => 'DELETE']) !!}
                                                                    {{ Form::button('Eliminar', array('class'=>'btn btn-danger btn-block', 'type'=>'submit')) }}
                                                                    {!! Form::close() !!}

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="clearfix"></div>

                                        </div>

                                    </div>
                                </div>
                            @endforeach
                      @else
                      <div class="text-center">
                         <p>Usted no ha cargado su mercado</p>
                        <a href="{{ route('mimercado.create')}}">
                          <button class="btn btn-primary">Cargar Mercado</button>
                        </a>
                      </div>
                      @endif
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection