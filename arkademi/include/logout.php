<?php  session_start();
if(isset($_SESSION['username']))
{
	session_destroy();
	header('Location:../login.php?note=logout');
}else{
	session_destroy();
	header('Location:../login.php?note=login');
}
?>