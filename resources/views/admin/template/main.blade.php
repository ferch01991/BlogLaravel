<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Panel de administracion</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>

	@include('admin.template.static.nav')

	<section>
		@yield('content')
	</section>
	

	<script src="{{ asset('plugins/jquery/js/jquery-2.1.4.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>