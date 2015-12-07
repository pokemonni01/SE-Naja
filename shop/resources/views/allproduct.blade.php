@extends('home')
@section('activebar')
"#home"
@stop
@section('content')
<script type="text/javascript">
$(document).ready(function(){
  

  function myFunction() {
   alert("s");
  }
});

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
        console.log(data);
        var basket = $('#basket-detail');
        var amount = data.amount;
        var protype = data.protype;
        basket.text(amount+' ชิ้น '+protype+' ชนิด');
        /*
        var des = $(".basket").position();
            var el = $("#proimg");
            el.css("position", "absolute");
            el.animate({ top: des.top+"px" ,left :des.left+"px"}, 1000, undefined, function () {
            el.remove().appendTo(".basket").css("position", "static");
            });
        */
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
    <div class="thumbnail" proid="55">
      <img id="proimg" src="/SE/bootstrap/image/Jp/picclock.jpg" alt="/SE/bootstrap/image/Jp/facebook.jpg">
      <center  proid="55">
      <b style="font-size:20px;bold;" class="caption">
        '.$watch[$i]->product_name.'
        <p style="font-size:15px">'.$watch[$i]->product_detail.'</p>
        </b>
        <a style="width:80px;height:40px" href="allproduct/detail_Goods" class="btn btn-primary" role="button">ดูข้อมูล</a> 
        <button style="width:80px;height:40px"  class="btn btn-primary" role="button" onclick="myFunction(this);" >ใส่ตะกร้า</button>
            </center>
      </div>
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