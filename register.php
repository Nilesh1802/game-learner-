<?php

	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="wpmini"; // Database name 
	$link=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysqli_select_db($link,"$db_name")or die("cannot select DB");
	$pass=$_POST['pass'];
	$uid=$_POST['username'];
	$name=$_POST['name'];
	$email=$_POST['mail'];
	$sql2 = "INSERT INTO users (user_id, name, email, password) VALUES ('$uid', '$name', '$email', '$pass')";
	$result2 = mysqli_query($link,$sql2) or die(mysqli_error($link));
	if($result2)
	{
		echo 'successful';
		header("Location: index.html");
	}
	else
	{
		echo 'registration failed';
	}
?>	