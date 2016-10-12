@extends('layouts.master')

@section('content')
	<h1> {{ $post->title }} </h1>
	<p> {{ $post->content }} </p>
	<a href="{{ $post->url }}">Go Here</a>
@stop