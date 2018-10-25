<?php
include("header.php");
	
?>

<div class="container">
	
	<div class="card card-header">
		<h2>
			MANAGE STUDENT Information
		</h2>
	</div>
  <div class="card card-body">
  
	<?php

		$query='SELECT distinct class FROM  students ';
		$query2='SELECT distinct section FROM  students ';
		
					
		$result=$db->query($query, MYSQLI_STORE_RESULT);
		$result2=$db->query($query2, MYSQLI_STORE_RESULT);
		
		
					
	?>
  
  
  
	<form action="show_student.php" method="post">
	  <div class="form-group">
		<label for="roll">Select Class</label><br/>
		<select name="class">
			<option value='Select Name'>Select Class</option>
			<?php
				while(list($class)=$result->fetch_row()){
					echo "
						<option value='$class'>$class</option>";
					}
			?>
			<input type="hidden" value="<?php echo $row['class'] ?>" name="date" />
		</select>
	  </div>
	  <div class="form-group">
		<label for="sec">Select Section</label><br/>
		<select name="section">
			<option value='Select Name'>Select Section</option>
			<?php
				while(list($section)=$result2->fetch_row()){
					echo "
						<option value='$section'>$section</option>";
					}
			?>
			<input type="hidden" value="<?php echo $row['section'] ?>" name="date" />
		</select>
	  </div>
	  
	  
	  <div class="form-group">
		<input type="submit" name="submit" class="btn btn-success" value="Search" />
	  </div>
	  
	</form>

  </div>
  
</div>