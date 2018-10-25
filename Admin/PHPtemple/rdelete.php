<?php
$new_id=$_GET['serial'];

$mysqli=new mysqli('localhost','root','','school');
$query="DELETE FROM result WHERE serial=$new_id";
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);

header('location:result.php');
die();




?>