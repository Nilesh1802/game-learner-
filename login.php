<?php

	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="wpmini"; // Database name 
	$link=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysqli_select_db($link,"$db_name")or die("cannot select DB");
	$pass=$_POST['pass'];
	$uid=$_POST['username'];
	$sel_user = "SELECT `name`, `email`, `password`, `user_id` FROM `users` WHERE user_id='$uid' AND password='$pass'";
	$run_user = mysqli_query($link, $sel_user);
	$check_user = mysqli_num_rows($run_user);
	if($check_user>0){
		header("Location: home.html?uname=$username");
	}
	else {
	echo "error";
	}
?>