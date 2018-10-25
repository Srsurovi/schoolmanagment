<?php

include("header.php");


	$flag=0;

	if(isset($_POST['update'])){
		
		$id=$_POST['id'];
		$title=$_POST['title'];
		$date=$_POST['date'];
		
		
			
		$result=$db->query("update hoildays set title='$title', dates='$date' where id='$id' ");
			
			if($result){
					$flag=1;
				}
			
	}				
	
?> 

<div class="container">
 

	<div class="card card-header">
  
		<h2>
			<a class="btn btn-info float-left" href="add_holiday.php">Add</a>
		</h2>
	<?php if($flag){ ?>	
		<div class="alert alert-success">
			Holiday updated successfully.
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
					<div class="table-responsive">
	
			<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
				<thead>
					<tr>
						<th>Title</th>							
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				
				<tbody>
					<?php			
						
						$modal = 0;
					
						$result1=$db->query("select * from hoildays");
						
						
						while($row=mysqli_fetch_array($result1))
						{
						
					?>
			
					<tr>
						<td> <?php echo $row['title']; ?></td>
						<td> <?php echo $row['dates']; ?></td>
									
						<td>
							

<!--open popup-->



  
  <div class="modal fade" id="my_modal<?php echo ++$modal;?>">
    <div class="modal-dialog">
		<div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Holiday</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			
			<div class="row">
				<div class="col-md-6">
				
				
					<form action="#" method="post">
						<div class="form-group">
							<label for="date"><strong>Date</strong></label></br>
							<input type="text" name="date" value="<?php echo $row['dates']; ?>"/>
							<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
						</div>
						<div class="form-group">
							<label for="title"><strong>Title</strong></label></br>
							<input type="text" name="title" value="<?php echo $row['title']; ?>"/>
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
  

						
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#my_modal<?php echo $modal;?>" >Edit</button></a>
						<a href="delete_holidays.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Delete</button></a>
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

  
<?php
include('footer.php');
?> 