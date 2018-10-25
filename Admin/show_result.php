<?php

session_start();

include("header.php");
	

if(isset($_POST['cat_name'])){
	$_SESSION['cat_name'] = $_POST['cat_name'];
}

if(isset($_POST['class'])){
	$_SESSION['class'] = $_POST['class'];
}
if(isset($_POST['roll'])){
	$_SESSION['roll'] = $_POST['roll'];
}


	$result=$db->query("select * from add_result where cat_name='".$_SESSION['cat_name']."' AND class='".$_SESSION['class']."' AND roll='".$_SESSION['roll']."'");
	$result1=$db->query("select * from add_result where cat_name='".$_SESSION['cat_name']."' AND class='".$_SESSION['class']."' AND roll='".$_SESSION['roll']."' ");

$row1 = mysqli_fetch_array($result1);


?>




<div class="container">
<div class="row">
	<div class="col-md-11">
	<div class="card card-header">
		<h2>
			STUDENT'S RESULT
		</h2>
		<hr/>
		
		<div>
			<h4>Name: <?php echo $row1['name']; ?></h4>
			<h4>Roll: <?php echo $row1['roll']; ?></h4>
			<h4>Exam: <?php echo $row1['cat_name']; ?></h4>	
		</div>	
		
	</div>
	
	<div class="card card-body">
		<div class="card mb-3">
			<div class="card-header">
				<div class="card-body">
					<div class="table-responsive">

						<form action="#" method="post">	
							<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
								<thead>
									<tr>
										<th>Subject</th>
										<th>Marks</th>
									</tr>
								</thead>
							
								<tbody>	
										
										<?php					
											
											while($row=mysqli_fetch_array($result))
											{
											
										?>
										
									<tr>
										<td> <?php echo $row['subject']; ?></td>
										<td> <?php echo $row['mcq'] + $row['descriptive']; ?></td>	
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
</div>
</div>

