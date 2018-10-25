<?php
include("header.php");
?>

<style>
.error{color:#FF0000;}
</style>

<?php

	$flag=0;

	$first_name=$age=$contact=$reg_date=$class=$roll=$section="";
	$fnamerror=$agerror=$contacterror=$rdaterror=$classerror=$rollerror=$secerror="";

	if(isset($_POST["submit"])){
		
		if(empty($_POST["fname"])){
			$fnamerror="The First Name field is required.";
		}else{
			$first_name=$_POST["fname"];
		}
		$last_name=$_POST["lname"];
		$birth_date=$_POST["bdate"];
		
		if(empty($_POST["age"])){
			$agerror="The Age field is required.";
		}else{
			$age=$_POST["age"];
		}
		
		if(empty($_POST["contact"])){
			$contacterror="The Contact field is required.";
		}else{
			$contact=$_POST["contact"];
		}
		
		$email=$_POST["email"];
		$address=$_POST["add"];
		$city=$_POST["city"];
		$country=$_POST["country"];
		
		if(empty($_POST["rdate"])){
			$rdaterror="The Registar Date field is required.";
		}else{
			$reg_date=$_POST["rdate"];
		}
		
		if(empty($_POST["class"])){
			$classerror="The Class field is required.";
		}else{
			$class=$_POST["class"];
		}
		
		if(empty($_POST["roll"])){
			$rollerror="This field is required.";
		}else{
			$roll=$_POST["roll"];
		}
		
		if(empty($_POST["sec"])){
			$secerror="The Section field is required.";
		}else{
			$section=$_POST["sec"];
			
		}
		
		$target="uploads/";
		$target_dir=$target.basename($_FILES["myfile"]["name"]);
		
		if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$target_dir)){
			echo "";
			}
		
		
		
		$result2=$db->query("insert into students(first_name,last_name,class,roll,section,birth_date,age,contact,email,address,city,country,reg_date,photo)values('$first_name','$last_name','$class','$roll','$section','$birth_date','$age','$contact','$email','$address','$city','$country','$reg_date','$target_dir')");
		
		
				if($result2){
					$flag=1;
				}
		
		}
		
		$result=$db->query("select * from class");
		$result1=$db->query("select * from section");
		
		

?>

<div class="container">

	<h2><div class="card card-header  text-center">STUDENT INFORMATION</div></h2>

</div>

<div class="container">

	<div class="card card-header">
		<h2>
			<a class="btn btn-info float-left" href="show_all_student.php">View All</a>
		</h2>
	
		<?php if($flag){ ?>
		<div class="alert alert-success">
			Student data inserted successfully.
		</div>
		<?php } ?>
		
	</div>
	
	
	
	<div class="card card-body">

		<form action="#" method="post" enctype="multipart/form-data">
	<div class="row">	
	<div class="col-md-6">	
		<div class="form-group">
			<label for="name"><strong>First Name</strong></label><br/>
			<input type="text" name="fname" placeholder="First Name"/>
			<span class="error"><?php echo $fnamerror; ?></span>
		</div>
		
		<div class="form-group">
			<label for="name"><strong>Last Name</strong></label><br/>
			<input type="text" name="lname" placeholder="Last Name"/>
		</div>
		
		<div class="form-group">
			<label for="class"><strong>Class</strong></label><br/>
			<select name="class"><br/>
				<option value="">Select Class</option>
				<?php
					foreach($result as $class) {
				?>
				<option value="<?php echo $class["name"]; ?>"><?php echo $class["name"]; ?></option>
				<?php
					}
				?>
			</select>
			<span class="error"><?php echo $classerror; ?></span>
		</div>
		
		<div class="form-group">
			<label for="roll"><strong>Roll</strong></label><br/>
			<input type="text" name="roll"/>
			<span class="error"><?php echo $rollerror; ?></span>
		</div>
		
		<div class="form-group">
			<label for="roll"><strong>Section</strong></label><br/>
			<select name="sec">
				<option value="">Select Section</option>
				<?php
					foreach($result1 as $section) {
				?>
				<option value="<?php echo $section["section"]; ?>"><?php echo $section["section"]; ?></option>
				
				<?php
					}
				?>
				
				<span class="error"><?php echo $secerror; ?></span>
			</select>
		</div>
		
		<div class="form-group">
			<label for="roll"><strong>Date of Birth</strong></label><br/>
			<input type="date" name="bdate" placeholder="Date of Birth"/>
		</div>

		<div class="form-group">	
			<label for="age"><strong>Age</strong></label><br/>
			<input type="number" name="age"  placeholder="Age"/>
			<span class="error"><?php echo $agerror; ?></span>
		</div>
	
	</div>
	
	<div class="col-md-6">
		
		<div class="form-group">
			<label for="contact"><strong>Contact</strong></label><br/>
				<input type="text" name="contact" placeholder="Contact"/>
				<span class="error"><?php echo $contacterror; ?></span>
		</div>
		
		<div class="form-group">
			<label for="email"><strong>Email</strong></label><br/>
			<input type="email" name="email" placeholder="Email"/>
		</div>
		
		<div class="form-group">
			<label for="add"><strong>Address</strong></label><br/>
			<input type="text" name="add" placeholder="Address"/>
		</div>
		
		<div class="form-group">
			<label for="city"><strong>City</strong></label><br/>
			<input type="text" name="city" placeholder="City"/>
		</div>
		
		<div class="form-group">
			<label for="country"><strong>Country</strong></label><br/>
			<input type="text" name="country" placeholder="Country"/>
		</div>
			
		<div class="form-group">
			<label for="rdate"><strong>Registar Date</strong></label><br/>
			<input type="date" name="rdate" placeholder="Registar Date"/>
			<span class="error"><?php echo $rdaterror; ?></span>
		</div>

		<div class="form-group">	
			<input type="file" name="myfile"/>
		</div>	
		
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-success"  value="Save"/>
			<input type="reset" name="reset" class="btn btn-success"  value="Reset"/>
		</div>	
	
	</div>
		</form>

	</div>
	</div>

</div>

