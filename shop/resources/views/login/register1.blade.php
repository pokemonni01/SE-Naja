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
<?php echo Form::open(array('url' => '/login', 'method' => 'post')); ?>
        <Table>
                <TR>
                  <p></p>
                <center>
                <div style="bold 36px;color:#ffffff;"><h3>สมาชิก</h3></div> 
              </center>
                <div  class="table-login">
                <div class="form-group">
    <label style="bold 16px;color:#ffffff" for="exampleInputEmail1">ชื่อผู้ใช้</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label style="bold 16px;color:#ffffff" for="exampleInputPassword1">รหัสผ่าน</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div></div>
                </TR>
          </TABLE>
          <center>
                <button class="btn btn-default" type="submit" style = "background-color:tranparent">เข้าสู่ระบบ</button>
                <button class="btn btn-default" type="button" style = "background-color:tranparent" onclick="window.location.href='forget'">ลืมรหัสผ่าน</button>
                <p></p>
                <button class="btn btn-default" type="button" style = "background-color:tranparent" onclick="window.location.href='register'">สมัครสมาชิก</button>
      </form>
      <p></p>
</td>
  </tr>
</table>