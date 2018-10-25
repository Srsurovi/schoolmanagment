

<?php
include("header.php");
	
	$flag=0;
	
	if(isset($_POST["submit"])){
		
		$class=$_POST["class"];
		$name=$_POST["name"];
		$roll=$_POST["roll"];
		$section=$_POST["sec"];
		
		$result=$db->query("insert into attendance(class,student_name,roll_number,section)
		values('$class','$name','$roll','$section')");
		
		if($result){
			$flag=1;
		}
		
	}



?>

<div class="container">

	<h2><div class="card card-header  text-center">ATTENDANCE SUMMERY</div></h2>

</div>

<div class="container">
	<?php if($flag){ ?>
	<div class="alert alert-success">
		<strong>!Success</strong> attendance data successfully inserted;
	</div>
	<?php } ?>
	
	<div class="card card-header">
		<h2>
			<a class="btn btn-success" href="add.php">Add Student</a>
			<a class="btn btn-info float-right" href="st_add.php">View All</a>
		</h2>
	</div>
  <div class="card card-body">
  
	<form action="add.php" method="post">
	
		<div class="form-group">
		<label for="roll">Select Class</label><br/>
		<select name="class" required>
			<option value="">Select Class</option>
			<option value="One">One</option>
			<option value="Two">Two</option>
			<option value="Three">Three</option>
			<option value="Four">Four</option>
		</select>
	  </div>
	  <div class="form-group">
		<label for="name">Student Name</label>
		<input type="text" name="name" class="form-control" required />
	  </div>
	  <div class="form-group">
		<label for="roll">Roll Number</label>
		<input type="text" name="roll" class="form-control" required />
	  </div>
	  <div class="form-group">
		<label for="section">Select Section</label><br/>
		<select name="sec" required>
			<option value="">Select Section</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
		</select>
	  </div>
	  
	  <div class="form-group">
		<input type="submit" name="submit" class="btn btn-primary" required />
	  </div>
	  
	</form>

  </div>
  
</div>