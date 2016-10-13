@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Posts</h1>
	<div class='container'>
		@foreach($posts as $post)
		<div class="row table table-bordered">
			<tr>
				<td> {{$post->title}} </td>
				<td> {{$post->url}} </td>
				<td> {{$post->content}} </td>
				<a href="{{ action('PostsController@show', $post->id) }}">Go Here</a>
			</tr>
		</div>
		@endforeach
		{!! $posts->render() !!}
	</div>
</div>
@stop