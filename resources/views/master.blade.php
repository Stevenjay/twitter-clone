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

            #profilepic {
            	float: left;
            }

            #profilestats {
            	clear: both;
            	margin-left: 40px;
            }

        </style>

</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/contact">Contact Us</a></li>
			@if(\Auth::check())
			<li><a href="/logout">Logout</a></li>
			@else
			<li><a href="/register">Register</a></li>
			<li><a href="/login">Login</a></li>
			@endif
		</ul>
	</nav>
	@yield('content')
</body>
</html>