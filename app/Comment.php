<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model

{
	protected $fillable = ['user_id', 'body', 'post_id'];

	public function post()
	{
		//defining Comment model's relationship (Think RDBMS Concept) with post model
		return $this->belongsTo(Post::class); //Now we can use $comment->post->user
	}


	public function user()  //now we can use this $comment->user->name

	{
		return $this->belongsTo(User::class); 
	}
}
