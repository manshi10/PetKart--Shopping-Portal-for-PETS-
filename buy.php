<?php
	session_start();
 	//Connect to server
 	$link = mysql_connect('localhost','root','');
 	//Select the database
 	mysql_select_db("petshop");
    
   //if(isset($_SESSION['prod_id'])) 
    //$prodid = $_SESSION['prod_id'];
  if(isset($_SESSION['var'])) 
  	$prodid = $_SESSION['var'];
   //if(isset($_POST['prod_id'])) 
   	//$prodid=$_POST['prod_id'];

   $custid = $_SESSION['cust_id'];
   $sql1 = "SELECT price from product where prod_id='$prodid'";
   $price = mysql_query($sql1); 
	$sql = "INSERT INTO cart (prod_id, total_cost,quantity, cust_id) VALUES ('{$prodid}', '{$price}',1,'{$custid}') ";
	$result21 = mysql_query($sql); 
	header("Location: Products.php");	
	
	
?>