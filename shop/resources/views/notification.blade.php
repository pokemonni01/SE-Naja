@extends('home')
@section('title','notification')
@section('content')
  <table width="700" border="0" style="float:right; margin:22px;">
 <td width="1080" bgcolor="#fccede" class="size3">
  <div style="font-size:30px"><center>แจ้งชำระเงิน</center></div>
  <p><h5>&nbsp;&nbsp;*กรุณากรอกข้อมูลให้ครบทุกข้อ</h5>
  </p>&nbsp;&nbsp;ชื่อผู้ใช้ : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user_user" maxlength="30" ></p>
       &nbsp;&nbsp;เลขที่ใบสั่งซื้อ :   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="b_user" maxlength="30" ></p>
       &nbsp;&nbsp;ชื่อผู้สั่งซื้อ:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="a_user" maxlength="30" ></p>
     </p>    
   <form>

&nbsp;&nbsp;ธนาคารที่โอน : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="btn-group" data-toggle="buttons"><br>

    <input type="radio" name="options" id="option1" autocomplete="off"> <img src="\SE\bootstrap\image\Jp\ktb.jpg" width="24" height="24" />&nbsp;&nbsp;กรุงไทย <br>
    <input type="radio" name="options" id="option2" autocomplete="off"> <img src="\SE\bootstrap\image\Jp\kbank.jpg" width="24" height="24" />&nbsp;&nbsp;กสิกรไทย <br>
    <input type="radio" name="options" id="option3" autocomplete="off"> <img src="\SE\bootstrap\image\Jp\scb.jpg" width="24" height="24" />&nbsp;&nbsp;ไทยพาณิชย์ <br>
    <input type="radio" name="options" id="option3" autocomplete="off"> <img src="\SE\bootstrap\image\Jp\bbl.jpg" width="24" height="24" />&nbsp;&nbsp;กรุงเทพ <br>
<br>
</div><br>



   <form class="form-inline">
  <div class="form-group">
    &nbsp;&nbsp;วัน/เดือน/ปี ที่โอน : &nbsp;<input type="date" name="date" value="">
  </div>
</form>

  <br>&nbsp;&nbsp;จำนวนเงินที่โอน : &nbsp;&nbsp; <input type="text" name="user_user" maxlength="30" value="0.00">&nbsp;บาท</p><br>

  <div class="form-group">
    &nbsp;&nbsp;แนบรูป : 
    <label for="exampleInputFile"></label><input type="file" id="exampleInputFile">
    &nbsp;&nbsp;(ไฟล์ jpg,gif,png,pdf) การแนบหลักฐานจะช่วยทำให้ตรวจสอบได้เร็วขึ้น
  </div>
<br><br>
   



  <div align="center"><button type="submit" class="btn btn-default">แจ้งชำระเงิน</button></div>
  <br></br>
</form>
</td>
</table>
@stop