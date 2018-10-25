<?php
include("header.php");

?>



<div class="container">
	
	<div class="card card-header">
		<h2>
			Show Marks
		</h2>
	</div>
	<div class="card card-body">
  
		<?php

			$query='SELECT distinct class FROM  add_result ';
			$query2='SELECT distinct cat_name FROM  add_result ';
			$query3='SELECT distinct roll FROM  add_result ';
			
						
			$result=$db->query($query, MYSQLI_STORE_RESULT);
			$result2=$db->query($query2, MYSQLI_STORE_RESULT);
			$result3=$db->query($query3, MYSQLI_STORE_RESULT);
				
		?>
  
		<form action="show_result.php" method="post">
		  <div class="form-group">
			<label for="sec">Select Exam</label><br/>
			<select name="cat_name">
				<option value='Select Name'>Select Exam</option>
				<?php
					while(list($cat_name)=$result2->fetch_row()){
						echo "
							<option value='$cat_name'>$cat_name</option>";
						}
				?>
				<input type="hidden" value="<?php echo $row['cat_name'] ?>" name="date" />
			</select>
		  </div>
		  
		  <div class="form-group">
			<label for="class">Select Class</label><br/>
			<select name="class">
				<option value='Select class'>Select Class</option>
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
			<label for="class">Select Roll</label><br/>
			<select name="roll">
				<option value='Select Roll'>Select Class</option>
				<?php
					while(list($roll)=$result3->fetch_row()){
						echo "
							<option value='$roll'>$roll</option>";
						}
				?>
				<input type="hidden" value="<?php echo $row['roll'] ?>" name="date" />
			</select>
		  </div>
		  
		  <div class="form-group">
			<input type="submit" name="submit" class="btn btn-success" value="Search" />
		  </div>
		  
		</form>

	</div>
  
</div>