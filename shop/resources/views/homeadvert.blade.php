@extends('home')
@section('activebar')
"#home"
@stop
@section('content')
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
     for($i=0;$i<3;$i++){
      echo '
    <td style="width:450px;height:100px" align="left" valign="top">
    <div >
  <div >
    <div class="thumbnail">
      <img src="/SE/bootstrap/image/Jp/picclock.jpg" alt="/SE/bootstrap/image/Jp/facebook.jpg">
      <center>
      <b style="font-size:20px;bold;" class="caption">
        GD-120CS-1
        <p style="font-size:15px">นาฬิกาข้อมือ CASIO G-SHOCK รุ่น GD-120CS-1 ออกแบบมาสำหรับ.....</p>
        <a style="width:80px;height:40px" href="#" class="btn btn-primary" role="button">ดูข้อมูล</a> <a style="width:80px;height:40px"href="#" class="btn btn-primary" role="button">ใส่ตะกร้า</a>
      </div>
    </center>
      </div>
    </div>
  </div>
</div>';
}
?>
</td>

  </tr>
    <tr >
    <?php
     for($i=0;$i<3;$i++){
      echo '
    <td style="width:450px;height:100px" align="left" valign="top">
    <div >
  <div >
    <div class="thumbnail">
      <img src="/SE/bootstrap/image/Jp/picclock.jpg" alt="/SE/bootstrap/image/Jp/facebook.jpg">
      <center>
      <b style="font-size:20px;bold;" class="caption">
        GD-120CS-1
        <p style="font-size:15px">นาฬิกาข้อมือ CASIO G-SHOCK รุ่น GD-120CS-1 ออกแบบมาสำหรับ.....</p>
        <a style="width:80px;height:40px" href="#" class="btn btn-primary" role="button">ดูข้อมูล</a> <a style="width:80px;height:40px"href="#" class="btn btn-primary" role="button">ใส่ตะกร้า</a>
      </div>
    </center>
      </div>
    </div>
  </div>
</div>';
}
?>
</td>

  </tr>
  </table>
              </td>
  </tr>
</table>
@stop