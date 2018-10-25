<?php
session_start();
include("header.php");
	
	$flag=0;

	if(isset($_POST['submit'])){
			

$salary = count($_POST['salary']);
$status = count($_POST['status']);

if ($salary > 0 && $salary == $status) {
    $insertArr = array();
    for ($i=0; $i<$salary; $i++) {
        $insertArr[] = "('".$_POST['month']."',
		'".$_POST['date']."',
		'". mysqli_real_escape_string($db, $_POST['stname'][$i]) . "',
		'". mysqli_real_escape_string($db, $_POST['desg'][$i]) . "',
		'". mysqli_real_escape_string($db, $_POST['salary'][$i]) . "',
		'". mysqli_real_escape_string($db, $_POST['status'][$i]) . "'
		)" ;
}

 $query = "INSERT INTO teacher_payment (month, date, name, designation, salary, status) VALUES " . implode(", ", $insertArr);
 mysqli_query($db,$query) or trigger_error("Insert failed: " . mysql_error());
}
		
	if($query){
			$flag=1;
		}
		
			
	}


?>


<div class="container">
	<div class="row">
	<div class="col-md-11">
	<div class="card card-header">
		<h2>
			TEACHER PAYMENT
		</h2>
		
	<?php if($flag){ ?>
		<div class="alert alert-success">
			Teacher payments added successfully.
		</div>
	<?php } ?>

		<h2>
			<a class="btn btn-info float-left" href="show_teacher_payment.php">View all</a>
		</h2>  
		
	</div>
	
	
	<form action="#" method="post">
	
	<div class="card card-body">
		
		<div class="form-group">
			<label for="roll"><strong>Select Month</strong></label><br/>
				<select name="month">
					<option value="">Select</option>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
				</select>
		  </div>
		  
		  <div class="form-group">
			<label for="date"><strong>Date</strong></label><br/>
			<input type="date" value="<?php echo $date; ?>"  name="date" />
		  </div>
		  
		
	</div>
	
	<div class="card card-body">
	
		
	
		<table class="table table-striped" border='1'>
		
			<tr>
				<th>Name</th>
				<th>Designation</th>
				<th>Salary</th>
				<th>Status</th>
				
			</tr>
			
					<?php
					
						$salary="";
						$status="";
						
						$result=$db->query("select * from teachers ");
	
						while($row=mysqli_fetch_array($result))
						{
						
					?>
			
			<tr>
			
				<td>
					<?php echo $row['first_name'] .' '. $row['last_name']; ?>
					<input type="hidden" name="stname[]" value="<?php echo $row['first_name'] ." ". $row['last_name']; ?>" />
				</td>
				<td>
					<?php echo $row['designation']; ?>
					<input type="hidden" value="<?php echo $row['designation']; ?>" name="desg[]" />
				</td>
				
				<td><input type="text" value="<?php echo $salary; ?>" name="salary[]"  /></td>
				<td>
					<div class="form-group">
						<select name="status[]">
							<option value="">Select</option>
							<option value="Paid">Paid</option>
							<option value="Unpaid">Unpaid</option>
						
						</select>
					</div>
				</td>
			
				
			</tr>
			
			<?php
					
				}
			?>
		
		</table>
		
		
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-success" value="Submit" />
		</div>
		
	</form>
	
	
	

	</div>
	</div>
	</div>
  
</div>