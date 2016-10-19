@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Posts</h1>
	<div class='container'>
		@foreach($results as $result)
		<div class="row table">
			<tr>
				<h4><td> {{$result->title}} </td></h4>
				<br>
				<td> {{$result->content}} </td>
				<br>
				<td> {{$result->url}} </td>
				<br>
			</tr>
		</div>
		@endforeach
		{!! $results->appends(['searchQuery' => Request::get('searchQuery')])->render() !!}
	</div>
</div>
@stop