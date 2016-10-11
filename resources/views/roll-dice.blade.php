@extends('layouts.master')

@section('top-script')
	<title>Roll Dice</title>
@stop

@section('content')
	<h1>Roll Dice Game</h1>
	<p>Dice Roll: {{ $dice_roll }}</p>
	<p>Guess: {{ $guess }}</p>
	<p> {{ $correct ? 'You guessed correctly' : 'Try again' }} </p>
@stop

