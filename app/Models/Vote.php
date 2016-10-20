<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
	protected $table = 'votes';
	protected $fillable = ['user_id', 'post_id'];
	
	public function user()
	{
		return $this->belongsTo('App\User', 'created_by', 'id');
	}

	public function posts()
    {
        return $this->belongsTo('App\Models\Post', 'created_by');
    }
}

?>
