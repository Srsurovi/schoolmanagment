<?php

	$id2=$_POST["id"];		
	$photo=$_POST["photo"];		
	$name=$_POST["name"];		
	$class=$_POST["class"];	
	$sec=$_POST["section"];

		
	
	$mysqli=new mysqli('localhost', 'root', '', 'school');
	
	$query="UPDATE students SET photo='$photo' name='$name', class='$class', section='$sec' WHERE id=$id2";
	
	$result=$mysqli->query($query, MYSQLI_STORE_RESULT);
	
	header("Location:stview.php");
	die();

?>