<?php
include("header.php");
	
	$flag=0;

	if(isset($_POST['submit'])){
		
		$id=$_POST['id'];
		
		$mcq=$_POST['mcq'];
		$des=$_POST['des'];
			
		$result=$db->query("update add_result set mcq='$mcq', descriptive='$des' where id='$id' ");
			
			if($result){
					$flag=1;
				}
			
	}

?>




<div class="container">

	<div class="card card-header">
		<h2>
			Student Results
		</h2>
		
		<?php if($flag){ ?>
			<div class="alert alert-success">
				Student's marks updated successfully.
			</div>
		<?php } ?>
		
		<h2>
			<a class="btn btn-info float-left" href="add_mark.php">Back</a>
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

		
			
			<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
			<thead>
				<tr>
				
					<th>Roll</th>
					<th>Name</th>
					<th>Subject</th>
					<th>MCQ</th>
					<th>Descriptive</th>
					<th>Action</th>
					
				</tr>
			</thead>	
					
			<tbody>		
					<?php
						$modal = 0;
						
						$result=$db->query("select * from add_result ");

						while($row=mysqli_fetch_array($result))
						{
						
					?>
					
				<tr>
					<td> <?php echo $row['roll']; ?></td>
					<td> <?php echo $row['name']; ?></td>
					<td> <?php echo $row['subject']; ?></td>
					<td><?php echo $row['mcq']; ?></td>
					<td><?php echo $row['descriptive']; ?></td>	
					
					
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
						<label for="mcq"><strong>MCQ</strong></label></br>
						<input type="text" name="mcq"  value="<?php echo $row['mcq']; ?>"/>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
					</div>	
					
					<div class="form-group">
						<label for="des"><strong>Descriptive</strong></label></br>
						<input type="text" name="des"  value="<?php echo $row['descriptive']; ?>"/>
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
					<a href="mark_delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</button><a/>
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

<?php
include('footer.php');
?>
