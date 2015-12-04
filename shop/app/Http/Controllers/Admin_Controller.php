<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class Admin_Controller extends Controller
{
	public function admin(){
		return view('admin.admin');
	}

	public function stock(){
		$results = DB::select('select * from customer ');
		return view('admin.stock',array('result'=>$results));
	}

}

?>
