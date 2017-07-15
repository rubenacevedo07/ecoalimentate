@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Panel de Administración<small></small>
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
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                </div>

                <div class="box-body">
                  <div class="row">


                  
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Mensajes</span>
                      <span class="info-box-number">93,139</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
                  
                </div><div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-green"><i class="fa fa-user-o"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Registros</span>
                      <span class="info-box-number">93,139</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
                </div><div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-yellow"><i class="fa fa-line-chart"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Visitas</span>
                      <span class="info-box-number">93,139</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
                </div><div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-red"><i class="fa fa-comments-o"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Comentarios</span>
                      <span class="info-box-number">93,139</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
                  </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
