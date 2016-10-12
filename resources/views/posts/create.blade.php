@extends('layouts.master')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		Content: <textarea class="form-control" name="content" rows="5" cols="40">{{ old('content') }}</textarea>
		URL: <input class="form-control" type="text" name="url" value="{{ old('title') }}">
		<input class="btn-success btn" type="submit">
	</form>
@stop