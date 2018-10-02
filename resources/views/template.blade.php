<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta charset="X-UA-compatible" content="IE=edger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Laravel App</title>
	{{--Memanggil Bootstrap. Komentar ini tidak akan tampak di browser --}}
	<link href="{{asset('bootstrap-3.3.5/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}"rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{asset('http://laravelapp/public/js/html5shiv.min.js')}}"></script>
	<script src="{{asset('http://laravelapp/public/js/respond_1_4_2.min.js')}}"></script>
	<![endif]-->
	</head>
	<body>
	<div class="container">
		@include('navbar')
		@yield('main')
	</div>
		@yield('footer')
	<script src="{{asset('js/jquery_2_2_1.min.js')}}"></script>
	<script src="{{asset('bootstrap-3.3.5/js/bootstrap.min.js')}}"></script>
	</body>
<html>