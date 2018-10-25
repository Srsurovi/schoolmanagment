

<?php
 $mysqli = new mysqli('localhost','root','','school');
  $query= "SELECT * FROM teacher";
   $result=$mysqli->query($query);
echo "<table width='1150' border='1' align='center'>
<div class='text-center'>
<h1>Our School Teacher<h1>
</div>
<tr>
<th>Serial</th>
<th>Name</th>
<th>Subject</th>
<th>Occupation</th>
<th>Picture</th>

</tr>";
      
    
while(list($id,$name,$email,$available,$datafile) = $result->fetch_row()){
	echo "<tr>
	<td>$id</td>
	<td>$name</td>
	<td>$email</td>
	<td>$available</td>
	<td><img src='$datafile' width='200px' /></td>
	</tr>";
}


?>