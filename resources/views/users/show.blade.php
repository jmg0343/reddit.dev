@extends('layouts.master')

@section('content')
	<h1> {{ $user->name }} </h1>
	<p> {{ $user->email }} </p>
	<br>
	<a href="{{ action('UsersController@edit', $user->id) }}">Edit Here</a>
@stop