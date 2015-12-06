@extends('home')
@section('activebar')
"#home"
@stop
@section('content')
<table width="700" border="0" style="float:right; margin:22px;" >
  <tr>
    <td width="230" height="240" align="left" valign="top">
                  <p></p>


 <table  border="0" >
  <center>
  <div style="bold 36px;color:#ffffff;"><h1>นาฬิกา</h1></div> 
</center>
  <tr >
    <?php
    $d=sizeof($watch);
     for($i=0;$i<$d;$i++){
      echo '
    <td align="left" valign="top">
    <div >
  <div style="width:85%;height:50%">
    <div class="thumbnail">
      <img src="/SE/bootstrap/image/Jp/picclock.jpg" alt="/SE/bootstrap/image/Jp/facebook.jpg">
      <center>
      <b style="font-size:20px;bold;" class="caption">
        '.$watch[$i]->product_name.'
        <p style="font-size:15px">'.$watch[$i]->product_detail.'</p>
        <a style="width:80px;height:40px" href="allproduct/detail_Goods" class="btn btn-primary" role="button">ดูข้อมูล</a> <a style="width:80px;height:40px"href="#" class="btn btn-primary" role="button">ใส่ตะกร้า</a>
      </div>
    </center>
      </div>
    </div>
  </div>
</div>';
}
?>

  </table>
              </td>
  </tr>
</table>
@stop