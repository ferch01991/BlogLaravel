<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Panel de administracion</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<style type="text/css"></style>
</head>
<body class="admin-body">
<br>

<div class="container">
	@include('admin.template.static.nav')
	<div class="panel panel-primary">

	<div class="panel-heading">@yield('title', 'Default')</div>
		<div class="panel-body">
			@include('flash::message')
			@include('admin.template.static.errors')
			@yield('content')
		</div>
	</div>
	@include('admin.template.static.footer')	
</div>


<script src="{{ asset('plugins/jquery/js/jquery-2.1.4.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>