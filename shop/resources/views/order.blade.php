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
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF">เลขที่ใบสั่งซื้อ</td>
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF">วันที่สั่งซื้อ</td>
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF">เวลาที่สั่งซื้อ</td>
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF">สถานะ</td>
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF">วิธีชำระเงิน</td>
    <td width="16.67%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF">เลขที่ใบส่งของ</td>
  </tr>
  <tr>
    <td bgcolor="#dff1d9">ILA00015729</td>
    <td bgcolor="#dff1d9">13/11/2015</td>
    <td bgcolor="#dff1d9">23:00:58</td>
    <td bgcolor="#dff1d9"><img src="/SE/bootstrap/image/Jp/green.png" width="30" height="26">ส่งของแล้ว</td>
    <td bgcolor="#dff1d9">kbank ATM</td>
    <td bgcolor="#dff1d9">BYA1230984321</td>
  </tr>

</table>
 <table width="660" height="400" border="1" style="margin:20px" >
  <tr>
    <td width="25%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><h1>สถานะ</h1></td>
    <td width="75%" style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><h1>การดำเนินการ</h1></td>
  </tr>
  <tr>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><img src="/SE/bootstrap/image/Jp/pink.png" width="30" height="26">รอการชำระเงิน</td>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF">เมื่อลูกค้าทำการสั่งซื้อเข้ามา</td>
  </tr>
  <tr>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><img src="/SE/bootstrap/image/Jp/orange.png" width="30" height="26">รอตรวจสอบเงินเข้า</td>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF">เมื่อลูกค้าชำระเงินแล้วมีการแนบสลิป แจ้งการชำระเงินผ่านทางเว็บไซต์ หากลูกค้าแจ้งผ่านช่องทางอื่น สถานะจะไม่เปลี่ยน ให้ลูกค้าติดต่อเจ้าหน้าที่เพื่อดำเนินการแทน</td>
  </tr>
  <tr>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><img src="/SE/bootstrap/image/Jp/blue.png" width="30" height="26">ชำระเงินแล้ว</td>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF">เมื่อเจ้าหน้าที่ได้รับหลักฐานการชำระเงินละคีย์รับชำระเงิน เพื่อรอเปิดบิลและนนำสินค้าส่งออกไปยังลูกค้า (บริษัทจะส่งสินค้าให้ลูกค้าในวันถัดไป)</td>
  </tr>
  <tr>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF"><img src="/SE/bootstrap/image/Jp/green.png" width="30" height="26">ส่งของแล้ว</td>
    <td style="bold 50px;color:#000000;" bgcolor="#FFFFFF">จัดส่งสินค้าให้ลูกค้า ซึ่งลูกค้าสามารถตรวจสอบสถานะการจ่ายสินค้าไปยังลูกค้าได้จาก "เลขที่ใบส่งของ" ที่ได้ระบุไว้</td>
  </tr>
  </table>
              </td>
  </tr>
</table>
@stop

