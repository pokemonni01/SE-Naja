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

class MemberType_Controller extends Controller
{
	public function memberType(){
		$pType = DB::table('member_status')->get();
		$storagePath  = starts_with(storage_path(),'se');
		return view('admin.member.membertype',array('result'=>$pType,'storage'=>$storagePath));
	}

	public function addNewMemberStatus(){
		$ptId = Input::get('status_id');
		$ptName = Input::get('status_name');
		DB::table('member_status')->insert(
    		[
    		 'status_id' => $ptId,
    		 'status_name' => $ptName
    		]
		);
		return redirect('/admin/membertype/');
	}

	public function removeMemberStatus(){
		$delArray = $_POST;
		$sizeArray = sizeof($delArray);
		for($i=0;$i<$sizeArray;$i++){
			$database = DB::table('member_status');
			$index = array_search("on",$delArray);
			$database->where('status_id',$index)->delete();
			unset($delArray[$index]);
		}
		return redirect('/admin/membertype/');
	}

}

?>
