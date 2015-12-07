@extends('home')
@section('activebar')
""
@stop
@section('content')
<table   bgcolor=RGB(249,223,232) height="50" width="100%" border="0" class="size6" >
      <td>
      	<FONT COLOR=#FFFFFF class="size5" >
      		<p class="head" style=" margin:10px"><h1>&nbsp;สมัครสมาชิก</h1></p>
      	</FONT>
      </td>
    </table>
    
    <?php echo Form::open(array('url' => '/register','class'=>'form-horizontal', 'method' => 'post', 'files' => true)); ?>
		  <div bgcolor=RGB(249,223,232)>
          <p></p>
          <p><label style="bold 16px">&nbsp;&nbsp;&nbsp;ชื่อ</label>
      	  <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_Firstname" maxlength="30" size="40" 
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF" required="true" ></br></p>
          
          
          <p><label style="bold 16px">&nbsp;&nbsp;&nbsp;นามสกุล</label>
          <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_lastname" maxlength="30" size="40"
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF" required></br></p>
          
          
          <p><Font style="bold 16px">&nbsp;&nbsp;&nbsp;ชื่อผู้ใช้</Font>
          <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_name" value="" size="40" maxlength="30"
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>
          
          <p><Font style="bold 16px">&nbsp;&nbsp;&nbsp;อีเมล</Font>
          <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_mail" value="" size="40" maxlength="30"
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>
       	  
          <p><Font style="bold 16px">&nbsp;&nbsp;&nbsp;กรอกอีเมลอีกครั้ง</Font>
          <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_mail2" size="40"
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>
          
          <p><Font style="bold 16px">&nbsp;&nbsp;&nbsp;รหัสผ่าน</Font>
          <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_password" size="40"
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>
          
          <p><Font style="bold 16px">&nbsp;&nbsp;&nbsp;กรอกรหัสผ่านอีกครั้ง</Font>
          <br>&nbsp;&nbsp;&nbsp;<input type="text" name="user_password2" size="40"
          STYLE="height: 30px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></br></p>
          
          <p><Font style="bold 16px">&nbsp;&nbsp;&nbsp;ที่อยู่</Font>
          <br>&nbsp;&nbsp;&nbsp;<textarea name="user_address" cols="43" rows="5" 
          STYLE="height: 70px; font-family: SukhumVit; font-size: 20px; 
          background-color: RGB(249,223,232); border:1.5px solid #FFFFFF"></textarea></br></p>
          
          
          <p><Font style="bold 16px">&nbsp;&nbsp;&nbsp;วันเกิด</Font>
          <br>
				&nbsp;&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
			function _form_date_dropdown_update(field) {
				var day = $('#' + field + '_day').val();
				var month = $('#' + field + '_month').val();
				var year = $('#' + field + '_year').val();
				$('#' + field).val(year + '-' + month + '-' + day);
			}
		        </script>
				<select id="birthday_day" onchange="_form_date_dropdown_update('birthday');">
				  <option value="-1">วัน</option>
				  <option value="01">1</option>
				  <option value="02">2</option>
				  <option value="03">3</option>
				  <option value="04">4</option>
				  <option value="05">5</option>
				  <option value="06">6</option>
				  <option value="07">7</option>
				  <option value="08">8</option>
				  <option value="09">9</option>
				  <option value="10">10</option>
				  <option value="11">11</option>
				  <option value="12">12</option>
				  <option value="13">13</option>
				  <option value="14">14</option>
				  <option value="15">15</option>
				  <option value="16">16</option>
				  <option value="17">17</option>
				  <option value="18">18</option>
				  <option value="19">19</option>
				  <option value="20">20</option>
				  <option value="21">21</option>
				  <option value="22">22</option>
				  <option value="23">23</option>
				  <option value="24">24</option>
				  <option value="25">25</option>
				  <option value="26">26</option>
				  <option value="27">27</option>
				  <option value="28">28</option>
				  <option value="29">29</option>
				  <option value="30">30</option>
				  <option value="31">31</option>
		    </select> 
			  <select id="birthday_month" onchange="_form_date_dropdown_update('birthday');">
				  <option value="-1">เดือน</option>
				  <option value="01">มกราคม</option>
				  <option value="02">กุมภาพันธ์</option>
				  <option value="03">มีนาคม</option>
				  <option value="04">เมษายน</option>
				  <option value="05">พฤษภาคม</option>
				  <option value="06">มิถุนายน</option>
				  <option value="07">กรกฎาคม</option>
				  <option value="08">สิงหาคม</option>
				  <option value="09">กันยายน</option>
				  <option value="10">ตุลาคม</option>
				  <option value="11">พฤศจิกายน</option>
				  <option value="12">ธันวาคม</option>
		    </select> 
			  <select id="birthday_year" onchange="_form_date_dropdown_update('birthday');">
				  <option value="-1">ปี</option>
				  <option value="2015">2558</option>
				  <option value="2014">2557</option>
				  <option value="2013">2556</option>
				  <option value="2012">2555</option>
				  <option value="2011">2554</option>
				  <option value="2010">2553</option>
				  <option value="2009">2552</option>
				  <option value="2008">2551</option>
				  <option value="2007">2550</option>
				  <option value="2006">2549</option>
				  <option value="2005">2548</option>
				  <option value="2004">2547</option>
				  <option value="2003">2546</option>
				  <option value="2002">2545</option>
				  <option value="2001">2544</option>
				  <option value="2000">2543</option>
				  <option value="1999">2542</option>
				  <option value="1998">2541</option>
				  <option value="1997">2540</option>
				  <option value="1996">2539</option>
				  <option value="1995">2538</option>
				  <option value="1994">2537</option>
				  <option value="1993">2536</option>
				  <option value="1992">2535</option>
				  <option value="1991">2534</option>
				  <option value="1990">2533</option>
				  <option value="1989">2532</option>
				  <option value="1988">2531</option>
				  <option value="1987">2530</option>
				  <option value="1986">2529</option>
				  <option value="1985">2528</option>
				  <option value="1984">2527</option>
				  <option value="1983">2526</option>
				  <option value="1982">2525</option>
				  <option value="1981">2524</option>
				  <option value="1980">2523</option>
				  <option value="1979">2522</option>
				  <option value="1978">2521</option>
				  <option value="1977">2520</option>
				  <option value="1976">2519</option>
				  <option value="1975">2518</option>
				  <option value="1974">2517</option>
				  <option value="1973">2516</option>
				  <option value="1972">2515</option>
				  <option value="1971">2514</option>
				  <option value="1970">2513</option>
				  <option value="1969">2512</option>
				  <option value="1968">2511</option>
				  <option value="1967">2510</option>
				  <option value="1966">2509</option>
				  <option value="1965">2508</option>
				  <option value="1964">2507</option>
				  <option value="1963">2506</option>
				  <option value="1962">2505</option>
				  <option value="1961">2504</option>
				  <option value="1960">2503</option>
				  <option value="1959">2502</option>
				  <option value="1958">2501</option>
				  <option value="1957">2500</option>
				  <option value="1956">2499</option>
				  <option value="1955">2498</option>
				  <option value="1954">2497</option>
				  <option value="1953">2496</option>
				  <option value="1952">2495</option>
				  <option value="1951">2494</option>
				  <option value="1950">2493</option>
				  <option value="1949">2492</option>
				  <option value="1948">2491</option>
				  <option value="1947">2490</option>
				  <option value="1946">2489</option>
				  <option value="1945">2488</option>
				  <option value="1944">2487</option>
				  <option value="1943">2486</option>
				  <option value="1942">2485</option>
				  <option value="1941">2484</option>
				  <option value="1940">2483</option>
				  <option value="1939">2482</option>
				  <option value="1938">2481</option>
				  <option value="1937">2480</option>
				  <option value="1936">2479</option>
				  <option value="1935">2478</option>
				  <option value="1934">2477</option>
				  <option value="1933">2476</option>
				  <option value="1932">2475</option>
				  <option value="1931">2474</option>
				  <option value="1930">2473</option>
				  <option value="1929">2472</option>
				  <option value="1928">2471</option>
				  <option value="1927">2470</option>
				  <option value="1926">2469</option>
				  <option value="1925">2468</option>
				  <option value="1924">2467</option>
				  <option value="1923">2466</option>
				  <option value="1922">2465</option>
				  <option value="1921">2464</option>
				  <option value="1920">2463</option>
				  <option value="1919">2462</option>
				  <option value="1918">2461</option>
				  <option value="1917">2460</option>
				  <option value="1916">2459</option>
				  <option value="1915">2458</option>
		    </select>
			  <input id="birthday" type="hidden" name="birthday" value="" 
              STYLE="height: 20px; font-family: SukhumVit; font-size: 20px; 
          	   background-color: RGB(249,223,232); border:1.5px solid #FFFFFF">
				<span class="varidate-sign"></span><span class="error_message"></span>

          </br></p>
          
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
          
          <p>&nbsp;&nbsp;&nbsp;<Font style="bold 16px"><input type="checkbox" name="subscribe" value="1" />
          ฉันยอมรับ<a href="eula"><font style="bold 16px" color="#FF3366">ข้อกำหนดในการให้บริการ</font></a></p>
          </div>
          
          <p>&nbsp;&nbsp;&nbsp;<Font style="bold 16px">Picture <input type="file" name="filUpload"></p></Font>
	
    <center>

      <p>&nbsp;</p>
      <button type="submit" class="btn btn-default" >Submit</button>
      <p>&nbsp;</p>


    </center>
</form>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/js/bootstrap.min.js"></script>
@stop