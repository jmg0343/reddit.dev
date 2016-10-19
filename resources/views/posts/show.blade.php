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
					</div>
				</div>
				<div class="col-sm-6">
					<img src="http://fillmurray.com/400/600" class="pull-right"/>
				</div>
		</div>
	</div>
</div>


		{{-- 	<h1 class="pull-left">{{ $post->title }}</h1>
			<p>{{ $post->content }}</p>
			{{ $post->url }}
			{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}
			{{ $post->updated_at->format('l, F jS Y @ h:i:s A') }}
			{{ $post->user->name }} --}}
		
	
	{{-- <button type="submit" class="btn-success btn"><a href="{{ $post->url }}">Website</a></button> --}}
	
	
@stop