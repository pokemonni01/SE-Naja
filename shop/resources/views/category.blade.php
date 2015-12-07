<table width="245" border="0"style="float:top;">
  <tr>
    <td bgcolor="#fc8cb4">
      <p></p>
      <center><div style="color:#ffffff;"><h3>ประเภทสินค้า</h3></div></center>
      <ul>
         <?php
    $watch = DB::table('product')->where('product_type','T00')->get();
    $ring = DB::table('product')->where('product_type','T01')->get();
    $watchgirl = DB::table('product')->where('product_type','T02')->get();
    $d=sizeof($watch);
    $a=sizeof($ring);
    $b=sizeof($watchgirl);?>
  <li><a align="left" href="/se/categoryall" style="color:#ffffff">สินค้าทั้งหมด (9,890)</a><p></p></li>
   <li><a align="left" href="/se/categoryall" style="color:#ffffff">สินค้ามาใหม่ (54)</a><p></p></li>
   <li><a align="left" href="/" style="color:#ffffff">สินค้าแนะนำ (213)</a><p></p></li>
   <?php echo '
    <li> <a align="left" href="/se/categoryall/T02" style="color:#ffffff">นาฬิกาข้อมือหญิง ('.$b.')</a><p></p></li>';?>
    <?php
      echo '<li> <a align="left" href="/se/categoryall/T00" style="color:#ffffff">นาฬิกาข้อมือชาย ('.$d.')</a><p></p></li>';?>

      <li> <a align="left" href="/se/watchchoosesex" style="color:#ffffff">กำไรข้อมือ (89)</a><p></p></li>
      <li> <a align="left" href="/" style="color:#ffffff">ต่างหู (543)</a><p></p></li>
     <?php
     echo '<li> <a align="left" href="/se/categoryall/T01" style="color:#ffffff">แหวน ('.$a.')</a><p></p></li>';?>
      <li> <a align="left" href="/" style="color:#ffffff">สร้อย (1,980)</a><p></p></li>
      <li> <a align="left" href="/" style="color:#ffffff">ที่คาดผม (89)</a><p></p></li>
      <a style="float:right; margin:10px;" href="/se/categoryall" type="button" class="btn btn-default">เพิ่มเติม</a>
      
</ul>
</td>
  </tr>
</td>
</table>
