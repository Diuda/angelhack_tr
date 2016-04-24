<?php
// require 'dbconnect.php';


function sanatize($data)
{
	return htmlentities(strip_tags(mysql_real_escape_string($data)));
}

// function array_sanatize(&$items)
// {
// 	$items=htmlentities(strip_tags(mysql_real_escape_string($items)));
// }


function login($username,$passowrd)
{
	$user_id=user_id($username);
	$username=sanatize($username);
	$password=md5($passowrd);
	return((mysql_result(mysql_query("Select count(`user_id`) from `users` where `username`='$username' and `password`='$password'" ), 0)==1)?$user_id:false);
}
function user_id($username)
{
	$username=sanatize($username);
	return mysql_result(mysql_query("Select `user_id` from `users` where `username`='$username'"), 0,'user_id');	
}
function logged_in()
{
	return(isset($_SESSION['user_id'])?true:false);
}

function user_data($user_id)
{
	$data=array();
	$user_id=(int)$user_id;
	$func_get_args=func_get_args();
	if(func_num_args()>1)
	{
		unset($func_get_args[0]);
		$fields='`' . implode('` , `',$func_get_args) . '`';
		$data=mysql_fetch_assoc(mysql_query("Select $fields from `users` where `user_id`=$user_id"));
		// print_r($data);
		return $data;
	}
}

function email_exists($email)
{
	$email = sanatize($email);
	return (mysql_result(mysql_query("Select count(`user_id`) from `users` where `email`='$email'"), 0)==1) ? true : false;
}

function user_register($register_data)
{
	$register_data['password']=md5($register_data['password']);
	array_walk($register_data, 'array_sanatize');
	$fields='`'.implode('`,`', array_keys($register_data)).'`';
	$data='\''.implode('\',\'', $register_data).'\'';
	mysql_query("insert into `users` ($fields) values ($data)");
	// echo "insert into `test1` ($fields) values ($data)";	
	die();
}
function add_review($location,$locality,$review)
{
	$loc=mysql_query("select `loc_id` from `$location` where `locality`='$locality'");
		if(mysql_num_rows($loc)>0)
		{
			while($row=mysql_fetch_assoc($loc))
			{
				$id=$row["loc_id"];
			}
		}
		if(mysql_query("insert into `reviews`(loc_id,reviews) values('$id','$review')"))
		{
			echo 'review taken';
		}

}
function show_reviews($location,$locality)
{
		$loc=mysql_query("select `loc_id` from `$location` where `locality`='$locality'");
		if(mysql_num_rows($loc)>0)
		{
			while($row=mysql_fetch_assoc($loc))
			{
				$id=$row["loc_id"];
			}
		}
	$rev=mysql_query("select `reviews` from `reviews` where `loc_id`='$id'");
	if(mysql_num_rows($rev)>0)
	{
		header('Location:review.php');
		while($review=mysql_fetch_assoc($rev))
		{

			echo $review['reviews'];
		}
	}
}


function add_location($location)
{

if(mysql_query("create table `$location` (loc_id int(100),reviews varchar(300))")===FALSE)
echo "Location already exists. <br> Post review under the respective location.";
else
    {
        mysql_query("Create table '$location' (loc_id int(100),reviews varchar(300))");
        echo "Location added. You can post reviews now.";
	} 	
}

?>