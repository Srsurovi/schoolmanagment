<?php

include('header.php');


?>
<?php
$mysqli=new mysqli('localhost','root','','school');
 if(isset($_POST['submit'])){
	   $firstname=$_POST['firstname'];
	   $lastname=$_POST['lastname'];
	   $position=$_POST['position'];
	   $salary=$_POST['salary'];
	   $action=$_POST['action'];
	$mysqli->query("INSERT INTO salarysheet(firstname,lastname,position,salary,action)
	values('$firstname','$lastname','$position','$salary','$action')");
	echo"your data insert successfully";
 }
?>

<div class="container">
  
 
          <center>
<h2> Teacher salary Payment</h2>
 <form action="#" method="POST">
    <div class="form-group">
      <label for="firstname">Frist name:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
    </div>
    <div class="form-group">
      <label for="lastname">last name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
    </div>
	 <div class="form-group">
      <label for="position">position:</label>
      <input type="text" class="form-control" id="position" placeholder="Enter position" name="position">
    </div>
	 <div class="form-group">
      <label for="salary">salary:</label>
      <input type="text" class="form-control" id="salary" placeholder="Enter salary" name="salary">
    </div>
   
      <input type="checkbox" name="action" value="yes"> yes
      <input type="checkbox" name="action" value="no"> No<br/><br/>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>


</center>
       
</div>



<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>
<div class="container">
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Information</div>
        <div class="card-body">
          <div class="table-responsive">

 <?php
 echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>


   <thead>
        <tr>
           <th>Serial</th>
           <th>Frist name</th>
            <th>last name</th>
           <th>position</th>
            <th>salary</th>
            <th>action</th>
        </tr>
    </thead> <tbody>";



	   
	$query="SELECT *FROM salarysheet";
	$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
while(list($id,$firstname,$lastname,$position,$salary,$action)=$result->fetch_row()){
		
		echo "
		<tr>
		<td>$id</td>
		<td>$firstname</td>
		<td>$lastname</td>
		<td>$position</td>
		<td>$salary</td>
		<td>$action</td>
		</tr>
		";
	
	}

   
?>
 </tbody>
</table>
    </div>
</div>
</div>
</div>


       
        <footer class="footer">
            <div class="container-fluid">
                
               
            </div>
        </footer>



</body>
  <?php
include('footer.php');
?>
