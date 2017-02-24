<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    

	protected $fillable = ['user_id', 'title', 'body'];


	public function comments()	

		{


			return $this->hasMany(Comment::class);


		}




		public function user()  //now we can use this $comment->user->name

			{

				return $this->belongsTo(User::class); 
			}





		public function addComment($body)

			{
				$this->comments()->create(compact('body'));

	    		// Comment::create([

	    		// 		'body' => $body,
	    		// 		'post_id' => $this->id

	    		// 	]);
			}
}
