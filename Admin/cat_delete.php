<?php

	$id=$_GET['id'];

	$db=new mysqli('localhost', 'root', '', 'school');
	
	$query="DELETE FROM payment_cat WHERE id=$id";
	
	$result=$db->query($query, MYSQLI_STORE_RESULT);

	header("Location:paymentcat.php");
	die();

?>