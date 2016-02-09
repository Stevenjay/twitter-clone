<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') - Twitter Clone</title>
	<meta name="description" content="@yield('meta-description')">

<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0 auto;
                padding: 0;
                width: 80%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

        </style>

</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/contact">Contact Us</a></li>
			<li><a href="/register">Register</a></li>
			<li><a href="/login">Login</a></li>
		</ul>
	</nav>
	@yield('content')
</body>
</html>