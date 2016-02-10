@extends('master')

@section('title', '')

@section('meta-description', '')

@section('content')

	<header id="user-profile">
		<img id="profilepic" src="" alt="" width="120" height="120">
		<h1>{{ $user->name }}</h1>
		<p>{{ $user->description }}</p>
		<ul id="profilestats">
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</header>


@endsection