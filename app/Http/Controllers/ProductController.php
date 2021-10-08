<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller{
	
	function index(){
		$this->data['products'] = Product::all();
		return view('product',$this->data);
		
	}
	
	function detail($id){
		$this->data['product'] = Product::find($id);
		return view('detail',$this->data);
		
	}
	
	function AddToCart(Request $req){
		if($req->session()->has('user')){
			$cart = new Cart;
			$cart->user_id=$req->session()->get('user')['id'];
			$cart->product_id=$req->product_id;
			$cart->save();
			return redirect('/');
		}else
			return redirect('/login');
		
	}
	static function cartItem(){
		$userID=Session::get('user')['id'];
		return Cart::where('user_id',$userID)->count();
	}

}

?>