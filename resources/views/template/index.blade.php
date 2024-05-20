<!DOCTYPE html>
<html lang="es-MX">
<head>
	<title>Centro 125</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.svg') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('vendor/bootstrap/css/bootstrap.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('fonts/fontawesome-5.0.8/css/fontawesome-all.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('fonts/iconic/css/material-design-iconic-font.min.css') !!}">
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="{!! asset('vendor/animate/animate.css') !!}">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('vendor/css-hamburgers/hamburgers.min.css') !!}">
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="{!! asset('vendor/animsition/css/animsition.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('css/util.min.css') !!}">
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}">
<!--===============================================================================================-->
   <!-- Estilos de paginación de Laravel -->
   <link href="{{ asset('vendor/pagination/pagination.css') }}" rel="stylesheet">
    
</head>

<body class="animsition">

    @include('template.header')
    @yield('content')
	@include('template.footer')
<!--===============================================================================================-->
    <script src="{!! asset('vendor/jquery/jquery-3.2.1.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('vendor/animsition/js/animsition.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('vendor/bootstrap/js/popper.js') !!}"></script>
	<script src="{!! asset('vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('js/main.js') !!}"></script>

</body>
</html>
