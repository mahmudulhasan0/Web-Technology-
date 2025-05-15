<?php
session_start();
if(isset($_POST['logOut']))
{
	session_destroy();
	header('location:login.php');
}
?>

