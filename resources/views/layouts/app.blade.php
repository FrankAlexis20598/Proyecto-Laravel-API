<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema de Envios</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- AdminLTE css -->
    <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet">
    <!-- AdminLTE Skin -->
    <link href="{{ asset('dist/css/skins/skin-blue.min.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                <!-- mini logotipo para la barra lateral mini 50x50 píxeles -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo para estado regular y dispositivos móviles -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toogle button -->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Mensajes: el estilo se puede encontrar en dropdown.less -->
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Tienes 4 mensajes</li>
                                <li>
                                    <!-- menú interno: contiene los mensajes -->
                                    <ul class="menu">
                                        <li><!-- Start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!-- Imagen del usuario -->
                                                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="Imagen del usuario">
                                                </div>
                                                <!-- Título del mensaje y marca de tiempo -->
                                                <h4>
                                                    Equipo de Soporte
                                                    <small><i class="fa fa-clock-o"></i> 5 minutos</small>
                                                </h4>
                                                <!-- El mensaje -->
                                                <p>¿Por qué no comienzas a programar?</p>
                                            </a>
                                        </li>
                                        <!-- End message -->
                                    </ul>
                                    <!-- / .menu -->
                                </li>
                                <li class="footer"><a href="#">Ver todos los mensajes</a></li>
                            </ul>
                        </li>
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        <li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Tienes 10 notificaciones</li>
                                <li>
                                    <!-- Menú interno: contiene las notificaciones -->
                                    <ul class="menu">
                                        <li><!-- Start notification -->
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 nuevos miembros se unieron hoy
                                            </a>
                                        </li>
                                        <!-- End notification -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Ver todo</a></li>
                            </ul>
                        </li>

                        <!-- Tasks Menu -->
                        <li class="dropdown tasks-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Tienes 9 tareas</li>
                                <li>
                                    <!-- Menú interno: contiene las tareas -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <!-- Título de la tarea y texto de progreso -->
                                                <h3>
                                                    Diseña algunos botones
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <!-- La barra de progreso -->
                                                <div class="progress xs">
                                                    <!-- Cambiar el atributo de ancho css para simular el progreso -->
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- End task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">Ver todas las tareas</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Menu de cuenta de Usuario -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- La imagen del usuario en la barra de navegación -->
                                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="Imagen de Usuario">
                                <!-- hidden-xs oculta el nombre de usuario en dispositivos pequeños para que solo aparezca la imagen. -->
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- La imagen del usuario en el menú -->
                                <li class="user-header">
                                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="Imagen de Usuario">
                                    <p>
                                        {{ Auth::user()->name }} - Administrador
                                        <small>Miembro desde Nov. 2017</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Seguidores</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Ventas</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Amigos</a>
                                        </div>
                                    </div>
                                    <!-- /.row-->
                                </li>
                                <!-- Menu Footer -->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Perfíl</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar Sesión</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <!-- Columna del lado izquierdo contiene el logo y la barra lateral -->
        <aside class="main-sidebar">
            <!-- barra lateral: el estilo se puede encontrar en sidebar.less -->
            <section class="sidebar">
                <!-- Panel de usuario de la barra lateral (opcional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" alt="Imagen de Usuario" class="img-circle">
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->name }}</p>
                        <!-- Estado -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Módulos</li>
                    <!-- Opcionalmente, puede agregar iconos a los enlaces -->
                    <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
                    <li><a href="#"><i class="fa fa-link"></i> <span>Otro Link</span></a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i><span>Multinivel</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Link de nivel 2</a></li>
                            <li><a href="#">Link de nivel 2</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contiene el contenido de la pagina -->
        <div class="content-wrapper">
            <!-- Content Header (Cabecera de la pagina) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Vista principal del sistema.</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Contenido Principal -->
            <section class="content container-fluid">
                <div id="app">
                    @yield('content')
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Pie de Pagina -->
        <footer class="main-footer">
            <!-- A la derecha -->
            <div class="pull-right hidden-xs">
                Anything you want
            </div>
            <!-- Predeterminado a la izquierda -->
            <strong>Copyright &copy; 2018 <a href="#">Company</a>.</strong> Todos los derechos reservados.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- AdminLTE js -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
