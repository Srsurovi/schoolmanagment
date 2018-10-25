<?php
include("header.php");
	
	$flag=0;

	if(isset($_POST['submit'])){
		
		$id=$_POST['id'];
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$class=$_POST['class'];
		$roll=$_POST['roll'];
		$section=$_POST['section'];
		$date=$_POST['date'];
		$age=$_POST['age'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$rdate=$_POST['reg_date'];
			
		$result=$db->query("update students set first_name='$first_name', last_name='$last_name', class='$class', roll='$roll', section='$section', birth_date='$date', age='$age',  contact='$contact', email='$email', address='$address', city='$city', reg_date='$rdate' where id='$id' ");
			
			if($result){
					$flag=1;
				}
			
	}

?>




<div class="container">

	<div class="card card-header">
		<h2>
			Students
		</h2>
		<?php if($flag){ ?>
			<div class="alert alert-success">
				Student info updated successfully.
			</div>
		<?php } ?>
		<h2>
		<a class="btn btn-info float-right" href="student.php">Add New Student</a>
		</h2>  
	</div>
	
		<script>
			$(document).ready( function () {
				$('#dataTable').DataTable();
			} );

		</script>
	
	<div class="card card-body">
		<div class="col-md-11">
		<div class="card mb-3">
			<div class="card-header">
				<div class="card-body">
					<div class="table-responsive">

		<form action="#" method="post">
			
			<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
			<thead>
				<tr class="custom">
				
					<th>Photo</th>
					<th>Name</th>
					<th>Class</th>
					<th>Section</th>
					<th>Roll</th>
					<th>Address</th>
					<th>Action</th>
					
				</tr>
			</thead>
			
			<tbody>		
					
					<?php
					
						$modal = 0;
						
						$result=$db->query("select * from students ");
						
						while($row=mysqli_fetch_array($result))
						{
						
					?>
					
				<tr>
					<td><img src='<?php echo $row['photo']; ?>' width='80px'/></td>	
					<td> <?php echo $row['first_name'] .' '. $row['last_name']; ?></td>
					<td> <?php echo $row['class']; ?></td>
					<td> <?php echo $row['section']; ?></td>
					<td> <?php echo $row['roll']; ?></td>
					<td><?php echo $row['address']; ?></td>
					
					<td>
<!--open popup-->



  
  <div class="modal fade" id="my_modal<?php echo ++$modal;?>">
    <div class="modal-dialog">
		<div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Student Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			
			<div class="row">
			<div class="col-md-6">
			
			
				<form action="#" method="post">
					<div class="form-group">
						<label for="first_name"><strong>First Name</strong></label></br>
						<input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"/>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
					</div>
					<div class="form-group">
						<label for="last_name"><strong>Last Name</strong></label></br>
						<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"/>
					</div>
					<div class="form-group">
						<label for="class"><strong>Student Class</strong></label></br>
						<input type="text" name="class" value="<?php echo $row['class']; ?>"/>
					</div>
					<div class="form-group">
						<label for="roll"><strong>Student Roll</strong></label></br>
						<input type="text" name="roll" value="<?php echo $row['roll']; ?>"/>
					</div>
					<div class="form-group">
						<label for="section"><strong>Student Section</strong></label></br>
						<input type="text" name="section" value="<?php echo $row['section']; ?>"/>
					</div>
					<div class="form-group">
						<label for="date"><strong>Date Of Birth</strong></label></br>
						<input type="date" name="date" value="<?php echo $row['birth_date']; ?>"/>
					</div>
					<div class="form-group">
						<label for="age"><strong>Age</strong></label></br>
						<input type="age" name="age" value="<?php echo $row['age']; ?>"/>
					</div>
					
				
				
			</div>

			<div class="col-md-6">
				
					<div class="form-group">
						<label for="contact"><strong>Contact</strong></label></br>
						<input type="text" name="contact" value="<?php echo $row['contact']; ?>"/>	
					</div>
					<div class="form-group">
						<label for="email"><strong>Email</strong></label></br>
						<input type="text" name="email"  value="<?php echo $row['email']; ?>"/>
					</div>
					<div class="form-group">
						<label for="address"><strong>Address</strong></label></br>
						<input type="text" name="address"  value="<?php echo $row['address']; ?>"/>
					</div>
					<div class="form-group">
						<label for="city"><strong>Status</strong></label></br>
						<input type="text" name="city"  value="<?php echo $row['city']; ?>"/>
					</div>
					<div class="form-group">
						<label for="reg_date"><strong>Registration Date</strong></label></br>
						<input type="date" name="reg_date"  value="<?php echo $row['reg_date']; ?>"/>
					</div>
					
				
			</div>	
			
			</div>
			
		</div>
			<div class="modal-footer">
				<div class="form-group">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Close" />
					<input type="submit" class="btn btn-primary" value="Save Changes" name="submit"/>
				</div>
			</div>
		
				</form>
		
		</div>
  </div>
  </div>

						<a><button type="button" class="btn btn-success" data-toggle="modal" data-target="#my_modal<?php echo $modal;?>" >Edit</button></a>
						<a href="st_delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Delete</button></a>
					</td>
				</tr>

				<?php
					
					}
				?>
				
				</tbody>
				
			</table>
				  
		</form>
		 </div>
      </div>
     </div>
    </div>
		
	</div>	
</div>
</div>

<?php
include('footer.php');
?>

