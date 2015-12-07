<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Storage;
use Form;
use Input;
use Response;

class Stock_Controller extends Controller
{

		public function print1(){
		return view('print1');
	}
	public function report1(){
		return view('report1');
	}
	public function stock(){
		$results = DB::table('product')->get();
		$pType = DB::table('product_type')->get();
		return view('admin.stock.stock',array('result'=>$results,'pType'=>$pType));
	}

	public function addNewProduct(){
		$product = array("product_sku","product_imagePath","product_name","product_type","product_remain","product_price","product_detail");
		if( empty($_POST['product_name']) ){
			$post = 1;
			//ไม่ได้
		}
		$image = Input::file('product_ImagePath');
        $fileName  = $_POST['product_id'] . '.' . $image->getClientOriginalExtension();
        $pathImage = storage_path('app/');
 		$image->move($pathImage, $fileName);
 		$pos = strpos($pathImage.$fileName, '/se');
 		if($pos===false)
 			$pos = strpos($pathImage.$fileName, '/SE');
 		$pathImage =substr($pathImage.$fileName,$pos);
		DB::table('product')->insert(
    		[
    		'product_id' => $_POST['product_id']
    		,'product_imagePath' => $pathImage
    		,'product_name' => $_POST['product_name']
    		,'product_type' => $_POST['product_type']
    		,'product_remain' => $_POST['product_remain']
    		,'product_price' => $_POST['product_price']
    		,'product_detail' => $_POST['product_detail']]
			);
		return redirect('/admin/stock/');
	}

	public function removeProduct(){
		$delArray = $_POST;
		$sizeArray = sizeof($delArray);
		for($i=0;$i<$sizeArray;$i++){
			$database = DB::table('product');
			$index = array_search("on",$delArray);
			$database->where('product_id',$index)->delete();
			unset($delArray[$index]);
		}
		return redirect('/admin/stock/');
	}

	public function editProduct(){
		$product_id = Input::get('product_id');
		$product_ImagePath = Input::get('product_ImagePath');
		$product_name = Input::get('product_name');
		$product_type = Input::get('product_type');
		$product_remain = Input::get('product_remain');
		$product_price = Input::get('product_price');
		$product_detail = Input::get('product_detail');
		DB::table('product')
            ->where('product_id', $product_id)
            ->update([
            	'product_name' => $product_name,
            	//'product_ImagePath' => $product_ImagePath,
            	'product_type' => $product_type,
            	'product_remain' => $product_remain,
            	'product_price' => $product_price,
            	'product_detail' => $product_detail,
            	]);
        return redirect('/admin/stock/');
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
