<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Home_Controller extends Controller
{
    public function home(){
		return view('home');
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
}

?>
