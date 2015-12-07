@extends('mainlayout.adminpage')
@section('content')

<center>
<div style="font-size:30px"><center>รายงานยอดขาย</center></font></div><p></p>
<table border="0" >
  <td bgcolor="white">
    <div style="font-size:15px">ออกรายงานตั้งแต่วันที่ :&nbsp;<input style="font-size:15px" type="date" name="date" value=""></font></div>
    </td>
    <td bgcolor="white">
    <div style="font-size:15px">&nbsp;&nbsp;ถึง :&nbsp;<input style="font-size:15px" type="date" name="date" value=""></font></div>
  </td>
      </table>
</center>
<p></p> 
<center>
<p><table border="1" >
 <tr bgcolor="white">
  <td>
 <label style="margin:10px">ลำดับ</label>
 </td>
 <td>
 <label style="margin:10px">รหัสสินค้า</label>
 </td>
 <td>
 <label style="margin:10px">ประเภทสินค้า</label>
 </td>
  <td>
 <label style="margin:10px">รายการสินค้า</label>
 </td>
  <td>
 <label style="margin:10px">จำนวนที่ขาย</label>
 </td>
  <td>
 <label style="margin:10px">รวมเงิน</label>
 </td>
</tr>
<tr bgcolor="#C1CDC1">
  <td>
 <label style="margin:10px">1</label>
 </td>
  <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
</tr>
<tr bgcolor="#E0EEE0">
  <td>
 <label style="margin:10px">2</label>
 </td>
  <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
</tr>
<tr bgcolor="#C1CDC1">
  <td>
 <label style="margin:10px">3</label>
 </td>
  <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
</tr>
<tr bgcolor="#E0EEE0">
  <td>
 <label style="margin:10px">4</label>
 </td>
  <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
</tr>
<tr bgcolor="#C1CDC1">
  <td>
 <label style="margin:10px">5</label>
 </td>
  <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
</tr>
<tr bgcolor="#E0EEE0">
  <td>
 <label style="margin:10px">6</label>
 </td>
  <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td> 
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
 <td>
 <label style="margin:10px"></label>
 </td>
</tr>
</table>
</p>
</center>
<div style="font-size:20px;float:right;margin:20px">รวมทั้งหมด :00.00<label> &nbsp;บาท</label>
<div><a href="print1" class="btn btn-default">ตรวจสอบเอกสาร</a></div></div>
<center>

</center>

@stop