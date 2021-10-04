<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller{
	
	function login(Request $req){
		$user = User::where(['email'=>$req->email])->first();
		//echo Hash::make($req->input('password')).'<br/>'.$user->password;exit;
		//return $req->input();
		if($user && Hash::check($req->password,$user->password)){
			$req->session()->put('user',$user);
			return redirect('/');
		}else
		return "Incorrect Username or Password";
	}

}

?>