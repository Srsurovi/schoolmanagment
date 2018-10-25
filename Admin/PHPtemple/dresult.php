
<?php
$mysqli=new mysqli('localhost','root','','school');
	$query="SELECT * FROM result ";
	$result1=$mysqli->query($query);
	
echo"<table width='850' border='1'height='400' align='center'>
All Result Sheet
<tr>
<th>serial</th>
<th> Exam name</th>
<th>Class name</th>
<th>pass</th>
<th>fail</th>
<th>Total</th>


</tr>";
	while(list($serial,$Exam,$Class,$pass,$fail,$total)=$result1->fetch_row()){
		echo"<tr>
		<td>$serial</td>
		<td>$Exam</td>
		<td>$Class</td>
		<td>$pass</td>
		<td>$fail</td>
		<td>$total</td>";
	}
?>