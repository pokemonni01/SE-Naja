<?php

namespace App\Http\Controllers;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class Home_Controller extends Controller
{
    public function home(){
		return view('homeadvert');
	}

	public function contactrr(){
		return view('contact');
	}
	public function design_goods(){
		return view('design_goods');
	}
	public function registersignup(){
		return view('registersignup');
	}
	public function contactus(){
		return view('contactus');
	}
	public function howtopay(){
		return view('howtopay');
	}
	public function detail_Goods(){
		return view('detail_Goods');
	}
	public function order(){
		return view('order');
	}
	public function information(){
		return view('information');
	}
	public function adminpage(){
		return view('adminpage');
	}
	public function adminadd(){
		return view('adminadd');
	}
	public function categoryall(){
		return view('categoryall');
	}
	public function allproduct(){
		$watch=DB::table('product')->get();

		return view('allproduct',array('watch'=>$watch));
	}
}

?>
