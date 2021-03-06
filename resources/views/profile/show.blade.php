@extends('master')

@section('title', '')

@section('meta-description', '')

@section('content')

	<header id="user-profile">
		<img id="profilepic" src="/profiles/{{ $user->profileImage }}" alt="" width="240" >
		<h1>{{ $user->name }}</h1>
		<p>{{ $user->description }}</p>
		<ul id="profilestats">
			<li>Total Tweets:{{ $user->tweets->count() }}</li>
			<li></li>
			<li></li>
		</ul>
	</header>

	@if(count($errors))
	COMMENT FORM INVALID	
	@endif

@foreach( $userPosts as $tweet )

	<article class="tweet">
		<hr>
		<p>{{ $tweet->content }}</p>
		<small>Posted: {{ $tweet->created_at }} by {{ $tweet->user->name }}</small>
		@if(\Auth::check() && $tweet->user->id == \Auth::user()->id) 
		<a href="/profile/delete-tweet/{{ $tweet->id }}">Delete</a>
		@endif

		@foreach( $tweet->tags as $tag )
		<strong>#{{ $tag->name }}</strong>	
		@endforeach

		<h2>Comments: </h2>

		@if(\Auth::check())

		<form action="/profile/new-comment" method="post">
			
		{!! csrf_field() !!}

		<input type="hidden" name="tweet-id" value="{{ $tweet->id }}">

		<label for="comment">Comment: </label>
		<textarea name="comment" id="comment" cols="30" rows="10"></textarea>

		<input type="submit" value="Reply">

		</form>
		@endif

		@forelse( $tweet->comments as $comment )
		<article class="comment">
			<p>{{ $comment->content }}</p>
			<small>Written by {{ $comment->user->name }}</small>
		</article>
		@empty
		<p>Reply First</p>
		@endforelse
		<hr>
	</article>

@endforeach

@endsection