@extends('home')
@section('content')
<style type="text/css">
.size2{
  font-size: 5px;

}
.table-login {
  padding: 10px;
}
</style>
<div style="margin:20px"> 
<table width="245" border="0">
  <tr>
    <td bgcolor="#fc8cb4">
      <center><p style="bold 1px;color:#ffffff">นาฬิกา</p></center>
</td>
  </tr>
</table>
<table width="720" border="0" >
  <tr>
    <td bgcolor="#ffffff">
      <div><p><a  style="color:#000000; font-size:15px" href="/">นาฬิกา</a>
      <a style="color:#000000;font-size:12px" >></a>
      </p></div> 

</td>
  </tr>
</table>
<table  width="720" height="180" border="0" >
  <tr>
    <td bgcolor="#a6e6e7">
      
      <a style="float:left;margin:100px;width:150px" href="/se/categoryall/T02" class="btn btn-primary btn-lg active" role="button"><img src="/SE/bootstrap/image/Jp/female.png" width="22" height="30" align="absmiddle" /> ผู้หญิง</a>
      <a style="float:right;margin:100px;width:150px" href="/se/categoryall/T00" class="btn btn-primary btn-lg active" role="button"><img src="/SE/bootstrap/image/Jp/male.png" width="22" height="30" align="absmiddle" /> ผู้ชาย</a>
</td>
</tr>
</table>
</div> 
@stop

