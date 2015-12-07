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

class Login_Controller extends Controller
{
    public function login(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$authen = DB::table('member')->where('member_username', $username)->first();
		if($authen != NULL){
			if(strcmp($authen->member_password, $password)==0){
				$_SESSION['member_status'] = $authen->member_status;
				$_SESSION['member_id'] = $authen->member_id;
				$_SESSION['productInCart']['product_total'] = 0;
			}
		}
		return redirect('/');
	}//end login

	public function logout(){
		unset($_SESSION['productInCart']);
		unset($_SESSION['member_status']);
		unset($_SESSION['member_id']);
		return redirect('/');
	}
}

?>
