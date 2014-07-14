<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login System</title>
</head>

<body>
	
	@if(Session::has('global'))
		<p> {{ Session::get('global') }} </p>
	@endif

	@include('layout.nav')

	@yield('content')
</body>

</html>