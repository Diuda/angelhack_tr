<?php
include 'init.php';
$location=$_POST['location'];
$locality=$_POST['locality'];
if(empty($_POST)===false)
{
	
	{
		if(empty($_POST['location'])===true||empty($_POST['locality'])===true)
		{
			$errors[]='The field cannot be empty.';
		}
	}
}
show_reviews($location,$locality);
// header('Location:review.html');

?>

<!-- <form method="post" action="show.php"><br>
<input name="location" placeholder="Enter your Location"></input><br>
<input name="locality" placeholder="Enter your Locality	"></input><br>
<input type="submit" value="Search for reviews"></input>
</form> -->

<html>
<head>
	<title>Bucket</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link type="text/css" rel="stylesheet" href="css/main.css"  media="screen,projection"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/awesomplete.js"></script>
  <link rel="stylesheet" href="css/awesomplete.css"/>
  <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
  <div class="backlo_top">
   <div class="left" id="log">
    <a href="index.php">
     <img class="imag" src="./drawable/logo.png" style="width:125px;height:107px;">
   </a>
 </div>
 <div class="he">
  <h2 class="white-text" >Search for Reviews</h2>
</div>
<form action="show.php" method="post">
  <div class="left" id="se_bar" style="padding-top:40px;padding-left: 140px">
   <input type="text" placeholder="Location" class="foo" name="location" />
 </div>
 <div class="right" id="se_bar" style="padding-top:40px;padding-right: 170px">
   <input type="text" placeholder="Locality" class="foo" name="locality" />
 </div>
<div class="centre" id="add_bar" style="padding-top:60px;">
  <input type="submit" value="Search for Reviews" style="padding-top:5px;" class="waves-effect waves-light btn tras">
</div>
</form>
</div>
</body>
</html>