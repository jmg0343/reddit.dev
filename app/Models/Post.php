<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Post extends BaseModel
{
	protected $table = 'posts';
	
	public function user()
	{
		return $this->belongsTo('App\User', 'created_by', 'id');
	}

	public function votes()
	{
		return $this->hasMany('App\Models\Vote');
	}

	public function upVotes()
	{
		return $this->votes()->where('vote', 1);
	}

	public function downVotes()
	{
		return $this->votes()->where('vote', 0);
	}

	public function voteScore()
	{
		return $this->upVotes()->count() - $this->downVotes()->count();
	}

	public static function search($searchTerm)
	{
		return self::where('title', 'LIKE', '%' . $searchTerm . '%')
					->orWhere('content', 'LIKE', '%' . $searchTerm . '%')
					->orWhere('url', 'LIKE', '%' . $searchTerm . '%');
	}
}
