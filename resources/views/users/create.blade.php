@extends('layouts.master')

@section('content')
	<form class="form" method="POST" action="{{ action('UsersController@store') }}">
		{!! csrf_field() !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('name') }}">
		Email: <input class="form-control" type="text" name="email" value="{{ old('email') }}">
		Password: <input class="form-control" type="text" name="password" value="{{ old('password') }}">
		<input class="btn-success btn" type="submit">
	</form>
@stop