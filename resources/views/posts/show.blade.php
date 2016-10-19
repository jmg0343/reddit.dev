@extends('layouts.master')

@section('content')

<div class="container">
	<h1>Posts</h1>
	<div class='container'>
		<div class="row">
				<div class="col-sm-6">
					<h4><td>{{$post->title}}</td></h4>
					{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}
					<div>
						<p>{{ $post->content }}</p>	

					<form method="POST" action="{{ action('PostsController@vote') }}">
						{!! csrf_field() !!}
				        <div class="form-group">
				          	<input type="hidden" name="postId" value="{{ $post->id }}">
				          	<input type="hidden" name="voteValue" value="1">
				        </div>
				        <button type="submit" class="btn btn-default glyphicon glyphicon-thumbs-up"></button>
					</form>	

					<form method="POST" action="{{ action('PostsController@vote') }}">
						{!! csrf_field() !!}
				        <div class="form-group">
				          	<input type="hidden" name="postId" value="{{ $post->id }}">
				          	<input type="hidden" name="voteValue" value="0">
				        </div>
				        <button type="submit" class="btn btn-default glyphicon glyphicon-thumbs-down"></button>
					</form>	

					</div>
				</div>
				<div class="col-sm-6">
					<img src="http://fillmurray.com/400/600" class="pull-right"/>
				</div>
		</div>
	</div>
</div>
	
@stop