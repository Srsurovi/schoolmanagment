<?php
session_start();
include("header.php");

	$flag=0;

	if(isset($_POST['update'])){
		
		$id=$_POST['id'];
		$name=$_POST['name'];
		$designation=$_POST['designation'];
		$month=$_POST['month'];
		$date=$_POST['date'];
		$salary=$_POST['salary'];
		$status=$_POST['status'];
		
			
		$result=$db->query("update teacher_payment set month='$month', date='$date', name='$name', designation='$designation', salary='$salary', status='$status' where id='$id' ");
			
			if($result){
					$flag=1;
				}
			
	}


?>




<div class="container">

	<div class="card card-header">
		<h2>
			Payment Details
		</h2>
	<?php if($flag){ ?>
		<div class="alert alert-success">
			Payment info updated successfully.
		</div>
	<?php } ?>
	</div>
	
	<script>
		$(document).ready( function () {
			$('#dataTable').DataTable();
		} );

	</script>
	
	
	
	<div class="card card-body">
		<div class="row">
		<div class="col-md-11">
		<div class="card mb-3">
			<div class="card-header">
				<div class="card-body">
					<div class="table-responsive">
			
			<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
				<thead>
					<tr>
						<th>Name</th>
						<th>Designation</th>
						<th>Month</th>
						<th>Salary</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
					
				<tbody>	
					<?php
					
					   $modal = 0;

						$result=$db->query("select * from teacher_payment ");
						
						while($row=mysqli_fetch_array($result))
						{
						
					?>
					
				<tr>
					<td> <?php echo $row['name']; ?></td>
					<td> <?php echo $row['designation']; ?></td>
					<td><?php echo $row['month']; ?></td>
					<td><?php echo $row['salary']; ?></td>	
					<td><?php echo $row['status']; ?></td>	
					
					<td>
					
						


<!--open popup-->
  
  <div class="modal fade" id="my_modal<?php echo ++$modal;?>">
    <div class="modal-dialog">
		<div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Student Payment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			
			<div class="row">
			<div class="col-md-6">
			
			
				<form action="#" method="post">
					<div class="form-group">
						<label for="roll"><strong>Teacher Name</strong></label></br>
						<input type="text" name="name" value="<?php echo $row['name']; ?>"/>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
					</div>
					<div class="form-group">
						<label for="roll"><strong>Designation</strong></label></br>
						<input type="text" name="designation" value="<?php echo $row['designation']; ?>"/>
					</div>
					<div class="form-group">
						<label for="roll"><strong>Month</strong></label></br>
						<select name="month">
							<option value="">Select</option>
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
						</select>
					</div>	
				
			</div>

			<div class="col-md-6">
				
				<div class="form-group">
					<label for="date"><strong>Date</strong></label></br>
					<input type="date" name="date" value="<?php echo $row['date']; ?>"/>	
				</div>
				<div class="form-group">
					<label for="salary"><strong>Salary</strong></label></br>
					<input type="text" name="salary"  value="<?php echo $row['salary']; ?>"/>
				</div>
				<div class="form-group">
					<label for="status"><strong>Status</strong></label></br>
					<select name="status">
						<option value="">Select</option>
							<option value="Paid">Paid</option>
							<option value="Unpaid">Unpaid</option>
					</select>
				</div>		
				
			</div>	
			
			</div>
			
		</div>
			<div class="modal-footer">
				<div class="form-group">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Close" />
					<input type="submit" class="btn btn-primary" value="Save Changes" name="update"/>
				</div>
			</div>
		
				</form>
		
		</div>
  </div>
  </div>

						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#my_modal<?php echo $modal;?>" >Edit</button>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">view invoice</button>
					</td>
				</tr>	
					<?php
						}
					?>
				</tbody>	
					
			</table>
				  
		</div>
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



