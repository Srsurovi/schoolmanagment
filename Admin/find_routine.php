<?php
$db=new mysqli("localhost","root","","school");
?>

<div class="container">

			<?php				
						
				
                $query='SELECT * FROM class_name ';	              				
				$result=$db->query($query, MYSQLI_STORE_RESULT);
				
				
				
				?>


 <div class="card card-body">
 
 
 
 
 		<form action="search_routine.php" method="post">
			<div class="form-group">		
				<select name="seh">
					<option value="">Select Class</option>
					<?php					
					
				while(list($id,$name_class)=$result->fetch_row()){
					echo "
						<option value='$name_class'>Class-$name_class</option>";
					}
			?>
			<input type="hidden" value="<?php echo $row['seh'] ?>"/>
				</select>
			<input type="submit" name="Search" value="Search">
			</div>
			
		</form>
  
	
	
</div>
</div>