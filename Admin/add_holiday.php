<?php
include("header.php");


$flag=0;

if(isset($_POST['submit'])){
	
	$title=$_POST['title'];	
	$day=$_POST['day'];
		
	
	$result=$db->query("insert into hoildays(title,dates)values('$title','$day')");	
	
	if($result){
		$flag=1;
	}
	
}
?>





<div class="container">
	<div class="card card-header">
		<h2>Holidays</h2>
		
		<?php if($flag){ ?>
		<div class="alert alert-success">
			Holiday saved successfully.
		</div>
		<?php } ?>
		
		<h2>
		<a class="btn btn-info float-right" href="holiday.php">Show Holiday</a>
		</h2> 
		
	</div>	
	
	<div class="card card-body">
		<form action="#" method="post">
			<div class="form-group">
					<h3>Add holiday</h3>
				<table class='table table-striped' border='1'>				
					<tr>
						
						<th>Title</th>
						<th>Date</th>
					</tr>

					<tr>
						<td><input type="text" name="title" value="" /></td>
						<td><input type="text" name="day" value="" /></td>
								
					</tr>
				
					
				  
				 
				</table>
				<div>
					<input type="submit" name="submit" class="btn btn-success" required value="Save" />
				</div>
			 </div>
		</form>
	</div>
	
</div>