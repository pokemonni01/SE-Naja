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
    	$product =DB::table('product')->get();
		//$product_type = DB::table('product_type')->where('type_id',$id)->first();
		return view('homeadvert',array('product'=>$product));
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
		$member =DB::table('member')->where('member_id',$_SESSION['member_id'])->first();
		return view('information',array('member'=>$member));
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
	public function notification(){
		return view('notification');
	}
	public function detaildesigngood(){
		return view('detaildesigngood');
	}
	public function designmale(){
		return view('designmale');
	}
	public function designfemale(){
		return view('designfemale');
	}
	public function forget(){
		return view('forget');
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
	public function forgetpassword(){

		$u_id = $user = DB::table('member')->where('member_id', $_POST['user_id'])->value('member_id');
		$u_firstname = DB::table('member')->where('member_id', $_POST['user_id'])->value('member_name');
		$u_lastname = DB::table('member')->where('member_id', $_POST['user_id'])->value('member_lastname');
		$u_username = DB::table('member')->where('member_id', $_POST['user_id'])->value('member_username');
		$u_email = DB::table('member')->where('member_id', $_POST['user_id'])->value('member_email');
		$u_tel = DB::table('member')->where('member_id', $_POST['user_id'])->value('member_telephone');

		if( $_POST['user_id'] == "" || $_POST['user_Firstname'] == "" || $_POST['user_lastname'] == "" || $_POST['user_name'] == "" 
			|| $_POST['user_mail'] == "" || $_POST['user_Tel'] == "")
		{	
			echo "กรุณากรอกข้อมูลให้ครบ";

		}else if(/*$u_id =="" ||*/ $_POST['user_Firstname'] != $u_firstname || $_POST['user_lastname'] != $u_lastname || $_POST['user_name'] != $u_username 
			|| $_POST['user_mail'] != $u_email || $_POST['user_Tel'] != $u_tel)
		{
			echo "ไม่มีผู้ใช้นี้ในระบบ";
		}else{
			$pass = DB::table('member')->where('member_id', $_POST['user_id'])->value('member_password');
			print "พาสเวิร์ดของคุณคือ $pass" ;
		}

		//return view('home');
			
	}
}

?>
