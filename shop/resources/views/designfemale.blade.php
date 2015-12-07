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
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('#myTabs a[href="#profile"]').tab('show') // Select tab by name
$('#myTabs a:first').tab('show') // Select first tab
$('#myTabs a:last').tab('show') // Select last tab
$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)

</script>
<div style="margin:20px"> 
<table width="245" border="0">
  <tr>
    <td bgcolor="#fc8cb4">
      <center><p style="bold 1px;color:#ffffff">ออกแบบสินค้า</p></center>
</td>
  </tr>
</table>
<table width="700" border="0" >
  <tr>
    <td bgcolor="#ffffff">
      <div><p><a  style="color:#000000; font-size:15px" href="detaildesigngood">ออกแบบสินค้า</a>
      <a  style="color:#000000;font-size:12px" >></a>
      <a  style="color:#000000; font-size:15px" href="designfemale">ผู้หญิง</a>
      <a  style="color:#000000;font-size:12px" >></a>
      <a  style="color:#000000; font-size:15px" href="designmale">นาฬิกา</a>
      </p></div> 

</td>
  </tr>
</table>
<table  width="700" height="780" border="0" >
  <tr>
    <td bgcolor="#a6e6e7">
      <p style="color:#000000; font-size:30px" ><img src="/SE/bootstrap/image/Jp/female1.png" width="22" height="30" align="absmiddle" /> ผู้หญิง</p>
      <center>
      <a style="margin:2px;width:100px" href="designfemale" class="btn btn-default btn-lg active" role="button">นาฬิกา</a>
      <a style="margin:2px;width:100px" href="#" class="btn btn-primary btn-lg active" role="button"> กำไล</a>
      <a style="fmargin:2px;width:100px" href="#"  class="btn btn-primary btn-lg active" role="button"> สร้อย</a>
      <a style="margin:2px;width:100px" href="#" class="btn btn-primary btn-lg active" role="button"> แหวน</a>
      <a style="fmargin:2px;width:100px" href="#"  class="btn btn-primary btn-lg active" role="button">ที่คาดผม</a>
      <a style="margin:2px;width:100px" href="#" class="btn btn-primary btn-lg active" role="button"> ต่างหู</a>
      </center>

      
        <table  width="700" height="150" border="0" >
          <tr>
           <td bgcolor="#0091a7">
              <p><center>
              <a ><img  src="bootstrap/image/Jp/211.png" name="d1" width="250" height="50" id="d1" />
              </a>

              <a ><img src="bootstrap/image/Jp/211.png" alt="" name="d2" width="70" height="70" id="d2" />
              </a>
              
              <a ><img  src="bootstrap/image/Jp/211.png" alt="" name="d3" width="250" height="50" id="d3" />    
              </a>
              </center>
            </p>
              
         </td>
          </tr>
      </table>

        <table  style="float:top;margin:20px;" width="660" height="350" border="0" align="left" valign="top">
          <tr>
           <td bgcolor="#fc8cb4">
              <div>

              <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li style="font-size:20px" role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">แหวน</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                <div id="TabbedPanels1" class="TabbedPanels">
    
                  <div class="TabbedPanelsContentGroup">
                    <div class="TabbedPanelsContent" bgcolor="#FFFFFF">
                        <img style="font-size:20px" src="bootstrap/image/Jp/cable1-2.png" name="cable1" width="352" height="91" id="cable1" onmousedown="MM_swapImage('d1','','bootstrap/image/Jp/cable1.png',1);MM_swapImage('d3','','bootstrap/image/Jp/cable1-2.png',1)" />
                        <img style="font-size:20px" src="bootstrap/image/Jp/cable2-2.png" name="cable2" width="352" height="91" id="cable2" onmousedown="MM_swapImage('d1','','bootstrap/image/Jp/cable2-1.png',1);MM_swapImage('d3','','bootstrap/image/Jp/cable2-2.png',1)" />
                    </div>
                    
                  </div>
              </div>

              </div>
              <div role="tabpanel" class="tab-pane" id="profile">...</div>              
              </div>
              <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li style="font-size:20px" role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">จี้</a></li>
              </ul>
              <!-- Tab panes -->
              <div style="overflow: auto;" class="tab-content">
              <div  role="tabpanel" class="tab-pane active" id="home">
                <div id="TabbedPanels1" class="TabbedPanels">
    
                  <div class="TabbedPanelsContentGroup">
                    <div class="TabbedPanelsContent" bgcolor="#FFFFFF">
                        <img src="bootstrap/image/Jp/middle1.png" width="91" height="91" onmousedown="MM_swapImage('d2','','bootstrap/image/Jp/middle1.png',1)" />
                        <img src="bootstrap/image/Jp/middle2.png" width="91" height="91" onmousedown="MM_swapImage('d2','','bootstrap/image/Jp/middle2.png',1)" />
                    </div>
                    
                  </div>
              </div>

              </div>
              <div role="tabpanel" class="tab-pane" id="profile">...</div>              
              </div>

          </div>
              
         </td>
          </tr>
      </table>
    <div>
        <button style="margin:10px;float:right;width:100px;height:50px;" align = "left" type="button" class="btn btn-default">ยืนยัน</button>
    </div>
</td>
  </tr>
</table>

</div> 
@stop

