<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ADMIN I LOVE ACCESSORIES</title>
<style type="text/css">
.size5 {
	font-size: 36px;
	text-align: left;
	font-weight: bold;
}p {
	margin-top: 0;
	padding-right: 15px;
	padding-left: 15px;
	font-weight: bold;
	text-align: left;
	font-family: "DSU_Single";
	font-size: 24px;
}
body {
	 background-image: url("/SE/bootstrap/image/Jp/bgbgbg.jpg");
   background-repeat: no-repeat;
   background-position: center;
background-attachment: fixed;
}
</style>
</head>
<body>
  <center>
  <!--<img width="989" height="88" src="/SE/bootstrap/image/Jp/header.jpg" class="img-rounded">-->
  <tr><p style="color:#FFFFFF; bgcolor=""#fccede"><h2>สำหรับเจ้าหน้าที่เท่านั้น</h2></p></tr>
</center>
  <center>
<table width="986" height="971" border="0">
  <tr>
    <td width="230" height="90" bgcolor="#fccede" align="left" valign="top">
     <!-- @include('register1') -->
      <!--@include('login')-->
      @include('adminpageback')
    <p></p>
  	 <center>
      <div><h3>สินค้า</h3></div>
     <a href="adminadd" style="width:90%;height:60" type="button" class="btn btn-default"><h4>จัดการสินค้า</h4></a>
     <p></p>
     <a href="adminadd" style="width:90%;height:60" type="button" class="btn btn-default"><h4>จัดการประเภทสินค้า</h4></a>
     <p></p>
     <div><h3>ข้อมูลการขาย</h3></div>
      <a href="report1" style="width:90%;height:60px" type="button" class="btn btn-default"><h4>จัดการการสั่งซื้อ</h4></a>
      <p></p>
      <a href="report1" style="width:90%;height:60px" type="button" class="btn btn-default"><h4>จัดการสถานะการสั่งซื้อ</h4></a>
      <p></p>
      <div><h3>ข้อมูลการสมาชิก</h3></div>
      <a href="report1" style="width:90%;height:60px" type="button" class="btn btn-default"><h4>จัดการสมาชิก</h4></a>
      <p></p>
      <a href="report1" style="width:90%;height:60px" type="button" class="btn btn-default"><h4>จัดการสถานะสมาชิก</h4></a>
      <p></p>
      <div><h3>รายงาน</h3></div>
      <a href="report1" style="width:90%;height:60px" type="button" class="btn btn-default"><h4>ออกรายงาน</h4></a>
      <p></p>
      <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

      </center>
    <style type="text/css">
body {
  background-color: #FFFFFF; 
}
</style>

    </td>
    <td width="1080" bgcolor="#FFFFFF" align="left" valign="top">
    <center>
      <!--<img width="740" height="820" src="/SE/bootstrap/image/Jp/home.png" class="img-rounded">-->
    </center>
@yield('contents')


    </td>
  </tr>
  @include('footer')
</table>
</center>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/js/bootstrap.min.js"></script>
</body>
</html>