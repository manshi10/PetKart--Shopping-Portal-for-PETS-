<?php
	session_start();
 	//Connect to server
 	$link = mysql_connect('localhost','root','');
 	//Select the database
 	mysql_select_db("petshop");
 	//Get login details from user
 	$username = $_POST['cust_name'];
 	$email = $_POST['email'];
 	$userpass = $_POST['password'];
 	$houseno = $_POST['house_no'];
 	$city = $_POST['city'];
 	$pincode = $_POST['pincode'];
 	$addressline = $_POST['add_lines'];
 	
 	$query = "SELECT COUNT(`cust_id`) AS `total` FROM `customer` ";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	$id=$row['total'];	
	str_pad($id, 7, '0', STR_PAD_LEFT);
	
	$sql21 = "INSERT INTO customer (cust_id, cust_name, email, password, house_no, city, pincode, add_lines) VALUES ('{$id}', '{$username}','{$email}','{$userpass}','{$houseno}','{$city}','{$pincode}','{$addressline}' ) ";
 	$result21 = mysql_query($sql21);
 	if($result21==1)
	{
		$_SESSION['Registered'] = "true";
	
		header("Location: PetKart.php");
	}
	else
	{
		$_SESSION['Registered'] = "false";
		echo "<p>Registration failed, username or password incorrect.</p>";
	}
?>