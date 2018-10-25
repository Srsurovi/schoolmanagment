<?php
session_start();
include("header.php");

	$flag=0;

	if(isset($_POST['submit_mark'])){
			

$mcq = count($_POST['mcq']);
$des = count($_POST['des']);

if ($mcq > 0 && $mcq == $des) {
    $insertArr = array();
    for ($i=0; $i<$mcq; $i++) {
        $insertArr[] = "('".$_POST['class']."',
		'".$_POST['section']."',
		'". $_POST['cat']. "',
		'". $_POST['subject']. "',
		'". mysqli_real_escape_string($db, $_POST['roll'][$i]) . "',
		'". mysqli_real_escape_string($db, $_POST['stname'][$i]) . "',
		'". mysqli_real_escape_string($db, $_POST['mcq'][$i]) . "',
		'". mysqli_real_escape_string($db, $_POST['des'][$i]) . "'
		)" ;
}

 $query = "INSERT INTO add_result (class, section, cat_name, subject, roll, name, mcq, descriptive) VALUES " . implode(", ", $insertArr);
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
			ADD MARK
		</h2>
		
	<?php if($flag){ ?>
		<div class="alert alert-success">
			Student's mark added successfully.
		</div>
	<?php } ?>

		<h2>
			<a class="btn btn-info float-left" href="show_mark.php">View all</a>
		</h2>  
		
	</div>
	
	
	<form action="#" method="post">
	
	<div class="card card-body">
	
		<h3>
			Add Exam Category
		</h3>
		
		<?php

			$mcq = "";
			$des = "";		
		
		
			$query1='SELECT cat_name  FROM  exam_cat ';
			$query2='SELECT subject_name FROM  subject ';
			
			
						
			$result1=$db->query($query1, MYSQLI_STORE_RESULT);
			$result2=$db->query($query2, MYSQLI_STORE_RESULT);
			
				
		?>
		
		<div class="form-group">
			<label for="exam_cat">Select Exam Category</label><br/>
			<select name="cat">
				<option value='Select Name'>Select Exam Category</option>
				<?php
					while(list($cat_name)=$result1->fetch_row()){
						echo "
							<option value='$cat_name'>$cat_name</option>";
						}
				?>
			</select>
		  </div>
		  
		  <div class="form-group">
			<label for="subject">Select Subject</label><br/>
			<select name="subject">
				<option value='Select Name'>Select Subject</option>
				<?php
					while(list($subject_name)=$result2->fetch_row()){
						echo "
							<option value='$subject_name'>$subject_name</option>";
						}
				?>

			</select>
		  </div>
		  
		
	</div>
	
	<div class="card card-body">
	
		
	
		<table class="table table-striped" border='1'>
		
			<tr>
				<th>Roll</th>
				<th>Name</th>
				<th>MCQ</th>
				<th>Descriptive</th>
				
			</tr>
			
					<?php
					
						
						
						if(isset($_POST['class'])){
						$class_search=$_SESSION['class'] = $_POST['class'];
						}
					
						if(isset($_POST['section'])){
						$section_search=$_SESSION['section'] = $_POST['section'];
						}
					
			$result=$db->query("select * from students where class='".$_SESSION['class']."' AND section='".$_SESSION['section']."'");
	
						while($row=mysqli_fetch_array($result))
						{
						
					?>
			
			<tr>
			
				<td>
					<?php echo $row['roll']; ?>
					<input type="hidden" value="<?php echo $row['roll']; ?>" name="roll[]" />
					<input type="hidden" value="<?php echo  $class_search; ?>" name="class" />
					<input type="hidden" value="<?php echo  $section_search; ?>" name="section" />
				</td>
				<td>
					<?php echo $row['first_name'] . $row['last_name']; ?>
					<input type="hidden" name="stname[]" value="<?php echo $row['first_name'] ." ". $row['last_name']; ?>" />
				</td>
				
				<td><input type="text" value="<?php echo $mcq; ?>" name="mcq[]"  /></td>
				<td><input type="text" value="<?php echo $des; ?>" name="des[]" /></td>
			
				
			</tr>
			
			<?php
					
				}
			?>
		
		</table>
		
		
		<div class="form-group">
			<input type="submit" name="submit_mark" class="btn btn-success" value="Submit" />
		</div>
		
	</form>
	

	

	</div>
  
</div>
</div>
</div>