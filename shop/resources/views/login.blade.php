<style type="text/css">
.table-login {
  padding: 10px;
}
table{
background-color: #fc8cb4
}
</style>
<?php
$member = DB::table('member')->where('member_id', $_SESSION['member_id'])->first();
?>
<table width="245" border="0">
  <tr>
    <td width="230" height="240">
  <FORM  METHOD="POST" ACTION="chkmemer.php">
        <Table>
                <TR>
                  <p></p>
                <center>
                <div style="bold 36px;color:#ffffff;"><h2>สมาชิก</h2></div> 
                <img width="200" height="200" src="/SE/bootstrap/image/Jp/facebook.jpg" class="img-circle">
                 <p></p>
                <div style="bold 36px;color:#ffffff;">ยินดีต้อนรับ</div> 
                <div style="bold 36px;color:#ffffff;"><h4>คุณ<?php echo $member->member_name.'   '.$member->member_lastname; ?></h4></div> 
                <button style="width:70%;height:45px" type="button" class="btn btn-default">ข้อมูลส่วนตัว</button>
                <p></p>
                <button style="width:70%;height:45px" type="button" class="btn btn-default">รายการสั่งซื้อ</button>
                <p></p>
                <button style="width:70%;height:45px" type="button" class="btn btn-default">เช็คสถานะการจัดส่ง</button>
                <p></p>
                <a style="width:70%;height:45px" class="btn btn-default" href="logout">ออกจากระบบ</a>
                <p></p>
              </center>
                
                </TR>
          </TABLE>
          <center>

      </FORM>
      <p></p>
</td>
  </tr>
</table>