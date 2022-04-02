<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller{
	
	function __construct(){
		parent::__construct();
		echo 'hh';
		
	}

}

?>