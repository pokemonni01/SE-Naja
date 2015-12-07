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
			if( isset($_SESSION['productInCart'][$product_id])  )
				$_SESSION['productInCart'][$product_id]++;
			else
				$_SESSION['productInCart'][$product_id] = 1;
		}
		else{
			//$_SESSION['productInCart']['product_total'] = 0;
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
            'product_id' => $product->product_id
            ,'product_imagePath' => $product->product_imagePath
    		,'product_name' => $product->product_name
    		,'product_type' => $product->product_type
    		,'product_amount' => $product->product_remain
    		,'product_price' => $product->product_price
    		,'product_detail' => $product->product_detail
        );
		//return "test";
        return Response::json($response);  // <<<<<<<<< see this line
	}

	public function clearBasket(){
		unset($_SESSION['productInCart']);
		$_SESSION['productInCart']['product_total'] = 0;
        //return Response::json($response);  // <<<<<<<<< see this line
	}

	public function getProductInBasket(){
		$totalPrice = 0;
		$productTotal = $_SESSION['productInCart']['product_total'];
		if($productTotal==0)
			return;
		$i=0;
		foreach($_SESSION['productInCart'] as $key => $value)
        {
            if($key == 'product_total')
            	continue;
            $product = DB::table('product')->where('product_id',$key)->first(); 
            $listProduct[$i]['product_name'] = $product->product_name;
            $listProduct[$i]['product_imagePath'] = $product->product_imagePath;
            $listProduct[$i]['product_price'] = $product->product_price;
            $listProduct[$i]['product_amount'] = $_SESSION['productInCart'][$key];
            $listProduct[$i]['product_totalPrice'] = ($product->product_price*$value);
            $totalPrice += ($product->product_price*$value);
            $i++;
        }
		 $response = array(
            'product' => array('listProduct'=>$listProduct),
            'totalPrice'=>$totalPrice,
            'productTotal'=>$productTotal,
        );
		//return "test";
        return Response::json($response);  // <<<<<<<<< see this line
	}



}

?>
