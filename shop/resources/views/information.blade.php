@extends('home')
@section('content')
<table width="700" border="0" style="float:right; margin:22px;">
     <tr>
    <td width="230" height="120" align="left" valign="top">
                  <p></p>
                <center>
                <p style="bold 36px;color:#ffffff;"><h1>ข้อมูลส่วนตัว</h1></p> 
              </center>
              <table width="700" height="120" border="0"style="color:#fccede;">
                <tr>
                  <td width="30%" style="bold 50px;color:#000000;" bgcolor="#fccede"><h2>ชื่อ :</h2></td> 
                  <td width="70%" style="color:#000000;" bgcolor="#fccede">จุฑารัตน์  พิมชะนก</td>
                </tr>
                <tr>
                   <td width="50%" style="bold 50px;color:#000000;" bgcolor="#fccede"><h2>ชื่อผู้ใช้ :</h2></td>
                    <td width="50%" style="bold 50px;color:#000000;" bgcolor="#fccede">จุฑารัตน์  พิมชะนก</td>
                </tr>
                <tr>
                   <td width="50%" style="bold 50px;color:#000000;" bgcolor="#fccede"><h2>อีเมล :</h2></td>
                   <td width="50%" style="bold 50px;color:#000000;" bgcolor="#fccede">จุฑารัตน์  พิมชะนก</td>
                </tr>
                <tr>
                   <td width="50%" style="bold 50px;color:#000000;" bgcolor="#fccede"><h2>ที่อยู่ :</h2></td>
                   <td width="50%" style="bold 50px;color:#000000;" bgcolor="#fccede">จุฑารัตน์  พิมชะนก</td>
                </tr>
                <tr>
                   <td width="50%" style="bold 50px;color:#000000;" bgcolor="#fccede"><h2>วันเกิด :</h2></td>
                   <td width="50%" style="bold 50px;color:#000000;" bgcolor="#fccede">จุฑารัตน์  พิมชะนก</td>
                </tr>
                <tr>
                   <td width="50%" style="bold 50px;color:#000000;" bgcolor="#fccede"><h2>เบอร์โทรศัพท์ :</h2></td>
                   <td width="50%" style="bold 50px;color:#000000;" bgcolor="#fccede">084-0949996</td>
                </tr>
                <tr>
                  <center>
                  <td>
                  <a style="float:center; margin:10px;" href="/information" type="button" class="btn btn-default">แก้ไขข้อมูลส่วนตัว</a>
                  <a style="float:center; margin:10px;" href="/information" type="button" class="btn btn-default">เปลี่ยนรหัสผ่าน</a>
                </td>
              </center></tr>
                </table>

            </table>
            </tr>
@stop
