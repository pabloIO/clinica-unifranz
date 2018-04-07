<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clínica Unifranz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}" >
	<!-- CSS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/materialize/dist/css/materialize.min.css') }} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
	<!-- -->
	<!-- <base href="/login"> -->
</head>
<body>
		<nav class="white">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo center"><img src="images/logo.png" style="height:55px;width:auto;margin-top:10px;" alt=""></a>
					<a href="#" data-activates="mobile" class="button-collapse"><i class="fa fa-bars fa-2x" style="color:#bdbdbd;"></i></a>
						<a id="biggerScreen" href="#" data-activates="mobile" class="button-collapse"><i class="fa fa-bars fa-2x" style="color:#bdbdbd;"></i></a></li>
					<ul class="side-nav" id="mobile">
						<li class="right"><a href="#" onclick="closeNav()"><i class="fa fa-times"></i></a></li>
						<li><a href="http://localhost:8000/"><i class="fa fa-home"></i> Inicio</a></li>
						<li><a href="http://localhost:8000/campanas"> Nuestras campañas</a></li>
						<li><a href="http://localhost:8000/servicios">Nuestros servicios</a></li>
						<li><a href="http://localhost:8000/quien-somos">¿Quiénes somos?</a></li>
						<li><a href="http://localhost:8000/consulta">Reservar una consulta</a></li>
						</ul>
				</div>
		</nav>
