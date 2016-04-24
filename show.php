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