<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
</head>
<body>
	<h1>Welcome TO Gallery {{ session('uname') }}</h1>

	<br>
	<a href="{{route('gallery.create')}}">Add Picture</a> |
	<a href="{{ route('gallery.show') }} ">Show Gallery</a> |
	<a href="{{ route('logout.index') }}">logout</a>

</body>
</html>