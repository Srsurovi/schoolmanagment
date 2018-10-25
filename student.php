<?php 
include('inc/header.php');
?>


<?php
 $mysqli = new mysqli('localhost','root','','school');
  $query= "SELECT * FROM student1";
   $result=$mysqli->query($query);
echo "<table id='customers' align='center'>
<div class='text-center'>
<h3>Our School Student<h3>
</div>
<tr>
<th>Serial</th>
<th>Name</th>
<th>Roll</th>
<th>Class</th>
<th>image</th>							

</tr>";
      
    
while(list($id,$name,$roll,$class,$datafile) = $result->fetch_row()){
	echo "<tr>
	<td>$id</td>
	<td>$name</td>
	<td>$roll</td>
	<td>$class</td>
	<td><img src='$datafile' width='150px'height='150px' /></td>
	</tr>";
}
echo"</table>";

?>

<?php 
include('inc/footer.php');
?>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>