<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	@include('partials.navbar')
	<div class="container">
    	@yield('content')
    </div>
    @include('partials.footer')
</body>
</html>