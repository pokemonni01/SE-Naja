<style type="text/css">
.table-login {
  padding: 10px;
}
table{
background-color: #fc8cb4
}
</style>
<table width="245" border="0">

  <tr>
    <td width="230" height="240">
  <FORM  METHOD="POST" ACTION="chkmemer.php">
        <Table>
                <TR>
                  <p></p>
                <center>
                <p style="bold 20px;color:#ffffff">สมาชิก</p> 
              </center>
                <div  class="table-login">
                <div class="form-group">
    <label style="bold 16px;color:#ffffff" for="exampleInputEmail1">ชื่อผู้ใช้</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Username">
  </div>
  <div class="form-group">
    <label style="bold 16px;color:#ffffff" for="exampleInputPassword1">รหัสผ่าน</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div></div>
                </TR>
          </TABLE>
          <center>
                <a class="btn btn-default" type="submit" style = "background-color:tranparent" onclick="window.location.href='register'">เข้าสู่ระบบ</a>
                <a class="btn btn-default" type="submit" style = "background-color:tranparent" onclick="window.location.href='register'">ลืมรหัสผ่าน</a>
                <p></p>
                <a class="btn btn-default" href="register">สมัครสมาชิก</a>
      </FORM>
      <p></p>
</td>
  </tr>
</table>