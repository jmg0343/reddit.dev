@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Posts</h1>
	<div class='container'>
		@foreach($results as $result)
		<div class="row table">
			<tr>
				<div class="col-sm-3">
					<img src="http://fillmurray.com/250/200" />
					<h4><td>{{$result->title}}</td></h4>
				</div>
				<div class="col-sm-3">
					<td> {{$result->content}} </td>
				</div>
				<div class="col-sm-3">
					<td> <a href="{{ $result->url }}" target="_blank">{{$result->url}} </td></a>
				</div>
				<div class="col-sm-3">
					<a href="{{ action('PostsController@show', $result->id) }}">See Post</a>
					<p>{{ $result->created_at->diffForHumans() }}</p>							
				</div>
			</tr>
		</div>
		@endforeach
		{!! $results->appends(['searchQuery' => Request::get('searchQuery')])->render() !!}
	</div>
</div>
@stop