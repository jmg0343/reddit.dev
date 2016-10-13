@extends('layouts.master')

@section('content')
	<h1> {{ $post->title }} </h1>
	<p> {{ $post->content }} </p>
	<a href="{{ $post->url }}">Go Here</a>
	<br>
	<a href="{{ action('PostsController@edit', $post->id) }}">Edit Here</a>
	<br>
	<form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
		{!! csrf_field() !!}
		{!! method_field('DELETE') !!}
		<button type="submit" class="btn-success btn">DELETE</button>
	</form>
@stop
