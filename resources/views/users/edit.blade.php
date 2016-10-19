@extends('layouts.master')

@section('content')
	<form class="form" method="POST" action="{{ action('UsersController@update', $user->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		Name: <input class="form-control" type="text" name="name" value="{{ (old('name') == null) ? $user->name : old('name') }} ">
		@if($errors->has('name'))
			<div class="alert alert-danger">
            	{{ $errors->first('name') }}
			</div>
		@endif
		Email: <input class="form-control" type="text" name="email" value="{{ (old('email') == null) ? $user->email : old('email') }} ">
		@if($errors->has('email'))
			<div class="alert alert-danger">
            	{{ $errors->first('email') }}
			</div>
		@endif
		New Password: <input class="form-control" type="password" name="password">
		@if($errors->has('password'))
			<div class="alert alert-danger">
            	{{ $errors->first('password') }}
			</div>
		@endif
		Confirm Password: <input class="form-control" type="password" name="confirmPassword">
		@if($errors->has('confirmPassword'))
			<div class="alert alert-danger">
            	{{ $errors->first('confirmPassword') }}
			</div>
		@endif
		<input class="btn-success btn" type="submit">
	</form>
@stop