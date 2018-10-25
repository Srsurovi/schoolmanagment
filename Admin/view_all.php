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
  
	
	
		<table class="table table-striped">
			<tr>
				<th>Serial Number</th>
				<th>Dates</th>
				<th>Show Attendance</th>
			</tr>
			
			<?php
				$result=$db->query("select distinct date from attendance_records");
				
				$serial_num=0;
				
				while($row=mysqli_fetch_array($result))
				{
				$serial_num++ ;
			?>
			
			<tr>
				<td> <?php echo $serial_num; ?></td>
				<td> <?php echo $row['date']; ?></td>
				<td>
					<form action="show_attendance.php" method="post">
						<input type="hidden" value="<?php echo $row['date'] ?>" name="date" />
						<input type="submit" value="Show Attendance" class="btn btn-primary"/>
					</form>
				
				</td>
	
			</tr>	
			
			<?php
			}
			?>
			
		
		</table>
		
	  
	</form>

  </div>
  
</div>