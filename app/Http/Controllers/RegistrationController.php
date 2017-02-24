<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    
    public function create()

	{
		return view('registrations.create');
	}


    public function store()

	{

		//validate

		$this->validate(request(),[

			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'

		]);

		//create & Save the user

		$user = User::create(request(['name', 'email', 'password'])); 

		//Sign them in
		auth()->login($user);
		
		//\Auth::login();



		//redirect


		//return redirect()->home();
		return redirect('/');

	}
}
