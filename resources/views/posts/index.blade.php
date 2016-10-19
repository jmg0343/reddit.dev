@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Posts</h1>
	<div class='container'>
		@foreach($posts as $post)
		<div class="row table well">
			<tr>
				<div class="col-sm-3">
					<img src="http://fillmurray.com/250/200" />
					<h4><td>{{$post->title}}</td></h4>
				</div>
				<div class="col-sm-3">
					<td> {{$post->content}} </td>
				</div>
				<div class="col-sm-3">
					<td> <a href="{{ $post->url }}" target="_blank">{{$post->url}} </td></a>
				</div>
				<div class="col-sm-3">
					<a href="{{ action('PostsController@show', $post->id) }}">See Post</a>
					<p>{{ $post->created_at->diffForHumans() }}</p>							
				</div>
			</tr>
		</div>
		@endforeach
		{!! $posts->render() !!}
	</div>
</div>
@stop

