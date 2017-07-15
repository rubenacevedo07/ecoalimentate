<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <i class="sr-only">Toggle navigation</i> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="{{url('/')}}">
                <img src="{{asset('img/mainlogo.jpg')}}" class="img-responsive mainlogo"/>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Institucional <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('institucional')}}">Quiénes Somos</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('nuestros-objetivos')}}">Nuestros Objetivos</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('definiciones')}}">Nuestras Definiciones</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('mapa')}}">Nuestro mapa de la <br>Soberanía Alimentaria</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('enlaces-sugeridos')}}">Enlaces Sugeridos</a></li>
                        </ul>
                </li>
                <li class="dropdown">
                    <a href="./" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Novedades <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('noticias')}}">Noticias</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('agenda')}}">Agenda</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('recetas')}}">Recetas</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('recursos-audiovisuales')}}">Recursos Audiovisuales</a></li>
                        </ul>
                </li>
                <li>
                    <a class="page-scroll" href="{{url('contacto')}}">Contacto</a>
                </li>
                

                @if (Auth::guest())
                            <li>
                                <a class="page-scroll" href="{{url('registrarse')}}">Registrarse</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="{{url('ingresar')}}">Ingresar</a>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>{{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{url('admin/dashboard')}}">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>