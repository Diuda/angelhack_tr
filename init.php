<?php

session_start();
// error_reporting(0);

require 'dbconnect.php';
include 'function.php';

// if(logged_in()===true)
// {
// 	$session_user_id=$_SESSION['user_id'];
// 	$user_data=user_data($session_user_id, 'user_id','username','first_name','last_name','email','password');
// 		session_destroy();
// 		header('Location:index.php');
// 		die();
	
// }


$errors=array();
?>