<?php
include("header.php");

	$flag=0;
	$update=0;

	if(isset($_POST['submit'])){
		
		$date=date("y-m-d");
		
		$records=$db->query("select * from attendance_records where date='$date'");
		$num=mysqli_num_rows($records);
		
		if($num)
		{
			foreach($_POST['attendance_status'] as $id=>$attendance_status)
			{
			$class=$_POST['class'][$id];
			$student_name=$_POST['student_name'][$id];
			$roll_number=$_POST['roll_number'][$id];
			$section=$_POST['sec'][$id];
			
				$result=$db->query("update attendance_records set class='$class', student_name='$student_name',roll_number='$roll_number',section='$section',attendance_status='$attendance_status',date='$date' 
				where date='$date'");
			
				if($result){
					$update=1;
				}
			
			}
			
		}
		else{

			foreach($_POST['attendance_status'] as $id=>$attendance_status)
			{
			$class=$_POST['class'][$id];
			$student_name=$_POST['student_name'][$id];
			$roll_number=$_POST['roll_number'][$id];
			$section=$_POST['sec'][$id];
			
			$result=$db->query("insert into attendance_records(class,student_name,roll_number,section,attendance_status,date)
			values('$class','$student_name','$roll_number','$section','$attendance_status','$date')");
			
				if($result){
					$flag=1;
				}
			
			}
		}	
	}


?>

<div class="container">

	<h2><div class="card card-header  text-center">ATTENDANCE SUMMERY</div></h2>

</div>

<div class="container">
	
	
	<div class="card card-header">
		<h2>
			<a class="btn btn-info float-right" href="view_all.php">View By Date</a>
		</h2>
		
		<?php if($flag){ ?>
		<div class="alert alert-success">
			Attendance data inserted successfully.
		</div>
		<?php } ?>
		
		<?php if($update){ ?>
		<div class="alert alert-success">
			Student Attendance updated successfully.
		</div>
		<?php } ?>
		
		<h3><div class="card card-header text-center">Date:<?php echo date('m-d-y'); ?></div></h3>
		
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
				$result=$db->query("select * from attendance");
				
				$class=0;
				$counter=0;
				
				while($row=mysqli_fetch_array($result))
				{
				$class++ ;
			?>
			
			<tr>
				<td> <?php echo $row['class']; ?>
				<input type="hidden" value="<?php echo $row['class']; ?>" name="class[]" />
				</td>
				<td> <?php echo $row['student_name']; ?>
				<input type="hidden" value="<?php echo $row['student_name']; ?>" name="student_name[]" />
				</td>
				<td> <?php echo $row['roll_number']; ?>
				<input type="hidden" value="<?php echo $row['roll_number']; ?>" name="roll_number[]" />
				</td>
				<td><?php echo $row['section']; ?>
					<input type="hidden" value="<?php echo $row['section']; ?>" name="sec[]" />
				</td>
				<td>
					<input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Present"
					<?php if(isset($_POST['attendance_status'][$counter]) && $_POST['attendance_status'][$counter]=="Present"){
						echo "checked=checked";
					}
					?>
					/>Present
					<input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Absent"
					<?php if(isset($_POST['attendance_status'][$counter]) && $_POST['attendance_status'][$counter]=="Absent"){
						echo "checked=checked";
					}
					?> 
					/>Absent
				</td>	
			</tr>	
			
			<?php
			$counter++ ;
			}
			?>
			
		
		</table>
		
		<input type="submit" name="submit" value="submit" class="btn btn-primary"/>
	  
	</form>

  </div>
  
</div>