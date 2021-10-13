<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

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
	
	function cartlist(){
		//DB::enableQueryLog();
		$userId=Session::get('user')['id'];
		$this->data['products'] = DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->select('products.*')->get();
		/*$query =DB::getQueryLog();
		echo "<pre>";
		echo $query[0]['query'];
		echo "</pre>";
		exit;*/
		return view('cartlist',$this->data);
	}

}

?>