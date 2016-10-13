@extends('layouts.master')

@secction('content')
<div class="container">
	<h1>Users</h1>
	<div class='container'>
		@foreach($users as $user)
		<div class="row table table-bordered">
			<tr>
				<td> {{$user->name}} </td>
				<td> {{$user->email}} </td>
				<td> {{$user->password}} </td>
				<a href="{{ action('UsersController@show', $user->id) }}">Go Here</a>
			</tr>
		</div>
		@endforeach
	</div>
</div>
@stop