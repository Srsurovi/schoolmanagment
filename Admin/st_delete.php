<?php

	$id=$_GET['id'];

	$mysqli=new mysqli('localhost', 'root', '', 'school');
	
	$query="DELETE FROM students WHERE id=$id";
	
	$result=$mysqli->query($query, MYSQLI_STORE_RESULT);

	header("Location:show_all_student.php");
	die();

?>