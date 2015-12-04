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
use Intervention\Image\ImageManagerStatic as Image;
class Stock_Controller extends Controller
{
	public function stock(){
		$results = DB::select('select * from product');
		$storagePath  = starts_with(storage_path(),'se');//Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
		
		return view('admin.stock.stock',array('result'=>$results,'storage'=>$storagePath));
	}

	public function addNewProduct(){
		$results = DB::select('select * from customer ');
		$product = array("product_sku","product_ImagePath","product_name","product_type","product_remain","product_price","product_detail");
		if( empty($_POST['product_name']) ){
			$post = 1;
			//ไม่ได้
		}
		$image = Input::file('product_ImagePath');
        $fileName  = time() . '.' . $image->getClientOriginalExtension();
        $pathImage = storage_path('app/');
 		$image->move($pathImage, $fileName);
 		$pos = strpos($pathImage.$fileName, '/se');
 		$pathImage =substr($pathImage.$fileName,$pos);
		DB::table('product')->insert(
    		[
    		'product_id' => $_POST['product_id']
    		,'product_ImagePath' => $pathImage
    		,'product_name' => $_POST['product_name']
    		//,'product_type' => $_POST['product_type']
    		,'product_remain' => $_POST['product_remain']
    		,'product_price' => $_POST['product_price']
    		,'product_detail' => $_POST['product_detail']]
			);
		return redirect('/admin/stock/');
	}

}

?>
