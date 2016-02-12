@extends('master')

@section('title', 'Account')
@section('meta-description', 'Your Account Page')

@section('content')

<h1>Hi {{ \Auth::user()->name }}</h1>

<h2>Your Stats:</h2>
<ul>
	<li>Total Tweets: {{ $totalTweets }}</li>
</ul>

	<h2>Add a new profile image.</h2>

	<form action="/profile/new-profile-image" method="post" enctype="multipart/form-data">
		
		{!! csrf_field() !!}
		<input type="file" name="photo" required>
		<input type="submit" value="Upload">

	</form>

<h2>Write a tweet</h2>

<form action="/profile/new-tweet" method="post">

	{!! csrf_field() !!}

	<div>
		<label for="content">Tweet: </label>
		<textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
	</div>

	<div>
		<label for="tags">Tags: </label>
		<textarea name="tags" id="tags" placeholder="#jquery #javascript #php">{{ old('tags') }}</textarea>
	</div>

	<input type="submit" value="Tweet">

</form>

@if(count($errors))
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

@endsection