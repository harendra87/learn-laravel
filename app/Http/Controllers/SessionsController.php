<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest', ['except' => 'destroy']);
	}

    public function create()
    {
    	return view('sessions.create');
    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }

    public function store()
	{
		$this->validate(request(), [
 			'email' => 'required|email',
 			'password' => 'required'
 		]);

 		
		//dd(request()->all());
		dd(auth()->attempt(request(['email', 'password'])));
		if (auth()->attempt(request(['email', 'password'])))
		{
			return redirect()->home();
			
		}


		return back()->withErrors([
			'message' => 'Please check your credentials and try again.'
		]);

    }
}
