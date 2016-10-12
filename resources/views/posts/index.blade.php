@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Posts</h1>
	<div class='container'>
		@foreach($posts as $post)
		<div class="row">
			<tr>
				<td> {{$post->title}} </td>
				<td> {{$post->url}} </td>
				<td> {{$post->content}} </td>
			</tr>
		</div>
		@endforeach
	</div>
</div>
@stop