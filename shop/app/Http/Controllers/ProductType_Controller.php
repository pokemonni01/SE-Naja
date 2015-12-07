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

class ProductType_Controller extends Controller
{
	public function productType(){
		$pType = DB::table('product_type')->get();
		$storagePath  = starts_with(storage_path(),'se');
		return view('admin.product-type.product_type',array('result'=>$pType,'storage'=>$storagePath));
	}

	public function addNewProductType(){
		$ptId = Input::get('productType_id');
		$ptName = Input::get('productType_name');
		DB::table('product_type')->insert(
    		[
    		 'type_id' => $ptId,
    		 'type_name' => $ptName
    		]
		);
		return redirect('/admin/product-type/');
	}

	public function removeProductType(){
		$delArray = $_POST;
		$sizeArray = sizeof($delArray);
		for($i=0;$i<$sizeArray;$i++){
			$database = DB::table('product_type');
			$index = array_search("on",$delArray);
			$database->where('type_id',$index)->delete();
			unset($delArray[$index]);
		}
		return redirect('/admin/product-type/');
	}

}

?>
