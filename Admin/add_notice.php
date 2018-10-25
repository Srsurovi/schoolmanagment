<?php
include("header.php");


$flag=0;

if(isset($_POST['submit'])){
	
	$day=$_POST['day'];
	$title=$_POST['title'];	
	$notice=$_POST['notice'];	
	
	$result=$db->query("insert into notice(date,title,notice)values('$day','$title','$notice')");	
	
	if($result){
		$flag=1;
	}
	
}
?>





<div class="container">
	<div class="card card-header">
		<h2>Notice Board</h2>
		
		<?php if($flag){ ?>
		<div class="alert alert-success">
			Notice saved successfully.
		</div>
		<?php } ?>
		
		<h2>
		<a class="btn btn-info float-right" href="show_notice.php">Show Notice</a>
		</h2> 
		
	</div>	
	
	<div class="card card-body">
		<form action="#" method="post">
			<div class="form-group">
					<h3>Add Notice</h3>
				<table class='table table-striped' border='1'>				
					<tr>
						<th>Date</th>
						<th>Title</th>
						<th>Notice</th>
					</tr>

					<tr>
						<td><input type="date" name="day" value="" /></td>
						<td><input type="text" name="title" value="" /></td>
						<td><textarea cols="100" name="notice" value=""></textarea></td>		
					</tr>
				
					
				  
				 
				</table>
				<div>
					<input type="submit" name="submit" class="btn btn-success" required value="Save" />
				</div>
			 </div>
		</form>
	</div>
	
</div>