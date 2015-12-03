@extends('home')
@section('content')
<center>
    </center>
สมัครสมาชิก</H1>
          &nbsp; Username &nbsp; <input type="text" name="user_user" maxlength="20" > * <br /><br/>
        &nbsp; Password &nbsp; &nbsp;<input type="text" name="pass_user" maxlength="15"> * <br /><br/>
        &nbsp; Name &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; <input type="text" name="name_user" value="" size="5" maxlength="30"/>&nbsp; * <br/><br/>
        &nbsp; Last name  &nbsp;<input type="text" name="last_user" value="" size="20" maxlength="30"/> &nbsp; *<br /><br/>
        &nbsp; Sex &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="sex_user" value="Male" checked>Male
              <input type="radio" name="sex_user" value="Female">Female <br /><br/>
        &nbsp; Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email_user" size="30"> * <br /><br/>
        &nbsp; Tel. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="tel_user" size="10"> * <br /><br/>
        
          <input type="submit" value="submit" />
        <input type="reset" value="reset">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="20" colspan="2" bgcolor="#FFFFFF">
@stop