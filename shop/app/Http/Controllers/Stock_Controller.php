<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Storage;
use Form;

class Stock_Controller extends Controller
{
	public function stock(){
		$results = DB::select('select * from customer ');
		return view('admin.stock.stock',array('result'=>$results));
	}

	public function addNewProduct(){
		$results = DB::select('select * from customer ');
		$product = array("Pro_name","Pro_sku","Pro_price","Pro_detail");
		if( empty($_POST['Pro_name']) ){
			$post = 1;
		}
		return view('admin.stock.addNewProduct',array('result'=>$results,'product'=>$product));
	}

}

?>
