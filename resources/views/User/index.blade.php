<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<h1>Welcome home! {{ session('uname') }}</h1>

	<br>
	<a href="{{route('gallery.index')}}">Go to Gallery</a> |
	<a href=" ">Other options</a> |
	<a href="{{ route('logout.index') }}">logout</a>

</body>
</html>