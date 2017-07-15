@extends('backpack::layout')

@section('before_styles')
  <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
  
@endsection


@section('header')
    <section class="content-header">
      <h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Recursos</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box box-default">
              
                  <div class="container-center">
                      <h4> <b>{{ $recurso->title }}</b></h4>
                      
                    <hr>
                    <div class="contnot">
                      <p>{!! $recurso->description !!}</p> 
                    </div>
                    <br>
                    @if(! empty($recurso->videoid))
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$recurso->videoid}}" id="show" name="show"></iframe>
                      </div>
                    @endif
                  </div>
                
              </div>
              <br>
        </div>
        <div class="col-md-4 rightrow">
        
                        <div class="row ">
                         
                          <div class="col-xs-12">
                            <div class="clearfix"></div>
                          
                            <p> <b>URL :</b> <br> www.ecoalimentate.org.ar/recursos/{{$recurso->id}}</p><br>
                          </div>
                           
                      
                      </div>

                      <div class="row btn-spacing">
                        <div class="col-sm-6">
                          {!! HTML::linkRoute('recursos.edit','Editar', array($recurso->id), array('class'=>'btn btn-primary btn-block')) !!}
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
                                  <p>Desea eliminar este recurso audiovisual?</p>
                                </div>
                                <div class="modal-footer">
                                  <div class="row">
                                    <div class="col-xs-6">
                                      <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Cerrar</button>
                                    </div>
                                    <div class="col-xs-6">
                                      {!! Form::open(['route' => ['recursos.destroy', $recurso->id], 'method' => 'DELETE']) !!}
                                    {{ Form::button('Eliminar', array('class'=>'btn btn-danger btn-block', 'type'=>'submit')) }}
                                  {!! Form::close() !!}

                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>

                        <div class="clearfix"></div>
                        <div class="col-xs-12 btn-spacing">
                            {!! HTML::linkRoute('recursos.index','Todos los videos',array($recurso->id), array('class'=>'btn btn-primary btn-block')) !!}
                        </div>
                      </div>
                 
                </div>
            </div>
        
@endsection

@section('after_scripts')
  {{ HTML::script('js/parsley.min.js') }}
@endsection