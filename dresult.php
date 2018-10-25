<?php 
include('inc/header.php');
?>

<section>
<div class="container">
<h1>About our school Result</h1>
    <div class="row text-center">
     
	  <?php 
	  $mysqli=new mysqli('localhost','root','','school');
	  $query="SELECT * FROM content";
	  $result=$mysqli->query($query);
	  while(list($id,$title,$body,$category,$file)=$result->fetch_row()){
		  
	   echo " <div class='col-md-3 all_hover'>
	 
	   <h2>$title</h2>
	    <p>$body </p>
       </div>";
	     }
	    ?>
	
     </div>
	
</div>
</section>
<div class="container">
<div class="row">
<div class="col-md-12">

<?php
$mysqli=new mysqli('localhost','root','','school');
	$query="SELECT * FROM result ";
	$result1=$mysqli->query($query);
	
echo"<table id='customers' align='center'>
<div class='text-center'>
<h3>Our School All result<h3>
</div>
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
	echo"</table>";
?>
</div>

</div>


</div>
<?php 
include('inc/footer.php');
?>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
	
</body>
</html>