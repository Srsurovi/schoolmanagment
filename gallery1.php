<?php 
include("header.php");
?>

<div class="container nt_image">
 <h2>Gallery<h2>
 <hr/>
	<div class="row">
		<div class="col-md-12">
			<h4>Convocation Ceremony</h4>
			<div class="row">	
			<?php
 $mysqli = new mysqli('localhost','root','','school');
  $query= "SELECT * FROM student1";
   $result=$mysqli->query($query);

    
while(list($id,$name,$roll,$class,$datafile) = $result->fetch_row()){
	echo "
	
				<div class='col-md-3 '>	
				<img src='$datafile' />
				</div>	
			";
		
	
}
 ?>
			</div>
		</div>
	</div>
</div>
 

<?php 
include("footer.php");
?>

