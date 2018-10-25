<?php
$new_id=$_GET['id'];

$mysqli=new mysqli('localhost','root','','school');
$query="DELETE FROM jahangir WHERE id=$new_id";
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);

header('location:dashboard.php');
die();




?>