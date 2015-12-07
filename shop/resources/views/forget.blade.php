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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>I LOVE ACCESSORIES</title>
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
   background-image: url("/SE/bootstrap/image/Jp/bgbgbg.png");


}
</style>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
</head>
<body>
  <center>
<table width="986" height="971" border="0">
  <tr>
    <td height="409" colspan="2"><img src="/SE/bootstrap/image/Jp/bgilove.jpg" width="989" height="459" /></td>
  </tr>
  <tr>
    <td height="38" colspan="2" bgcolor="#fccede">
    @include('header')
       </td>
  </tr>
  <tr>
    <td width="350" height="90" bgcolor="FFFFFF" align="left" valign="top">
      
      @include('register1')
    
    <p></p>
    @include('category')
    <style type="text/css">
body {
  background-color: #FFFFFF;
}
</style>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

</td>
    <td width="7080" bgcolor="#FFFFFF" class="size5"> 
      @include('forget2')

@yield('content')
   </td>
  </tr>
  @include('footer')
</table>
</center>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/js/bootstrap.min.js"></script>
</body>
</html>