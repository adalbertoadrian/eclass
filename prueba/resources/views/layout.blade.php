<!DOCTYPE html>
<html lang="es">
<?php
$week_days = array ("Domingo", "Lunes", "Martes", "Mi&eacute;rcoles", "Jueves", "Viernes", "S&aacute;bado");
$months = array ("","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$year_now = date ("Y");
$month_now = date ("n");
$day_now = date ("j");
$week_day_now = date ("w");
$date = $week_days[$week_day_now] . " " . $day_now . " de " . $months[$month_now] . " de " . $year_now;
?>
<head>
    <meta charset="UTF-8">
    <title>Eclass</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheets/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheets/sb-admin-2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheets/estilos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheets/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheets/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Indie+Flower">
    <!-- JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; box-shadow:0px 2px 5px">
    <div class="navbar-header">
        <div class="fecha text text-muted">{{ $date }}</div>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="menu-item">
                    <a href="{{ asset('/') }}"><i class="fa fa-circle-o"></i> Inicio</a>
                </li>
                <li class="menu-item">
                    <a href="{{ asset('vista1') }}"><i class="fa fa-circle-o"></i> Vista1</a>
                </li>
                <li class="menu-item">
                    <a href="{{ asset('vista2') }}"><i class="fa fa-circle-o"></i> Vista2</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>

<!-- /.navbar-static-side -->
</nav>

@yield('content')

</body>
</html>