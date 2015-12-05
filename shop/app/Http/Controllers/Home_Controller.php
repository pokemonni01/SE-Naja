<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

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

	public function login(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$author = DB::table('member')->where('member_username', $username)->first();
		if($author != NULL){
			if(strcmp($author->member_password, $password)==0){
				$_SESSION['member_status'] = $author->member_status;
				$_SESSION['member_id'] = $author->member_id;
			}
		}
		return redirect('/');
	}//end login

	public function logout(){
		unset($_SESSION['member_status']);
		unset($_SESSION['member_id']);
		return redirect('/');
	}

}

?>
