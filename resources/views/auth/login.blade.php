@extends('master')

@section('title', 'Login')
@section('meta-description', 'Login to your twitter acount')

@section('content')

<h1>Login</h1>

<form action="/login" method="post">

{!! csrf_field() !!}

<div>
	<label for="email">Email: </label>
	<input type="email" name="email" placeholder="howard@sirius.com" value="{{ old('email') }}  " id="email">
</div>

<div>
	<label for="password">Password: </label>
	<input type="password" name="password" id="password">
</div>

<input type="submit" value="Login">

</form>

@if(count($errors))
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

@endsection