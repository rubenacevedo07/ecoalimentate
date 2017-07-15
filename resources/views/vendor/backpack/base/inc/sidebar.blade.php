@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="http://placehold.it/160x160/00a65a/ffffff/&text={{ Auth::user()->name[0] }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          
          @if(Auth::user()->hasRole('productor'))
               <li><a href="{{ url('admin/mimercado') }}"><i class="fa fa-address-card" aria-hidden="true"></i> <span>Mi Mercado</span></a></li>
           
          @endif

          @can('gestion-mercados')
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Emprendimientos</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/mercadoadmin/create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Cargar Mercado</span></a></li>
              <li><a href="{{ url('admin/mercadoadmin') }}"><i class="fa fa-address-card" aria-hidden="true"></i> <span>Mercados</span></a></li>
              <li><a href="{{ url('admin/pendientes') }}"><i class="fa fa-toggle-off" aria-hidden="true"></i><span>Mercados Pendientes</span></a></li>
              <li><a href="{{ url('admin/productos') }}"><i class="fa fa-beer" aria-hidden="true"></i> <span>Productos</span></a></li>
              <li><a href="{{ url('admin/mercadocategories') }}"><i class="fa fa-bookmark-o" aria-hidden="true"></i><span>Categorías</span></a></li>
            </ul>
          </li>
          @endcan
          @can('gestion-noticias')
         <li class="treeview">
            <a href="#"><i class="fa fa-book"></i> <span>Noticias</span> <i class="fa fa-angle-left pull-right"></i></a>
           
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/news') }}"><i class="fa fa-newspaper-o"></i> Noticias</a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/categories') }}"><i class="fa fa-pencil-square-o"></i> Categorías</a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/tags') }}"><i class="fa fa-tags"></i> Tags</a></li>
            </ul>
            
          </li>
          @endcan
          @can('gestion-usuarios')
         <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Usuarios, Roles, Permisos</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/user') }}"><i class="fa fa-user"></i> <span>Usuarios</span></a></li>
              <li><a href="{{ url('admin/roles') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              @can('super-admin')
              <li><a href="{{ url('admin/permissions') }}"><i class="fa fa-key"></i> <span>Permisos</span></a></li>
              @endcan
            </ul>
          </li>
          @endcan
          @can('gestion-recursos')
            <li><a href="{{ url('admin/recursos') }}"><i class="fa fa-video-camera" aria-hidden="true"></i> <span>Recursos</span></a></li>
           @endcan
          
          <!--
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>Archivos</span></a></li>
          -->
          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
