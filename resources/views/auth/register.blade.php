@extends('master')

@section('title', 'Register')
@section('meta-description', 'Sign up for a twitter account')

@section('content')

<h1>Register new account</h1>

<form action="/register" method="post">

{!! csrf_field() !!}

	<div>
		<label for="name">Full name: </label>
		<input type="text" name="name" id="name" placeholder="Howard Stern">
	</div>

	<div>
		<label for="email">E-mail: </label>
		<input type="email" name="email" id="email" placeholder="howard@sirius.com">
	</div>

	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" id="password">
	</div>

	<div>
		<label for="password_confirmation">Confirm password: </label>
		<input type="password" name="password_confirmation" id="password_confirmation">
	</div>

	<input type="submit" value="Register">

</form>

@if(count($errors))
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

@endsection