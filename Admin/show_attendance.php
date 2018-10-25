<?php
include("header.php");

?>

<div class="container">

	<h2><div class="card card-header  text-center">ATTENDANCE SUMMERY</div></h2>

</div>

<div class="container">
	
	
	<div class="card card-header">
		<h2>
			<a class="btn btn-info float-right" href="st_add.php">Back</a>
		</h2>
		
	</div>
  <div class="card card-body">
  
	<form action="st_add.php" method="post">
	
		<table class="table table-striped">
			<tr>
				<th>Class</th>
				<th>Student Name</th>
				<th>Roll Number</th>
				<th>Section</th>
				<th>Attendance Status</th>
			</tr>
			
			<?php
				$result=$db->query("select * from attendance_records where date='$_POST[date]'");
				
				$class=0;
				$counter=0;
				
				while($row=mysqli_fetch_array($result))
				{
				$class++ ;
			?>
			
			<tr>
				<td> <?php echo $row['class']; ?></td>
				<td> <?php echo $row['student_name']; ?>
				</td>
				<td> <?php echo $row['roll_number']; ?>
				
				</td>
				<td><?php echo $row['section']; ?>
					
				</td>
				<td>
					<input type="radio" name="attendance_status[<?php echo $counter; ?>]"
					<?php if($row['attendance_status']=="Present")	
						echo "checked=checked";
					?>
					value="Present"/>Present
					<input type="radio" name="attendance_status[<?php echo $counter; ?>]" 
					<?php if($row['attendance_status']=="Absent")	
						echo "checked=checked";
					?>
					value="Absent"/>Absent
				</td>	
			</tr>	
			
			<?php
			$counter++ ;
			}
			?>
			
		
		</table>
	  
	</form>

  </div>
  
</div>