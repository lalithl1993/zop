<?php
 if(!isset($_SESSION)){ session_start();}
      include("admin/config.php");

 if(isset($_SESSION['user_login']))
    {
		$user_id=$_SESSION['user_id'];
		$u_email=$_SESSION['email'];
		$qqq=mysql_query("update users set status ='0' where email='$u_email'");
		session_unset();
		header("location:index.php");
	}
	
?>
