@extends('home')
@section('title','Home')
@section('activebar')
"#home"
@stop
@section('content')
<script type="text/javascript">

function myFunction($param) {
  var parent = $($param).parent();
  var productId = parent.attr('proid');
   //alert(parent.attr('proid'));
   $.ajax({
        type: "post",
        url: '/se/add2cart',
        data: { 'product_id': productId },
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
          }
      },
      success: function(data){
        console.log('proid : '+productId);
        console.log(data);
        var basket = $('#basket-detail');
        var amount = data.amount;
        var protype = data.protype;
        basket.text(amount+' ชิ้น '+protype+' ชนิด');
        location.reload();
        }
        ,error:function(){ 
            alert("Download ข้อมูลผิดพลาด!!");
        }
    });
}
</script>
<table width="700" border="0" style="float:right; margin:22px;" >
  <tr>
    <td width="230" height="240" align="left" valign="top">
                  <p></p>
                <center>
                <div style="bold 36px;color:#ffffff;"><h1>ประกาศ</h1></div> 
              </center>
                <p></p>
                <table width="660" height="80" border="0" style="margin:20px" >
      <center>
  <tr>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><li><h4>เนื่องจากเพิ่งเปิดเว็บไซต์อย่างเป็นทางการ ทางร้านปรับลดสินค้าทุกชิ้น 50%  ถึงวันที่ 31 ธันวาคม 2558 
    </li></td>
  </tr>
  <tr>
   <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><li><h4>ลูกค้าที่มีปัญหาในส่วนของการเข้าสู่ระบบ ติดต่อ admin โดยตรง 
    </li></td>
  </tr>
   <tr>
   <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><li><h4>สินค้าใหม่ อัพเดททุกวันจันทร์ 
    </li></td>
  </tr>
      </center>
</table>


 <table  border="0" style="margin:20px" >
  <center>
  <div style="bold 36px;color:#ffffff;"><h1>สินค้าแนะนำ</h1></div> 
</center>
  <tr >
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
      <b style="font-size:20px;bold;" class="caption"  proid="'.$product[$i]->product_id.'">
        '.$product[$i]->product_name.'
        <p style="font-size:15px">'.$product[$i]->product_detail.'</p>
        <a style="width:80px;height:40px" href="allproduct/detail_Goods" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> ดูข้อมูล</a> 
        <a style="width:80px;height:40px" class="btn btn-primary" role="button" onclick="myFunction(this);"><span class="glyphicon glyphicon-shopping-cart"></span> ตะกร้า</a>
      </center>
      </div>
      </div>
    </div>
  </div>
</div>';
if($i%3==2)
echo '</tr>';
}
?>
</td>

  </tr>
  </table>
              </td>
  </tr>
</table>
@stop