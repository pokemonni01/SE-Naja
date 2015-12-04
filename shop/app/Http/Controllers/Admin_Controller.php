<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Storage;

class Admin_Controller extends Controller
{
	public function admin(){
		return view('admin.admin');
	}

	public function stock(){
		$results = DB::select('select * from customer ');
		$storagePath  = Storage::disk('image')->getDriver()->getAdapter()->getPathPrefix();
		return view('admin.stock.stock',array('result'=>$results,'storage'=>$storagePath));
	}

}

?>
