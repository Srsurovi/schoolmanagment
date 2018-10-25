<?php
include("header.php");

	$flag=0;

	if(isset($_POST['submit'])){
		
		$class=$_POST['class'];
		$name=$_POST['name'];
		$roll=$_POST['roll'];
		$section=$_POST['section'];
		$cat_name=$_POST['cat_name'];
		$date=$_POST['date'];
		$total_amount=$_POST['total_amount'];
		$pay_amount=$_POST['pay_amount'];
		$month=$_POST['month'];
		$status=$_POST['status'];
		$method=$_POST['method'];
			
		$result=$db->query("insert into payment(class,name,roll,section,cat_name,date,total_amount,pay_amount,month,status,method)values('$class' , '$name' , '$roll' , '$section' , '$cat_name' , '$date' , '$total_amount' , '$pay_amount' , '$month' , '$status' , '$method')");
			
			if($result){
					$flag=1;
				}
			
	}


?>

<div class="container">

	<h2><div class="card card-header  text-center">STUDENT PAYMENT</div></h2>
	
		<?php if($flag){ ?>
			<div class="alert alert-success">
				Payment info saved successfully.
			</div>
		<?php } ?>




	<div class="row">
		
		<div class="col-md-6">
		
		<div class="card card-header">
			<h3>
				INVOICE INFORMATION
			</h3>
		</div>
	  <div class="card card-body">
	  
	    <?php

		$query='SELECT distinct class FROM students ';
		$query1='SELECT  first_name, last_name FROM students ';
		$query2='SELECT distinct roll FROM students ';
		$query3='SELECT distinct section FROM students ';
		$query4='SELECT cat_name FROM payment_cat ';
					
		$result5=$db->query($query, MYSQLI_STORE_RESULT);
		$result1=$db->query($query1, MYSQLI_STORE_RESULT);
		$result2=$db->query($query2, MYSQLI_STORE_RESULT);
		$result3=$db->query($query3, MYSQLI_STORE_RESULT);
		$result4=$db->query($query4, MYSQLI_STORE_RESULT);
		
					
		?>
	  
			<form action="#" method="post">
			
			  <div class="form-group">
				<label for="roll"><strong>Select Class</strong></label><br/>
				<select name="class">
					<option value="">Select Class</option>
					<?php
						while(list($class)=$result5->fetch_row()){
							echo "
								<option value='$class'>$class</option>";
							}
					?>
				
				</select>
				
			   </div>
			  
			  <div class="form-group">
				<label for="roll"><strong>Student Name</strong></label><br/>
				<select name="name">
					<option value="">Select Class First</option>
					<?php
						while(list( $first_name, $last_name)=$result1->fetch_row()){
							echo "
								<option value='$first_name  $last_name'>$first_name  $last_name</option>";
							}
					?>
				
				</select>
				
				
			  </div>
			  
			  <div class="form-group">
				<label for="roll"><strong>Student Roll</strong></label><br/>
				<select name="roll">
					<option value="">Select Roll</option>
					<?php
						while(list($roll)=$result2->fetch_row()){
							echo "
								<option value='$roll'>$roll</option>";
							}
					?>
					
				</select>
			  </div>
			  
			  <div class="form-group">
				<label for="roll"><strong>Student Section</strong></label><br/>
				<select name="section">
					<option value="">Select Section</option>
					<?php
						while(list($section)=$result3->fetch_row()){
							echo "
								<option value='$section'>$section</option>";
							}
					?>
					
				</select>
			  </div>
			  
			  <div class="form-group">
				<label for="roll"><strong>Account Category</strong></label><br/>
				<select name="cat_name">
					<option value="">Select Category</option>
					<?php
						while(list($cat_name)=$result4->fetch_row()){
							echo "
								<option value='$cat_name'>$cat_name</option>";
							}
					?>
				</select>
				
			  </div>
			  
			  <div class="form-group">
				<label for="date"><strong>Date</strong></label><br/>
				<input type="date"  name="date" />
				
			 </div>
			  
			

			</div>
		</div>
		
	<div class="col-md-5">
		
		<div class="card card-header">
			<h3>
				PAYMENT INFORMATION
			</h3>
		</div>
	    <div class="card card-body">
	  
			<div class="form-group">
				<label for="name"><strong>Total Amount</strong></label>
				<input type="text" name="total_amount" class="form-control" required placeholder="Enter Total Amount" />
			 </div>
		    <div class="form-group">
				<label for="name"><strong>Payment Amount</strong></label>
				<input type="text" name="pay_amount" class="form-control" required placeholder="Enter Payment Amount" />
			</div>
			  <div class="form-group">
				<label for="roll"><strong>Select Month</strong></label><br/>
				<select name="month">
					<option value="">Select</option>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
				</select>
			  </div>
			  
			  <div class="form-group">
				<label for="roll"><strong>Status</strong></label><br/>
				<select name="status">
					<option value="">Select</option>
					<option value="Paid">Paid</option>
					<option value="Unpaid">Unpaid</option>
					
				</select>
			  </div>
			  
			  <div class="form-group">
				<label for="roll"><strong>Method</strong></label><br/>
				<select name="method">
					<option value="">Select</option>
					<option value="Cash">Cash</option>
					<option value="Check">Check</option>
					<option value="Card">Card</option>
				</select>
			  </div>
			  
			  <div class="form-group">
				<input type="submit" name="submit" class="btn btn-success"  value="Add Invoice" />
			  </div>
			  
			  
			  
			</form>

		</div>
	</div>
		
	</div>
  
</div>