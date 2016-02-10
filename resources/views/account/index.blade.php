@extends('master')

@section('title', 'Account')
@section('meta-description', 'Your Account Page')

@section('content')

<h1>Hi {{ \Auth::user()->name }}</h1>

@endsection