<?php
$mysqli=new mysqli('localhost','root','','school');
 if(isset($_POST['submit'])){
	   $name=$_POST['name'];
	   $roll=$_POST['roll'];
	   $Bangla=$_POST['Bangla'];
	   $english=$_POST['english'];
	   $math=$_POST['math'];
	   $islam=$_POST['islam'];
	   $science=$_POST['science'];
	   $Agriculture=$_POST['Agriculture'];
	$mysqli->query("INSERT INTO search(name,roll,Bangla,english,math,islam,science,Agriculture)
	values('$name','$roll','$Bangla','$english','$math','$islam','$science',$Agriculture)");
	echo"your data insert successfully";
 }
?>


 <center>
<form action="#" method="POST"> 
name:<input type="text" name="name"/><br/><br/>
roll:<input type="text" name="roll"/><br/><br/>
Bangla:<input type="text" name="Bangla"/><br/><br/>
english:<input type="text" name="english"/><br/><br/>
math:<input type="text" name="math"/><br/><br/>
islam:<input type="text" name="islam"/><br/><br/>
science:<input type="text" name="science"/><br/><br/>
Agriculture:<input type="text" name="Agriculture"/><br/><br/>
<input type="submit"  name="submit" value="submit"/>
</form>
</center>


<?php
  
	
	
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
	   
	$query="SELECT *FROM search";
	$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
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
   
   
  
?>