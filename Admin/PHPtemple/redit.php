<?php

    $serial=$_GET['serial'];
    $Exam=$_GET['Exam'];
	$Class=$_GET['Class'];
	$pass=$_GET['pass'];
	$fail=$_GET['fail'];
	$total=$_GET['total'];
if(isset($_POST['submit'])){
	$Exam=$_POST['Exam'];
	$Class=$_POST['Class'];
	$pass=$_POST['pass'];
	$fail=$_POST['fail'];
	$total=$_POST['total'];
$mysqli=new mysqli('localhost','root','','school');
$query = "UPDATE  result SET Exam='$Exam',Class='$Class',
 pass='$pass', fail='$fail', total='$total' WHERE serial=$serial";

 $result=$mysqli->query($query,MYSQLI_STORE_RESULT);

 header("Location:result.php");
die();
}
?>
<form action="#" method="POST">
Exam Name:<input type="text" name="Exam" value="<?php echo $Exam; ?>"/><br/><br/>
Class:<input type="text" name="Class" value="<?php echo $Class; ?>"/><br/><br/>
pass:<input type="text" name="pass"value="<?php echo $pass; ?>"/><br/><br/>
fail:<input type="text" name="fail" value="<?php echo $fail; ?>"/><br/><br/>
total:<input type="text" name="total" value="<?php echo $total; ?>"/><br/><br/>
<input type="submit" name="submit" value="submit"/>
</form>
