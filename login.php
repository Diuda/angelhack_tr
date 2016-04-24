<?php
include 'init.php';
// include 'function.php';

if(empty($_POST)===false)
{
	$username=$_POST['username'];
	$password=$_POST['password'];
}
if(empty($username)==true||empty($password)==true)
{
$errors[]='Please enter username and password';
}
	$login=login($username,$password);
	if($login===false)
		$errors[]='combination incorect';
	else
	{
		$_SESSION['user_id']=$login;
		header('Location:index.php');
		exit();
	}

print_r($errors);
?>

