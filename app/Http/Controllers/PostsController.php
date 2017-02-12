<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class PostsController extends Controller
{
    
	public function index()

		{

		return view('posts.index');

		}


	public function show()
	
		{

		return view('posts.show');

		}

	public function create()
	
		{

		return view('posts.create');

		}	


	public function store()
	
		{

			//validation

			$this-> validate(request(),[

				'title' =>'required'	,

				'body' => 'required'


				]);


			//creates new post using the request data and save it to the database

			Post::create( request(['title','body'])); 



			//And then redirect to the home page

			return redirect('/');

		}	
}
