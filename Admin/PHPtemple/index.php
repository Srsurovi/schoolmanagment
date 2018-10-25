<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>www.project</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="file/css/font-awesome.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

   
  </head>
  <body>
  <div class="container">
  <div class="row">
  <div class="col-md-3">
 <?php
$mysqli=new mysqli('localhost','root','','jibon');
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$round=$_POST['round'];
	$subject=$_POST['subject'];
	$mysqli->query("insert into jahangir(name,email,phone,round,subject)values('$name','$email','$phone','$round','$subject')");
	echo "yuor informatin succefully";
	
}
?>
<form action="#" method="POST">
<p> update information:-</p>
Exam Name:<input type="text" name="name"/><br/><br/>
Class name:<select name="email">
<option value="">select</option>
<option value="six">Six</option>
<option value="seven">Seven</option>
<option value="Eight">Eight</option>
<option value="Nine">Nine</option>
<option value="Ten">Ten</option>
          </select>
<br/><br/>
Subject:<input type="text" name="phone"/><br/><br/>
Date:<input type="date" name="round"/><br/><br/>
Time:<input type="Time" name="subject"/><br/><br/>
<input type="submit" name="submit" value="submit"/>
</form>

 
 </div>
 <div class="col-md-9">
 <p>Exam routine:-</p>
 <?php
echo"
<div class='row'>
<div class='col-md-1'>serial</div>
<div class='col-md-2'>Exam name</div>
<div class='col-md-1'>Class </div>
<div class='col-md-1'>subject</div>
<div class='col-md-2'>Date</div>
<div class='col-md-1'>Time</div>
<div class='col-md-1'>action</div>
</div>";
	$query="SELECT * FROM jahangir ";
	$result1=$mysqli->query($query);
	while(list($id,$name,$email,$phone,$round,$subject)=$result1->fetch_row()){
		echo"<div class='row'>
<div class='col-md-1'>$id</div>
<div class='col-md-2'>$name</div>
<div class='col-md-1'>$email</div>
<div class'col-md-2'>$phone</div>
<div class='col-md-2'>$round</div>
<div class='col-md-2'>$subject</div>

<div class='col-md-1'><a href='delete.php?id=$id'><i class='fa fa-trash' aria-hidden='true'></i></a>
<a href='edit.php?id=$id&name=$name & email=$email&phone=$phone &round=$round &subject=$subject'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a></div>
		
		
	</div>";
		
	}
	

?>

 
 </div>
 </div>
 </div>
 
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>