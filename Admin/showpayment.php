<?php
session_start();
include("header.php");

	$flag=0;

	if(isset($_POST['update'])){
		
		$class=$_POST['class'];
		$id=$_POST['id'];
		$roll=$_POST['roll'];
		$name=$_POST['stname'];
		$section=$_POST['section'];
		$cat=$_POST['cat'];
		$date=$_POST['date'];
		$total_amount=$_POST['total_amount'];
		$pay_amount=$_POST['pay_amount'];
		$month=$_POST['month'];
		$status=$_POST['status'];
		$method=$_POST['method'];
			
		$result=$db->query("update payment set class='$class', name='$name', roll='$roll', section='$section', cat_name='$cat', date='$date', total_amount='$total_amount', pay_amount='$pay_amount', month='$month', status='$status', method='$method' where id='$id' ");
			
			if($result){
					$flag=1;
				}
			
	}


?>




<div class="container">

	<div class="card card-header">
		<h2>
			INVOICES
		</h2>
	</div>
	
	<?php if($flag){ ?>
		<div class="alert alert-success">
			Payment info updated successfully.
		</div>
	<?php } ?>
	
	
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
				<tr>
					<th>Roll</th>
					<th>Name</th>
					<th>Title</th>
					<th>Total</th>
					<th>Paid</th>
					<th>Status</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
				  
			<tbody>
					<?php
					
					$modal = 0;

					if(isset($_POST['class'])){
						$_SESSION['class'] = $_POST['class'];
					}
					
					if(isset($_POST['section'])){
						$_SESSION['section'] = $_POST['section'];
					}
					
					if(isset($_POST['month'])){
						$_SESSION['month'] = $_POST['month'];
					}
				
					
									
						$result=$db->query("select * from payment where class='".$_SESSION['class']."' AND section='".$_SESSION['section']."' AND month='".$_SESSION['month']."'");
						
						while($row=mysqli_fetch_array($result))
						{
						
					?>
					
				<tr>
							
				
					<td> <?php echo $row['roll']; ?></td>
					<td> <?php echo $row['name']; ?></td>
					<td> <?php echo $row['cat_name']; ?></td>
					<td><?php echo $row['total_amount']; ?></td>
					<td><?php echo $row['pay_amount']; ?></td>	
					<td><?php echo $row['status']; ?></td>	
					<td><?php echo $row['date']; ?></td>
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
						<label for="roll"><strong>Class Name</strong></label></br>
						<input type="text" name="class" value="<?php echo $row['class']; ?>"/>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
					</div>
					<div class="form-group">
						<label for="roll"><strong>Student Roll</strong></label></br>
						<input type="text" name="roll" value="<?php echo $row['roll']; ?>"/>
					</div>
					<div class="form-group">
						<label for="roll"><strong>Student Name</strong></label></br>
						<input type="text" name="stname" value="<?php echo $row['name']; ?>"/>
					</div>
					<div class="form-group">
						<label for="roll"><strong>Student Section</strong></label></br>
						<input type="text" name="section" value="<?php echo $row['section']; ?>"/>
					</div>
					<div class="form-group">
						<label for="roll"><strong>Account Category</strong></label></br>
						<input type="text" name="cat" value="<?php echo $row['cat_name']; ?>"/>
					</div>
					<div class="form-group">
						<label for="roll"><strong>Date</strong></label></br>
						<input type="date" name="date" value="<?php echo $row['date']; ?>"/>
					</div>
					
				
				
			</div>

			<div class="col-md-6">
				
					<div class="form-group">
						<label for="roll"><strong>Total Amount</strong></label></br>
						<input type="text" name="total_amount" value="<?php echo $row['total_amount']; ?>"/>	
					</div>
					<div class="form-group">
						<label for="roll"><strong>Payment Amount</strong></label></br>
						<input type="text" name="pay_amount"  value="<?php echo $row['pay_amount']; ?>"/>
					</div>
					<div class="form-group">
						<label for="month"><strong>Select Month</strong></label></br>
						<select name="month">
							<?php
							$query1='SELECT distinct month FROM payment ';
							$result1=$db->query($query1, MYSQLI_STORE_RESULT);
								while(list($month)=$result1->fetch_row()){
								echo "
								<option value='$month'>$month</option>";
								}
							?>
					
						</select>
					</div>
					<div class="form-group">
						<label for="roll"><strong>Status</strong></label></br>
						<select name="status">
							<?php
							$query2='SELECT distinct status FROM payment ';
							$result2=$db->query($query2, MYSQLI_STORE_RESULT);
								while(list($status)=$result2->fetch_row()){
								echo "
								<option value='$status'>$status</option>";
								}
							?>
					
						</select>
					</div>
					<div class="form-group">
						<label for="roll"><strong>Method</strong></label></br>
						<select name="method">
							<?php
							$query3='SELECT distinct method FROM payment ';
							$result3=$db->query($query3, MYSQLI_STORE_RESULT);
								while(list($method)=$result3->fetch_row()){
								echo "
								<option value='$method'>$method</option>";
								}
							?>
					
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
				  
		</form>
		 </div>
      </div>
     </div>
    </div>
	</div>	
</div>




<!--print invoice-->

<div class="container">
  
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
    <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">View Invoice</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <p><strong>Creation Date</strong> <?php echo $row['date']; ?></p>
            <p><strong>Title</strong> <?php echo $row['cat_name']; ?></p>
            <p><strong>Status</strong> <?php echo $row['status']; ?></p>
		<div class="row">	
			<div class="col-md-6">
				<p><strong>Payment To</strong></br> SCHOOL MANAGEMENT SYSTEM</p>
			</div>
			<div class="col-md-6">
				<p><strong>Bill To</strong></br> <?php echo $row['name']; ?></p>
			</div>
        </div>
		<hr/>
		<div class="row">	
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<p><strong>Total Amount: </strong> <?php echo $row['total_amount']; ?></p>
				<p><strong>Paid Amount: </strong><?php echo $row['pay_amount']; ?></p>
				<p><strong>Due Amount: </strong></p>
			</div>
        </div>
		<hr/>
		<p><strong>Payment History</strong></p>
		<table class="table table-striped" border='1'>
			<tr>
				<th>Date</th>
				<th>Amount</th>
				<th>Status</th>
			</tr>
			<tr>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['pay_amount']; ?></td>
				<td><?php echo $row['status']; ?></td>
			</tr>
		</table>
		<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" >Print Invoice</button>
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
	