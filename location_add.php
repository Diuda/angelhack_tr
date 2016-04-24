<?php
include 'init.php';



$location=$_POST['location'];
if(empty($_POST['location'])===false)
  {
    add_location($location);

  }


?>


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
  <h2 class="white-text" id="hea">LOCATION</h2>
</div>
<form action="location_add.php" method="post">
  <div class="centre" id="se_bar" style="padding-top:100px">
   <input type="text" placeholder="Location" class="foo" name="location" />
 </div>
 <br>
 <br>
<div class="centre" id="add_bar" style="padding-top:100px;">
  <input type="submit" value="Add" style="padding-top:10px;" class="waves-effect waves-light btn tras">
</div>
</form>
<br>
<br>
<br>
</div>
</body>
</html>