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
	public function register(){
		return view('register.register2');
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
	public function watchchoosesex(){
		return view('watchchoosesex');
	}

	public function showProduct($id){
		$product =DB::table('product')->where('product_type',$id)->get();
		$product_type = DB::table('product_type')->where('type_id',$id)->first();
		return view('allproduct',array('product'=>$product,'product_type'=>$product_type));
	}

		public function submit(){
	
		if(($_POST['user_mail'] != ($_POST['user_mail2'])) || $_POST['capcha'] != "5789" || $_POST['user_password'] != $_POST['user_password2'] )
		{	
				//return view('register');
				
		}
		else
		{	
				$table = DB::table('member')->get();
				$id = 'M'.(sizeof($table)+1);
				DB::table('member')->insert(
    			[	'member_name' 		=> $_POST['user_Firstname'],
    				'member_lastname' 	=> $_POST['user_lastname'],
    				'member_username' 	=> $_POST['user_name'],
    				'member_email' 		=> $_POST['user_mail'],
    				'member_birthday' 	=> $_POST['birthday'],
    				'member_password' 	=> $_POST['user_password'],
    				'member_address' 	=> $_POST['user_address'],
    				'member_telephone' 	=> $_POST['user_Tel'],
    				'member_id' 		=> $id,
    				'member_status'  	=> "S02"
    			]);
		}
		
		return redirect('/'); 
		
		
	}

	public function eula(){
		return view('register.eula');
	}
}

?>
