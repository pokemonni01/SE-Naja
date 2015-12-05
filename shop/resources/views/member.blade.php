<?php 
	if( !isset($_SESSION['member_status']) ){
?>
@include('register1')
<?php 
}
	else if( isset($_SESSION['member_status']) ){
?>
@include('login')
<?php } ?>