@extends('master')

@section('title', 'Are Your Sure You Want to delete')

@section('meta-description', 'Say Goodbye to your tweet')

@section('content')

<h1>Are you sure you want to delete this tweet?</h1>

<p>You are about to delete: </p>

<articel>
	<p>{{ $tweet->content }}</p>
	<small>Written by {{ $tweet->user->name }} on {{ $tweet->created_at }}</small>
</articel>

<a href="/profile/delete-tweet/{{ $tweet->id }}/confirm">Yes</a> | <a href="/profile/{{ $tweet->user->username }}">No, take me back</a>

@endsection