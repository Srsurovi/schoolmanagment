<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>www.school.com</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
<body bgColor="#D5DCEE">
<style>
fieldset{
	width:450px;
	background:#dddd;
}
th {
	text-align: left;
	background: #1B8732;
}
</style>

<?php
$mysqli=new mysqli('localhost','root','','school');
	$query="SELECT id, name,roll,Bangla,english,math,islam,science,Agriculture FROM search ORDER BY id";
	$result=$mysqli->query($query,MYSQLI_STORE_RESULT);


?>
<fieldset>
<legend>Your Result Search</legend>
 <center>
<form action="#" method="POST"> 
Roll:<input type="text" name="id"/><br/><br/>
<input type="submit"  name="submit" value="search"/>
</form>
</center>
</fieldset>

<?php
   if(isset($_POST['submit'])){
	   $id=$_POST['id'];
	   
	$query="SELECT id, name,roll,Bangla,english,math,islam,science,Agriculture  FROM search WHERE id='$id'";
	$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
   
	echo "<table border='1' align='center'>
	<tr>
	<th>id</th>
	<th>name</th>
	<th>roll</th>
	<th>Bangla</th>
	<th>english</th>
	<th>math</th>
	<th>islam</th>
	<th>science</th>
	<th>Agriculture</th>
	
	</tr>";
	while(list($id,$name,$roll,$Bangla,$english,$math,$islam,$science,$Agriculture)=$result->fetch_row()){
		
		echo "<tr>
		<td>$id</td>
		<td>$name</td>
		<td>$roll</td>
		<td>$Bangla</td>
		<td>$english</td>
		<td>$math</td>
		<td>$islam</td>
		<td>$science</td>
		<td>$Agriculture</td>
		</tr>";
		
	}
	echo "</table>";
   
   }
   
  
?>
<hr/>
<div class="container">
<h2>Result Download</h2>
  <a target="_blank" href="seach.php" download="value" class="btn btn-primary">Download</a>
</div>
</body>
</html>