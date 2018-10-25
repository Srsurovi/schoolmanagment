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
		
	$total=$Bangla+$english+$math+$islam+$science+$Agriculture
	   echo'<td>$total</td>';
	   </tr>";
	
	}
	
	echo "</table>";
   
   
  
?>