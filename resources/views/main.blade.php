<html>
	<head>
		<meta>
		<title>@yield('title','Default') | Panel de Administracion</title>

		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">	
		<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css')}}">
		<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/dist/ui/trumbowyg.css')}}">
	</head>
	<body>
		<section>
			@yield('content')
			

		</section>
		<script src="{{asset('plugins/jquery/jquery.js')}}"></script>
		<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
		<script src="{{asset('plugins/trumbowyg/dist/trumbowyg.js')}}"></script>
		@yield('js')
	</body>

</html>