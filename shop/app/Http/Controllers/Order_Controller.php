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
use Storage;
use Form;
use Input;
use Response;

class Order_Controller extends Controller
{
	public function add2cart(){
		$product_id = Input::get('product_id');
		if( isset($_SESSION['productInCart']) ){
			$_SESSION['productInCart'][$product_id]++;
		}
		else{
			$_SESSION['productInCart']['product_total'] = 0;
			$_SESSION['productInCart'][$product_id]=1;
		}
		$_SESSION['productInCart']['product_total']++;
		$amount = $_SESSION['productInCart']['product_total'];
		$protype = sizeof($_SESSION['productInCart'])-1;
		$response = array(
			'status' => 'success',
            'amount' => $amount,
            'protype'=> $protype,
            );
		return Response::json($response);
	}

	public function getProduct(){
		$product_id = Input::get('product_id');
		$product = DB::table('product')->where('product_id', $product_id)->first();
		 $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
            'product_id' => $product->product_id,
            'product_imagePath' => $product->product_imagePath
    		,'product_name' => $product->product_name
    		,'product_type' => $product->product_type
    		,'product_remain' => $product->product_remain
    		,'product_price' => $product->product_price
    		,'product_detail' => $product->product_detail
        );
		//return "test";
        return Response::json($response);  // <<<<<<<<< see this line
	}


}

?>
