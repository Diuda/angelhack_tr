<?php
include 'init.php';
$location=$_POST['location'];
$locality=$_POST['locality'];
$review=$_POST['review'];
if(empty($_POST)===false)
{
	
	{
		if(empty($_POST['location'])===true||empty($_POST['locality'])===true||empty($_POST['review'])===true)
		{
			$errors[]='The field cannot be empty.';
		}
	}
}


add_review($location,$locality,$review);

?>
<form method="post" action="reviews.php">
<input type="text" name="location" placeholder="Specify the location"></input><br>
<input type="text" name="locality" placeholder="Specify the locality"></input><br>
<textarea name="review" style="height:200px;width:400px;" placeholder="Please limit your review to 300 words">
</textarea>
<br>
<input type="submit" value="Submit Review"></input>
</form>

