
<table   bgcolor="#FFFFFF" height="50" width="100%" border="0" class="size6" >
      <td>
      	<FONT COLOR=#FFFFFF class="size5" >
      		<p class="head" style=" margin:10px"><h1><CENTER>&nbsp;&nbsp;&nbsp;ลืมรหัสผ่าน</CENTER></h1></p>
      	</FONT>
      </td>
    </table>
    
    <?php echo Form::open(array('url' => '/forget','class'=>'form-horizontal', 'method' => 'post', 'files' => true)); ?>
		  <div bgcolor=RGB(249,223,232)>
          
          <p></p>
          <label style="font-size:20px;color:RED">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*กรุณากรอกให้ครบทุกช่อง</label>
          


          <p></p>

          <p><label style="bold 16px">&nbsp;&nbsp;&nbsp;รหัสสมาชิก</label>
      	  <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_id" maxlength="30" size="40" 
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>


          <p><label style="bold 16px">&nbsp;&nbsp;&nbsp;ชื่อ</label>
      	  <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_Firstname" maxlength="30" size="40" 
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>
          
          
          <p><label style="bold 16px">&nbsp;&nbsp;&nbsp;นามสกุล</label>
          <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_lastname" maxlength="30" size="40"
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>
          
          
          <p><Font style="bold 16px">&nbsp;&nbsp;&nbsp;ชื่อผู้ใช้</Font>
          <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_name" value="" size="40" maxlength="30"
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>
          
          <p><Font style="bold 16px">&nbsp;&nbsp;&nbsp;อีเมล</Font>
          <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_mail" value="" size="40" maxlength="30"
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>
          
          <p><Font style="bold 16px">&nbsp;&nbsp;&nbsp;เบอร์โทร</Font>
          <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_Tel" size="40"
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>
           
          &nbsp;&nbsp;&nbsp;<img src="bootstrap/image/Jp/capcha.png" 
            width="200" height="50" />
          <p><Font style="bold 16px">&nbsp;&nbsp;&nbsp;กรอกตัวเลขตามรูป</Font>
          <br>&nbsp;&nbsp;&nbsp;<input type="text" name="capcha" size="40"
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>
	
    <center>

      <p>&nbsp;</p>
      <button type="submit" class="btn btn-default" >ยืนยัน</button>
      <p>&nbsp;</p>


    </center>
</form>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/js/bootstrap.min.js"></script>
