<?php
$mysqli=new mysqli('localhost','root','','file');
	$query="SELECT id, name,email,phone FROM table2 ORDER BY id";
	$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
	
	echo "<table border='1' align='center'>
	<tr>
	<th>id</th>
	<th>name</th>
	<th>email</th>
	<th>phone</th>
	</tr>";
	while(list($id,$name,$email,$phone)=$result->fetch_row()){
		
		echo "<tr>
		<td>$id</td>
		<td>$name</td>
		<td>$email</td>
		<td>$phone</td>
		</tr>";
	}
	echo "</table>";



?>