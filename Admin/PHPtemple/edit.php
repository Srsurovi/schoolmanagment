<?php

    $id=$_GET['id'];
    $name=$_GET['name'];
	$email=$_GET['email'];
	$phone=$_GET['phone'];
	$round=$_GET['round'];
	$subject=$_GET['subject'];
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$round=$_POST['round'];
	$subject=$_POST['subject'];
$mysqli=new mysqli('localhost','root','','jibon');
$query = "UPDATE  jahangir SET name='$name',email='$email',
 phone='$phone', round='$round', subject='$subject' WHERE id=$id";

 $result=$mysqli->query($query,MYSQLI_STORE_RESULT);

 header("Location:index.php");
die();
}
?>
<form action="#" method="POST">
Exam Name:<input type="text" name="name" value="<?php echo $name; ?>"/><br/><br/>
Class:<input type="text" name="email" value="<?php echo $email; ?>"/><br/><br/>
Subject:<input type="text" name="phone"value="<?php echo $phone; ?>"/><br/><br/>
Date:<input type="date" name="round" value="<?php echo $round; ?>"/><br/><br/>
Time:<input type="Time" name="subject" value="<?php echo $subject; ?>"/><br/><br/>
<input type="submit" name="submit" value="submit"/>
</form>
