<?php
   $id=$_GET['id'];
  $name=$_GET['name'];
 $subject=$_GET['subject'];
 $position=$_GET['position'];

if(isset($_POST['submit'])){
	$name=$_POST['name'];
 $subject=$_POST['subject'];
 $position=$_POST['position'];
 $target_dir="uploads/";
	echo $target_file=$target_dir.basename($_FILES["datafile"]["name"]);
	if(move_uploaded_file($_FILES["datafile"]["tmp_name"],$target_file)){
		echo"This file successfully";
	}else{
		echo"Sorry,It is not uploaded";
	}
$mysqli=new mysqli('localhost','root','','school');
$query = "UPDATE  teacher1 SET name='$name',subject='$subject',
 position='$position', WHERE id=$id";

 $result=$mysqli->query($query,MYSQLI_STORE_RESULT);
 header("Location:teacher.php");
die();
}
?>

<form action="#" enctype="multipart/form-data" method="POST">
<h2>Information update</h2>
Name:<input type="text" name="name" value="<?php echo $name; ?>"/><br/><br/>  
Subject:<input type="text" name="subject" value="<?php echo $subject; ?>"/><br/><br/>  
Position:<input type="text" name="position" value="<?php echo $position; ?>"/><br/><br/> 
<input type="file" name="datafile"value="<?php echo $datafile; ?>"/><br/><br/> 
<input type="submit"name="submit" value="submit"/>
</form>
