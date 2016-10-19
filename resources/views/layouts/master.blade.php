<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	@include('partials.navbar')
	<div class="container">

		@if(session()->has('SUCCESS_MESSAGE'))
			<div class="alert alert-success">
				<p>{{ session('SUCCESS_MESSAGE') }}</p>
			</div>
		@endif
		
		@if(session()->has('ERROR_MESSAGE'))
			<div class="alert alert-success">
				<p>{{ session('ERROR_MESSAGE') }}</p>
			</div>
		@endif

    	@yield('content')
    	
    </div>
    @include('partials.footer')
</body>
</html>