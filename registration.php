<?php
include 'header.php';
include 'init.php';

if(empty($_POST)===false)
{
	$req_fields=array('username','password','passwordag','first_name','email');
	foreach ($_POST as $key => $value) 
	{
		if(empty($value)&& in_array($key, $req_fields)===true)
		{
			$errors[]='The fields marked in * are required';
			break 1;
		}
	}
}

if(!empty($_POST) && empty($errors)===true)
{
	if(preg_match('/[^0-9a-zA-Z_]/', $_POST['username'])==true)
	{
		$errors[]='Username can contain only characters, numbers and underscore';
	}

	if(strlen($_POST['password']) < 6)
	{
		$errors[]='Your Password should be more than 6 characters.';
	}

	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)==false)
	{
		$errors[]='Enter a valid email address';
	}

	if(email_exists($_POST['email'])===true)
	{
		$errors[]='Email \'' .$_POST['email'].'\' already exists ' ;
	}

}
print_r($errors);

?>

<h2>Register</h2>

<?php
	if(isset($_GET['success']) && empty($_GET['success']))
	{
		echo 'You have been registered';
	}
	else
		{
		if(empty($_POST)===false && empty($errors)===true)
		{

		$register_data=array(
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'first_name' => $_POST['first_name'],
			'last_name' => $_POST['last_name'],
			'email' => $_POST['email']
			);
		header('Location:login.html');
		user_register($register_data);
		
		exit();	

		}

	}
	?>
	<!-- Register form -->
<!-- 	<form action="" method="post">
	<ul id="login" style="list-style:none;">
	<li >
	Username*:<br>
	<input type="text" name="username">
	</li>
	<li>
	Password*:<br>
	<input type="password" name="password">
	</li>
	<li>
	Password again*:<br>
	<input type="password" name="passwordag">
	</li>
	<li >
	First Name*:<br>
	<input type="text" name="first_name">
	</li>
	<li >
	Last Name:<br>
	<input type="text" name="last_name">
	</li>
	<li >
	Email*:<br>
	<input type="text" name="email">
	</li>
	<li>
	<input type="submit" value="Register">
	</li>
	</ul>
	</form> -->
