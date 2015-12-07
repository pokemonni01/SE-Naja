<?php 
	if( !isset($_SESSION['member_status']) ){
?>
@include('login.register1')
<?php 
}
	else if( $_SESSION['member_status']=="S02" ){
?>
@include('login.login')
<?php 

}
	else if( isset($_SESSION['member_status'])=="S01" ){ 
?>
@include('login.adminlogin')
<?php } ?>