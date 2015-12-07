@extends('home')
@section('activebar')
"#home"
@stop
@section('content')
<table width="700" border="0" style="float:right; margin:22px;" >
  <tr>
    <td width="230" height="240" align="left" valign="top">
                  <p></p>


 <table  border="0" style="margin:3%" >
  <center>
  <div style="bold 36px;color:#ffffff;"><h1><?php echo $product_type->type_name; ?></h1></div> 
</center>
    <?php
    //$watch = DB::table('product')->where('product_type','T00')->get();
    //$ring = DB::table('product')->where('product_type','T01')->get();
    $d=sizeof($product);
     for($i=0;$i<$d;$i++){
      if($i%3==0)
        echo '<tr>';
      echo '
    <td align="left" valign="top">
    <div >
  <div style="width:220px;">
    <div class="thumbnail">
      <img style="width:220px;height:250px" src="'.$product[$i]->product_imagePath.'">
      <center>
      <b style="font-size:20px;bold;" class="caption">
        '.$product[$i]->product_name.'
        <p style="font-size:15px">'.$product[$i]->product_detail.'</p>
        <a style="width:80px;height:40px" href="allproduct/detail_Goods" class="btn btn-primary" role="button">ดูข้อมูล</a> <a style="width:80px;height:40px"href="#" class="btn btn-primary" role="button">ใส่ตะกร้า</a>
      </div>
    </center>
      </div>
    </div>
  </div>
</div>';
if($i%3==2)
echo '</tr>';
}
?>
</td>
  </table>
              </td>
  </tr>
</table>
@stop
