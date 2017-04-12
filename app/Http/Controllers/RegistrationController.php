<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegistrationController extends Controller
{
 	public function create()
 	{
 		return view('registration.create');
 	}


 	public function store()
 	{
 		$this->validate(request(), [
 			'name' => 'required',
 			'email' => 'required|email',
 			'password' => 'required|confirmed'
 		]);


 		$user = User::Create(request(['name', 'email', 'password']));


 		auth()->login($user);

 		return redirect()->home();
 	}
}


