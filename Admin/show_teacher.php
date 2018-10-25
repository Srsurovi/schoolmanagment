<?php
include("header.php");
	
	$flag=0;

	if(isset($_POST['submit'])){
		
		$id=$_POST['id'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$desg=$_POST['desg'];
		$date=$_POST['date'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$rdate=$_POST['rdate'];
			
		$result=$db->query("update teachers set first_name='$fname', last_name='$lname', designation='$desg',  birth_date='$date', contact='$contact', email='$email', address='$address', city='$city', reg_date='$rdate' where id='$id' ");
			
			if($result){
					$flag=1;
				}
			
	}

?>




<div class="container">

	<div class="card card-header">
		<h2>
			Teachers
		</h2>
		
		<?php if($flag){ ?>
			<div class="alert alert-success">
				Teacher's info updated successfully.
			</div>
		<?php } ?>
		
		<h2>
		<a class="btn btn-info float-right" href="teacher.php">Back</a>
		</h2>  
	</div>
	
	<div class="card card-body">
		<div class="col-md-11">
		<div class="card mb-3">
			<div class="card-header">
				<div class="card-body">
					<div class="table-responsive">

		<form action="#" method="post">
			
			<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
			<thead>
				<tr>
				
					<th>Photo</th>
					<th>Name</th>
					<th>Designation</th>
					<th>Action</th>
					
				</tr>
			</thead>	
					
			<tbody>		
					<?php
						$modal = 0;
						
						$result=$db->query("select * from teachers ");

						while($row=mysqli_fetch_array($result))
						{
						
					?>
					
				<tr>
					<td><img src="<?php echo $row['photo']; ?>" width='80px'/></td>	
					<td> <?php echo $row['first_name'] .' '. $row['last_name']; ?></td>
					
					
					<td><?php echo $row['designation']; ?></td>
					
					
					<td>
						


<!--open popup-->



  
  <div class="modal fade" id="my_modal<?php echo ++$modal;?>">
    <div class="modal-dialog">
		<div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Teacher</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			
			<div class="row">
			<div class="col-md-6">
				<form action="#" method="post">
					<div class="form-group">
						<label for="first_name"><strong>First Name</strong></label></br>
						<input type="text" name="fname" value="<?php echo $row['first_name']; ?>"/>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
					</div>
					<div class="form-group">
						<label for="last_name"><strong>Last Name</strong></label></br>
						<input type="text" name="lname" value="<?php echo $row['last_name']; ?>"/>
					</div>
					
					<div class="form-group">
						<label for="deg"><strong>Designation</strong></label></br>
						<input type="text" name="desg" value="<?php echo $row['designation']; ?>"/>
					</div>
					
					<div class="form-group">
						<label for="birth_date"><strong>Date of Birth</strong></label></br>
						<input type="date" name="date" value="<?php echo $row['birth_date']; ?>"/>
					</div>
					
					<div class="form-group">
						<label for="contact"><strong>Contact</strong></label></br>
						<input type="text" name="contact" value="<?php echo $row['contact']; ?>"/>
						 
					</div>
					
				
			</div>

			<div class="col-md-6">
				
					
					<div class="form-group">
						<label for="email"><strong>Email</strong></label></br>
						<input type="text" name="email"  value="<?php echo $row['email']; ?>"/>
					</div>
					
					<div class="form-group">
						<label for="address"><strong>Address</strong></label></br>
						<input type="text" name="address"  value="<?php echo $row['address']; ?>"/>
					</div>	
					
					<div class="form-group">
						<label for="city"><strong>City</strong></label></br>
						<input type="text" name="city"  value="<?php echo $row['city']; ?>"/>
					</div>
					
					<div class="form-group">
						<label for="city"><strong>Registration</strong></label></br>
						<input type="text" name="rdate"  value="<?php echo $row['reg_date']; ?>"/>
					</div>	
				
			</div>	
			
			</div>
			
		</div>
			<div class="modal-footer">
				<div class="form-group">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Close" />
					<input type="submit" name="submit" class="btn btn-primary" value="Save Changes"/>
				</div>
			</div>
			
				</form>
				
				
		
    </div>
  </div>
  </div>
  


						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#my_modal<?php echo $modal;?>" >Edit</button>
						<a href="te_delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</button><a/>
					</td>
				</tr>

				<?php
					
					}
				?>
				

				
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
