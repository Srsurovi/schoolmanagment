
<body>
</html>
<style>
fieldset{
	width:250px;
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
Roll:<input type="text" name="id"/><br/>
<input type="submit"  name="submit" value="search"/>
</form>
</center>
</fieldset>

<?php
   if(isset($_POST['submit'])){
	   $id=$_POST['id'];
	   
	$query="SELECT id, name,roll,Bangla,english,math,islam,science,Agriculture  FROM search WHERE id='$id'";
	$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
	
	echo "<table border='1' align='center' bgColor='green'>
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
</html>
</body>