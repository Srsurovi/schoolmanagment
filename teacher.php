<?php 
include("header.php");
?>

<div class="container sc_teacher">
 <h2>Our School Teachers<h2>
 <hr/>
	<div class="row">
					<?php
 $mysqli = new mysqli('localhost','root','','school');
  $query= "SELECT * FROM teachers";
   $result=$mysqli->query($query);

      
    
while(list($id,$first_name,$last_name,$designation,$birth_date,$sex,$contact,$email,$address,$city,$country,$reg_date,$photo) = $result->fetch_row()){
	echo "
	
		<div class='col-md-4 padding_botttom'>
			<div class='teachers'>
				<div class='sc_teacher1'> ";?>
				<?php echo	'<img height="300px" src="'.$photo.'" class="image"/>' ?>
				<?php echo	"<div class='overlay'>
						<div class='text'>
							<a href='http://facebook.com/' target='_blank'><i class='fa fa-facebook-official'></i></a>
							<a href='http://twitter.com/' target='_blank'><i class='fa fa-twitter'></i></a>
							<a href='http://linkedin.com/' target='_blank'><i class='fa fa-linkedin'></i></a>
						</div>
					</div>
				</div>
				<h2>$first_name.$last_name</h2>
				<h3>$designation</h3>
			</div>
			</div>";
}
?>
			
	 </div>
 
 </div>
 

<?php 
include("footer.php");
?>

