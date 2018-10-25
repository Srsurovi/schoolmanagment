<?php

include("header.php");



	$flag=0;

	if(isset($_POST['submit'])){
		
		$id=$_POST['id'];
		$date=$_POST['date'];
		$title=$_POST['title'];
		$notice=$_POST['notice'];
		
			
		$result=$db->query("update notice set date='$date', title='$title', notice='$notice' where id='$id' ");
			
			if($result){
					$flag=1;
				}
			
	}				
	
?> 

<div class="container">

	<div class="card card-header">
  
		<h2>
			<a class="btn btn-info float-left" href="add_notice.php">Add</a>
		</h2>
	<?php if($flag){ ?>	
		<div class="alert alert-success">
			Notice updated successfully.
		</div>
	<?php } ?>
		
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
						<th>Date</th>
						<th>Title</th>
						<th>Notice</th>	
						<th>Action</th>
					</tr>
				</thead>
				
				<tbody>
					<?php			
						
						$modal = 0;
					
						$result1=$db->query("select * from notice");
						
						
						while($row=mysqli_fetch_array($result1))
						{
						
					?>
			
					<tr>
						<td> <?php echo $row['date']; ?></td>
						<td> <?php echo $row['title']; ?></td>
						<td> <?php echo $row['notice']; ?></td>				
						<td>
							

<!--open popup-->



  
  <div class="modal fade" id="my_modal<?php echo ++$modal;?>">
    <div class="modal-dialog">
		<div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Notice</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			
			<div class="row">
				<div class="col-md-6">
				
				
					<form action="#" method="post">
						<div class="form-group">
							<label for="date"><strong>Date</strong></label></br>
							<input type="text" name="date" value="<?php echo $row['date']; ?>"/>
							<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
						</div>
						<div class="form-group">
							<label for="title"><strong>Title</strong></label></br>
							<input type="text" name="title" value="<?php echo $row['title']; ?>"/>
						</div>
						<div class="form-group">
							<label for="class"><strong>Notice</strong></label></br>
							<input type="text" name="notice" value="<?php echo $row['notice']; ?>"/>
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
  
				
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#my_modal<?php echo $modal;?>" >Edit</button></a>
						<a href="delete_notice.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Delete</button></a>
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