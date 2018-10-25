<?php

	$id=$_GET['id'];

	$mysqli=new mysqli('localhost', 'root', '', 'school');
	
	$query="DELETE FROM hoildays WHERE id=$id";
	
	$result=$mysqli->query($query, MYSQLI_STORE_RESULT);

	header("Location:holiday.php");
	die();

?>