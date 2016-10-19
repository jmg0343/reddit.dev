@extends('layouts.master')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		@if($errors->has('title'))
			<div class="alert alert-danger">
            	{{ $errors->first('title') }}
			</div>
		@endif
		Content: <textarea class="form-control" name="content" rows="5" cols="40">{{ old('content') }}</textarea>
		@if($errors->has('content'))
			<div class="alert alert-danger">
		    	{{ $errors->first('content') }}
			</div>
		@endif
		URL: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
		@if($errors->has('url'))
			<div class="alert alert-danger">
           		{{ $errors->first('url') }}
			</div>
		@endif
		<input class="btn-success btn" type="submit">
	</form>
@stop
         