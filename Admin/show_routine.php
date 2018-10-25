<?php
include("header.php");

	$flag=0;

	if(isset($_POST['submit'])){
		
		$id=$_POST['id'];
		$day=$_POST['day'];
		$p_1st=$_POST['p_1st'];
		$p_2nd=$_POST['p_2nd'];
		$p_3nd=$_POST['p_3nd'];
		$p_4th=$_POST['p_4th'];
		
			
		$result=$db->query("update c_routine set 1st='$p_1st', 2nd='$p_2nd', 3nd='$p_3nd', 4th='$p_4th', day='$day' where id='$id' ");
			
			if($result){
					$flag=1;
				}
			
	}
?>



<div class="container">
	
	
	<div class="card card-header">
		<h2>
			<a class="btn btn-success" href="class_routine.php">Add Routine</a>
		</h2>
		
		<?php if($flag){ ?>
		<div class="alert alert-success">
			Class Routine updated successfully.
		</div>
		<?php } ?>
	
	<?php
	
				$query='SELECT * FROM class_name ';
				
				
				$result=$db->query($query, MYSQLI_STORE_RESULT);
	?>
	
	
	

	
	<?php include("find_routine.php");?>
  <div class="card card-body">
  
	<div class="col-md-11">
	
		<table class="table table-striped">
			<tr>
				<th>Class</th>
				<th>Day</th>
				<th>1st Period</th>
				<th>2nd Period</th>
				<th>3nd Period</th>
				<th>4th Period</th>
				<th width="20%">Action</th>
			</tr>
			
			<?php			
				$modal = 0;
			
				$result1=$db->query("select * from c_routine");
				
				
				while($row=mysqli_fetch_array($result1))
				{
				
			?>
			
			<tr>
				<td> <?php echo $row['Class_name']; ?></td>
				<td> <?php echo $row['day']; ?></td>
				<td> <?php echo $row['1st']; ?></td>
				<td> <?php echo $row['2nd']; ?></td>
				<td> <?php echo $row['3nd']; ?></td>
				<td> <?php echo $row['4th']; ?></td>
				<td>
					
					
<!-- end boby -->


  
  <div class="modal fade" id="my_modal<?php echo ++$modal;?>">
    <div class="modal-dialog">
		<div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Routine</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			
			<div class="row">
			<div class="col-md-8">
				<form action="#" method="post">
							<div class="form-group">
								<label for="day"><strong>Day</strong></label></br>
								<input type="text" name="day" value="<?php echo $row['day']; ?>"/>
								<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
							</div>
							<div class="form-group">
								<label for="1st"><strong>1st Period</strong></label></br>
								<input type="text" name="p_1st" value="<?php echo $row['1st']; ?>"/>
							</div>
							
							
							<div class="form-group">
								<label for="2nd"><strong>2nd Period</strong></label></br>
								<input type="text" name="p_2nd" value="<?php echo $row['2nd']; ?>"/>
							</div>
							<div class="form-group">
								<label for="3nd"><strong>3nd Period</strong></label></br>
								<input type="text" name="p_3nd" value="<?php echo $row['3nd']; ?>"/>
							</div>
							<div class="form-group">
								<label for="4th"><strong>4th Period</strong></label></br>
								<input type="text" name="p_4th" value="<?php echo $row['4th']; ?>"/>
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
					<a href="routine_delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</button></a>
				
				</td>
	
			</tr>	
			
			<?php
			}
			?>
			
		
		</table>
		
	  
	

  </div>
</div>
</div>
</div>

<?php
include('footer.php');
?> 

