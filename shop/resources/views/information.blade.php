@extends('home')
@section('content')
<table width="700px" border="0" style="float:right; margin:22px;">
     <tr>
    <td width="300px" height="120px" align="left" valign="top">
                  <p></p>
                <center>
                <p style="bold 36px;color:#ffffff;"><h3>ข้อมูลส่วนตัว</h3></p> 
              </center>
              <center>
              <table width="650px" height="120px" border="0"style="color:#fccede;">
                <tr>
                  <td width="240px" height="50px" style="bold;color:#000000;" bgcolor="#fccede"><div style="bold;font-size:20px;float:right">ชื่อ :&nbsp;</div></td> 
                  <td  style="color:#000000;" bgcolor="#fccede">{{$member->member_name}}  {{$member->member_lastname}}</td>
                </tr>
               <tr>
                 <td width="150px" height="50px" style="bold;color:#000000;" bgcolor="#fccede"><div style="bold;font-size:20px;float:right">ชื่อผู้ใช้ :&nbsp;</div></td>
                  <td  style="color:#000000;" bgcolor="#fccede">{{$member->member_username}}</td>
                </tr>
                <tr>
                 <td width="150px" height="50px" style="bold;color:#000000;" bgcolor="#fccede"><div style="bold;font-size:20px;float:right">E-mail :&nbsp;</div></td> 
                  <td  style="color:#000000;" bgcolor="#fccede">{{$member->member_email}}</td>
                </tr>
                <tr>
                  <td width="150px" height="50px" style="bold;color:#000000;" bgcolor="#fccede"><div style="bold;font-size:20px;float:right">ที่อยู่ :&nbsp;</div></td>
                  <td  style="color:#000000;" bgcolor="#fccede">{{$member->member_address}}</td>
                </tr>
                <tr>
                  <td width="150px" height="50px" style="bold;color:#000000;" bgcolor="#fccede"><div style="bold;font-size:20px;float:right">วันเกิด :&nbsp;</div></td>
                  <td  style="color:#000000;" bgcolor="#fccede">{{$member->member_birthday}}</td>
                </tr>
                 <tr>
                  <td width="150px" height="50px" style="bold;color:#000000;" bgcolor="#fccede"><div style="bold;font-size:20px;float:right">เบอร์โทรศัพท์ :&nbsp;</div></td>
                  <td  style="color:#000000;" bgcolor="#fccede">{{$member->member_telephone}}</td>
                </tr>
                 </tr>
                </table>
                  <tr>
                  <td>
                    <center>
                  <a style="float:center; margin:10px;" href="/information" type="button" class="btn btn-default">แก้ไขข้อมูลส่วนตัว</a>
                  <a style="float:center; margin:10px;" href="/information" type="button" class="btn btn-default">เปลี่ยนรหัสผ่าน</a>
                    </center>
                </td>
              </tr>
              </center>
            </table>
          </center>
        </td>
            </tr>
@stop
