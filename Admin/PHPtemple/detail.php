<html>
<body>
<head>
<title>www.notice</title>
<link href="css/bootstrap.css" rel="stylesheet">
    <link href="file/css/font-awesome.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
	</head>
<?php
$mysqli=new mysqli('localhost','root','','jibon');
	$query="SELECT * FROM jahangir ";
	$result1=$mysqli->query($query);
echo"<table width='600' border='1'height='400' align='center'>

<tr>
<th>serial</th>
<th> Exam name</th>
<th>Class name</th>
<th>Subject</th>
<th>Date</th>
<th>Time</th>


</tr>";
	while(list($id,$name,$email,$phone,$round,$subject)=$result1->fetch_row()){
		echo"<tr>
		<td>$id</td>
		<td>$name</td>
		<td>$email</td>
		<td>$phone</td>
		<td>$round</td>
		<td>$subject</td>";
	}
?>
<div class="container">
<h2>Routine Download</h2>
  <a target="_blank" href="detail.php" download="value" class="btn btn-primary">Download</a>
</div>
</html>
</body>