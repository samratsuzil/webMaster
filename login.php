<?php
	//store username and password from get request
	//$username = $_GET['user'];
	//$password = $_GET['pass'];

	$username = $_POST['user'];
	$password = $_POST['pass'];

	echo $username;
	echo "<br>";    //calling username
	echo md5($password);    // calling password

?>

	
