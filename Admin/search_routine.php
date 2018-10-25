<?php
session_start();
include("header.php");					
	
?>

<div class="container">
	
	
	<div class="card card-header">
		<h2>
			<a class="btn btn-success" href="show_routine.php">Routine</a>
		</h2>

  <div class="card card-body">
  
	
	
		<table class="table table-striped">
			<tr>
				<th>Class</th>
				<th>Day</th>
				<th>1st Period</th>
				<th>2nd Period</th>
				<th>3rd Period</th>
				<th>4th Period</th>
			</tr>
<?php



	
		if(isset($_POST['seh'])){
				$_SESSION['seh'] = $_POST['seh'];
			}
		
		
		
		$result=$db->query("select * from c_routine where Class_name ='".$_SESSION['seh']."'");
		while($row=mysqli_fetch_array($result))
						{
							?>
			<tr>
				<td> <?php echo $row['Class_name']; ?></td>
				<td> <?php echo $row['day']; ?></td>
				<td> <?php echo $row['1st']; ?></td>
				<td> <?php echo $row['2nd']; ?></td>
				<td> <?php echo $row['3nd']; ?></td>
				<td> <?php echo $row['4th']; ?></td>
	
			</tr>	
			
			<?php
				}
			?>
			
		
		</table>
		</div>
	</div>
</div>