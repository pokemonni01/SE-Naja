@extends('home')
@section('content')
<table width="700" border="0" style="float:right; margin:22px;" >
  <tr>
    <td width="230" height="240" align="left" valign="top">
                  <p></p>
                <center>
                <div style="bold 36px;color:#ffffff;"><h1>รายการสั่งซื้อ</h1></div> 
              </center>
                <p></p>
                <table width="660" height="80" border="0" style="margin:20px" >
  <tr>
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><center>เลขที่ใบสั่งซื้อ</center></td>
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><center>วันที่สั่งซื้อ</center></td>
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><center>เวลาที่สั่งซื้อ</center></td>
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><center>สถานะ</center></td>
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><center>วิธีชำระเงิน</center></td>
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><center>เลขที่ใบส่งของ</center></td>
  </tr>
  <tr>
    <td bgcolor="#dff1d9"><center>ILA00015729</center></td>
    <td bgcolor="#dff1d9"><center>13/11/2015</center></td>
    <td bgcolor="#dff1d9"><center>23:00:58</center></td>
    <td bgcolor="#dff1d9"><center><img src="/SE/bootstrap/image/Jp/green.png" width="30" height="26">ส่งของแล้ว</center></td>
    <td bgcolor="#dff1d9"><center>kbank ATM</center></td>
    <td bgcolor="#dff1d9"><center>BYA1230984321</center></td>
  </tr>

</table>
 <table width="660" height="400" border="1" style="margin:20px" >
  <tr>
    <center>
    <td width="25%" style="bold 50px;color:#000000;float:middle;" bgcolor="#FFFFFF"><h1><center>สถานะ</center></h1></td>
    <td width="75%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><h1><center>การดำเนินการ</center></h1></td>
 
  </tr>
  <tr>
    <td style="color:#000000;" bgcolor="#FFFFFF"><img src="/SE/bootstrap/image/Jp/pink.png" width="30" height="26">รอการชำระเงิน</td>
    <td style="color:#000000;" bgcolor="#FFFFFF"> <div style="margin:5px;font-size:15px;">เมื่อลูกค้าทำการสั่งซื้อเข้ามา</div></td>
  </tr>
  <tr>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><img src="/SE/bootstrap/image/Jp/orange.png" width="30" height="26">รอตรวจสอบเงินเข้า</td>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><div style="margin:5px;font-size:15px;"> เมื่อลูกค้าชำระเงินแล้วมีการแนบสลิป 
      แจ้งการชำระเงินผ่านทางเว็บไซต์ หากลูกค้าแจ้งผ่านช่องทางอื่น สถานะจะไม่เปลี่ยน ให้ลูกค้าติดต่อเจ้าหน้าที่เพื่อดำเนินการแทน</div></td>
  </tr>
  <tr>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><img src="/SE/bootstrap/image/Jp/blue.png" width="30" height="26">ชำระเงินแล้ว</td>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><div style="margin:5px;font-size:15px;">เมื่อเจ้าหน้าที่ได้รับหลักฐานการชำระเงินละคีย์รับชำระเงิน
     เพื่อรอเปิดบิลและนนำสินค้าส่งออกไปยังลูกค้า (บริษัทจะส่งสินค้าให้ลูกค้าในวันถัดไป)</div></td>
  </tr>
  <tr>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><img src="/SE/bootstrap/image/Jp/green.png" width="30" height="26">ส่งของแล้ว</td>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><div style="margin:5px;font-size:15px;">จัดส่งสินค้าให้ลูกค้า ซึ่งลูกค้า
      สามารถตรวจสอบสถานะการจ่ายสินค้าไปยังลูกค้าได้จาก "เลขที่ใบส่งของ" ที่ได้ระบุไว้</div></td>
  </tr>
  </table>
              </td>
  </tr>
</table>
@stop

