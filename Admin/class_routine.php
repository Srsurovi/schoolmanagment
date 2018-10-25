<?php
include("header.php");

if(isset($_POST['submit'])){
	
	$section=$_POST['sec'];
	$day=$_POST['day'];
	$priod1=$_POST['sec1'];
	$priod2=$_POST['sec2'];
	$priod3=$_POST['sec3'];
	$priod4=$_POST['sec4'];
	
	$result=$db->query("insert into c_routine(1st,2nd,3nd,4th,day,Class_name)values('$priod1','$priod2',
	'$priod3','$priod4','$day','$section')");	

}

?>

<div class="container">

	<div class="card card-header  text-center"><h2>Class Routine</h2>
		<div>	
			<a class="btn btn-success float-right" href="show_routine.php">Go Back</a>
		</div>
	</div>
	<?php
	
				$query1='SELECT * FROM class_name ';
				$query='SELECT * FROM teacher2 ';
					
				$result=$db->query($query1, MYSQLI_STORE_RESULT);
				$result1=$db->query($query, MYSQLI_STORE_RESULT);
				$result2=$db->query($query, MYSQLI_STORE_RESULT);
				$result3=$db->query($query, MYSQLI_STORE_RESULT);
				$result4=$db->query($query, MYSQLI_STORE_RESULT);
				
	
	?>
	
	


	<div class="card card-body">
		<form action="#" method="post">
			<div class="form-group">
			<label for="roll"><strong>Select Class</strong></label><br/>
					<select name="sec">
						<option value="">Select Class</option>
						<?php
					while(list($id,$name_class)=$result->fetch_row()){
						echo "
							<option value='$name_class'>class-$name_class</option>";
						}
				?>
					</select>
				
				</div>
			<table class='table table-striped' border='1'>
				<tr>
					<th>Day</th>
					<th>1st period</th>
					<th>2nd period</th>
					<th>3nd period</th>
					<th>4th period</th> 
				</tr>

				<tr>
					<td>
						<select name="day">
							<option value="Saturday">Saturday</option>
							<option value="Sunday">Sunday</option>
							<option value="Monday">Monday</option>
							<option value="Saturday">Tuesday</option>
							<option value="Saturday">Wednessday</option>
							<option value="Saturday">Thuseday</option>
						</select>
					</td>
					<td>
					<select name="sec1">
						<option value="">subject</option>
						<?php
						while(list($id,$t_name,$t_sub)=$result1->fetch_row()){
						echo "
							<option value='$t_name-$t_sub'>$t_sub</option>";
						}
				?>
					</select></td>
					<td>
					<select name="sec2">
						<option value="">subject</option>
						<?php
						while(list($id,$t_name,$t_sub)=$result2->fetch_row()){
						echo "
							<option value='$t_name-$t_sub'>$t_sub</option>";
						}
				?>
					</select></td>	
					<td>
					<select name="sec3">
						<option value="">subject</option>
						<?php
						while(list($id,$t_name,$t_sub)=$result3->fetch_row()){
						echo "
							<option value='$t_name-$t_sub'>$t_sub</option>";
						}
				?>
					</select></td>	
					<td>
					<select name="sec4">
						<option value="">subject</option>
						<?php
						while(list($id,$t_name,$t_sub)=$result4->fetch_row()){
						echo "
							<option value='$t_name-$t_sub'>$t_sub</option>";
						}
				?>
					</select>
					</td>	
				
				</tr>
				  <div class="form-group">
					<input type="submit" name="submit" class="btn btn-success" required value="Save" />
				  </div>
			</table>
		</form>
	</div>
</div>