<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Code Template</title>
	<link rel="stylesheet" href="/css/app.css">
	<meta name="viewport" content="width=device-width initial-scale=1">
</head>
<body>

<nav>@include('layout.nav')</nav>

<div class="Wrapper">
	@yield('content')
</div>

</body>
</html>