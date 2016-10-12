@extends('layouts.master')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@update', $post->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		Title: <input class="form-control" type="text" name="title" value="{{ (old('title') == null) ? $post->title : old('title') }} ">
		Content: <textarea class="form-control" name="content" rows="5" cols="40" > {{ (old('title') == null) ? $post->title : old('title') }} </textarea>
		URL: <input class="form-control" type="text" name="url" value="{{ (old('title') == null) ? $post->title : old('title') }}">
		<input class="btn-success btn" type="submit">
	</form>
@stop
