<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class LoginController extends Controller
{
 
	function index(){
		return view('login.index');
	}

	function verify(Request $request){
		$user = user::where('username', $request->username)
					->where('password', $request->password)
					->first();
		if($user->id > 0)
		{
			//echo($user->id);
			$request->session()->put('id',$user->id);
			$request->session()->put('username',$user->username);
			
			return redirect()->route('user.index');
		}else{

			$request->session()->flash('msg', 'invalid username/password');
			return redirect()->route('login.index');
		}
	}
}


