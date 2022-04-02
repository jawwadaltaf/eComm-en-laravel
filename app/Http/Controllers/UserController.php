<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller{
	
	// function __construct(){
	// 	parent::__construct();
		
	// }
	
	function login(UserRequest $req){
		$req->validated();

		$user = User::where(['email'=>$req->email])->first();
		echo Hash::make($req->input('password')).'<br/>'.$user->password;exit;
		return $req->input();
		if($user && Hash::check($req->password,$user->password)){
			$req->session()->put('user',$user);
			return redirect('/');
		}else
		return "Incorrect Username or Password";
	}
	
	// function register(Request $req){
		
	// 	$user = new User;
	// 	$user->name = $req->name;
	// 	$user->email = $req->email;
	// 	$user->password = Hash::make($req->password);
	// 	$user->save();
		
	// 	return redirect('/login');
		
	// }

}

?>