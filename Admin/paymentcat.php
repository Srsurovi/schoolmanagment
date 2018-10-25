<?php
include("header.php");
	
$db=new mysqli("localhost","root","","school");

	
	

	if(isset($_POST['update'])){
	
			$id=$_POST['id'];
			$cat_name=$_POST['cat_name'];
			$cat_type=$_POST['cat_type'];
			
			
				$result1=$db->query("update payment_cat set cat_name='$cat_name', cat_type='$cat_type' where id='$id'");
			
	}


?>

<div class="container">

	<h2><div class="card card-header  text-center">ADD CATEGORY</div></h2>

</div>

<div class="row">
	<div class="col-md-11">
	
	<div class="card card-header">
		<h2>
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Category
			</button>
			
		</h2>
	</div>
	
	<script>
		$(document).ready( function () {
			$('#dataTable').DataTable();
		} );

	</script>	
	
  <div class="card card-body">
	
	<div class="card mb-3">
			<div class="card-header">
				<div class="card-body">
					<div class="table-responsive">
  
	<form action="" method="post">
		
		<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
			<thead>
				<tr>
					<th>Category Name</th>
					<th>Acctions</th>
				</tr>
			</thead>
			
			<tbody>	
			
			<?php
				
				$modal = 0;
				
				$result1=$db->query("select cat_name from payment_cat");
				$cat_name=0;
				while($row=mysqli_fetch_array($result1))
				{
				$cat_name++ ;
			?>
			
			<tr>
				<td><?php echo $row['cat_name']; ?>
					<input type="hidden" value="<?php echo $row['cat_name']; ?>" name="cat_name[]" />
				</td>
				<td>
					
					
					

  
  <div class="modal fade" id="myModal1<?php echo ++$modal;?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Payment Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            
				<div class="form-group">
					<label for="name"><strong>Category Name</strong></label></br>
					<input type="text" name="cat_name" value="<?php echo $row['cat_name']; ?>" />
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
				</div>
				<div class="form-group">
					<label for="roll">Select Type</label><br/>
					<select name="cat_type">
						<option value="">Select Type</option>
						<option value="Credit">Credit</option>
						<option value="Debit">Debit</option>
						
					</select>
				</div>
				
				<div class="form-group">
					<input type="submit" data-dismiss="modal" class="btn btn-outline-dark"  value="Close" />
					<input type="submit" name="update" class="btn btn-primary" value="Save" />
				</div>
				
		    
        </div>
        
        
      </div>
    </div>
  </div>
  
				
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1<?php echo $modal;?>" >Edit</button>
					<a href="cat_delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary" data-toggle="modal" >Delete</button></a>
					
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


<?php

	if(isset($_POST['submit'])){
	
			$cat_name=$_POST['cat_name'];
			$cat_type=$_POST['cat_type'];
			
			
				$result=$db->query("insert into payment_cat(cat_name,cat_type)values('$cat_name','$cat_type')");
			
	}


?>

<!--open popup-->


<div class="container">
  
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Payment Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="" method="post">
				<div class="form-group">
					<label for="name"><strong>Category Name</strong></label></br>
					<input type="text" name="cat_name" class="form-control" required />
				</div>
				<div class="form-group">
					<label for="roll">Select Type</label><br/>
					<select name="cat_type">
						<option value="">Select Type</option>
						<option value="Credit">Credit</option>
						<option value="Debit">Debit</option>
						
					</select>
				</div>
				
				<div class="form-group">
					<input type="submit" data-dismiss="modal" class="btn btn-outline-dark"  value="Close" />
					<input type="submit" name="submit" class="btn btn-primary" required value="Save" />
				</div>
				
		    </form>
        </div>
        
        
      </div>
    </div>
  </div>
  </div>
  
</div>

<?php
include('footer.php');
?> 