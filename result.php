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
$mysqli=new mysqli('localhost','root','','school');
if(isset($_POST['submit'])){
	$Exam=$_POST['Exam'];
	$Class=$_POST['Class'];
	$pass=$_POST['pass'];
	$fail=$_POST['fail'];
	$total=$_POST['total'];
	$mysqli->query("insert into result(Exam,Class,pass,fail,total)values('$Exam','$Class','$pass','$fail','$total')");
	echo "yuor informatin succefully";
	
}
?>
<form action="#" method="POST">
<p> update information:-</p>
Exam Name:<input type="text" name="Exam"/><br/><br/>
Class name:<select name="Class">
<option value="">select</option>
<option value="six">Six</option>
<option value="seven">Seven</option>
<option value="Eight">Eight</option>
<option value="Nine">Nine</option>
<option value="Ten">Ten</option>
          </select>
<br/><br/>
pass:<input type="text" name="pass"/><br/><br/>
fail:<input type="text" name="fail"/><br/><br/>
Total:<input type="text" name="total"/><br/><br/>
<input type="submit" name="submit" value="submit"/>
</form>

 
 </div>
 <div class="col-md-9">
 <p>Result Sheet:-</p>
 <?php
echo"
<div class='row'>
<div class='col-md-1'>serial</div>
<div class='col-md-2'>Exam name</div>
<div class='col-md-1'>Class </div>
<div class='col-md-1'>Passed</div>
<div class='col-md-1'>fail</div>
<div class='col-md-1'>Total</div>
<div class='col-md-1'>action</div>
</div>";
	$query="SELECT * FROM result ";
	$result1=$mysqli->query($query);
	while(list($serial,$Exam,$Class,$pass,$fail,$total)=$result1->fetch_row()){
		echo"<div class='row'>
<div class='col-md-1'>$serial</div>
<div class='col-md-2'>$Exam</div>
<div class='col-md-2'>$Class</div>
<div class'col-md-1'>$pass</div>
<div class='col-md-1'>$fail</div>
<div class='col-md-1'>$total</div>

<div class='col-md-1'><a href='rdelete.php?serial=$serial'><i class='fa fa-trash' aria-hidden='true'></i></a>
<a href='redit.php?serial=$serial&Exam=$Exam & Class=$Class&pass=$pass &fail=$fail &total=$total'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a></div>
		
		
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