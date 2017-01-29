<?php
	session_start();
	$con = mysqli_connect("localhost","root","","petshop");
 	//Connect to server
 	$link = mysql_connect('localhost','root','');
 	//Select the database
 	mysql_select_db("petshop");
 	//Get login details from user
 	$username = $_POST['username'];
 	$userpass = $_POST['password'];
 	
 	$sql = "SELECT * FROM customer where email='$username' AND password ='$userpass'";
 	$result = mysql_query($sql);
 	$row = mysql_fetch_assoc($result);
 	$custid=$row['cust_id'];
 	$name=$row['cust_name'];
 	$query = "SELECT COUNT(`email`) AS `total` FROM `customer` WHERE `email` = '$username' AND `password` = '$userpass'";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	if($row['total'] == 1)
	{
		$_SESSION['loggedIn'] = "true";
		$_SESSION["cust_id"] = $custid;
		$_SESSION["name"] = $name;
		header("Location: PetKart.php");
	}
	else
	{
		$_SESSION['loggedIn'] = "false";
		echo "<p>Login failed, username or password incorrect.</p>";
	}



?>