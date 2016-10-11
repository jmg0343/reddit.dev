<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function rollDice($guess)
    {
		$data['dice_roll'] = mt_rand(1, 6);
		$data['guess'] = $guess;
		$data['correct'] = $data["dice_roll"] == $data["guess"];
		return view('roll-dice')->with($data);
    // 	$numberOfRolls = 6;
	   //  $rolls = [];
	   //  for ($i = 0; $i < $numberOfRolls; $i++) {
	   //      $rolls[] = mt_rand(1,6);
	   //  }

	   //  return view('roll-dice')->with([
	   //      'rolls' => $rolls,
	   //      'guess' => $guess,
	   //  ]);

    }

    public function increment($number)
    {
    	$data['number'] = $number;
		$data['incremented'] = $number + 1;
		return view('increment')->with($data);
    }

    public function uppercase($word)
    {
    	$data['word'] = $word;
		$data['upperCaseString'] = strtoupper($word);
		return view('uppercase')->with($data);
    }
}