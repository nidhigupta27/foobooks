<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Foobooks')</title>
	<meta charset='UTF-8'>

	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href='/css/foobooks.css'>
	@yield('head')
</head>
<body>
	<a href="/"><img class="logo" src="Images\foo-img.png" alt="Foobook image" /></a>
	<a href="">View on Github</a>
	<nav>
		<ul>
              <li><a href="/list">List all Books</a></li>
              <li><a href="/add">Add book</a></li>
		</ul>
	</nav>
	@yield('content')
	@yield('body')
</body>
</html>