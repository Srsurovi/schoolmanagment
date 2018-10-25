<?php
include('header.php');
?>
<?php
$mysqli=new mysqli('localhost','root','','school');
 if(isset($_POST['submit'])){
	   $name=$_POST['name'];
	   $roll=$_POST['roll'];
	   $Bangla=$_POST['Bangla'];
	   $english=$_POST['english'];
	   $math=$_POST['math'];
	   $islam=$_POST['islam'];
	   $science=$_POST['science'];
	   $Agriculture=$_POST['Agriculture'];
	$mysqli->query("INSERT INTO search(name,roll,Bangla,english,math,islam,science,Agriculture)
	values('$name','$roll','$Bangla','$english','$math','$islam','$science',$Agriculture)");
	echo"<div class='alert alert-success'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>";
 }
?>

<div class="container">
  <div class="row">
  <div class="col-md-8">
  <h1>All subject mark add</h1>
  <form action="#" method="post">
		  <div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name">
		  </div>
		  <div class="form-group">
			<label for="roll">Roll:</label>
			<input type="text" class="form-control" id="roll" name="roll">
		  </div>
		  <div class="form-group">
			<label for="Bangla">Bangla:</label>
			<input type="text" class="form-control" id="Bangla" name="Bangla">
		  </div>
			<div class="form-group">
			<label for="english">english:</label>
			<input type="text" class="form-control" id="english" name="english">
		  </div>
		   <div class="form-group">
			<label for="math">math:</label>
			<input type="text" class="form-control" id="math" name="math">
		  </div>
		  <div class="form-group">
			<label for="islam">islam:</label>
			<input type="text" class="form-control" id="islam" name="islam">
		  </div>
		  
		   <div class="form-group">
			<label for="science">science:</label>
			<input type="text" class="form-control" id="science" name="science">
		  </div>
			<div class="form-group">
			<label for="Agriculture">Agriculture:</label>
			<input type="text" class="form-control" id="Agriculture" name="Agriculture">
		  </div>
		  <button type="submit" name="submit"class="btn btn-default">Submit</button>
		  <button type="reset" class="btn btn-default">Refresh</button>
		  
</form>
  
 
	</div>
	</div>
	<script>
$(document).ready( function () {
    $('#dataTable').DataTable();
} );


</script>

  <div class="row">
 <div class="col-md-12">
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Information</div>
        <div class="card-body">
          <div class="table-responsive">
           
<?php
  

	
	echo " <table class='table table-bordered' id='dataTable' cellspacing='0'>
	 <thead>
	<tr>
	<th>id</th>
	<th>Name</th>
	<th>Roll</th>
	<th>Bangla</th>
	<th>English</th>
	<th>Math</th>
	<th>Islam</th>
	<th>Science</th>
	<th>Agriculture</th>
	<th>Action</th>
	
	</tr>
	
	</thead><tbody>";
	   
	$query="SELECT *FROM search";
	$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
	while(list($id,$name,$roll,$Bangla,$english,$math,$islam,$science,$Agriculture)=$result->fetch_row()){
		
		echo "  
		
		<tr>
		<td>$id</td>
		<td>$name</td>
		<td>$roll</td>
		<td>$Bangla</td>
		<td>$english</td>
		<td>$math</td>
		<td>$islam</td>
		<td>$science</td>
		<td>$Agriculture</td>
		
<td><a href=''><button type='submit' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i>Delete</button></a>
<a href=''><button type='submit' class='btn btn-success'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>Edit</button></a></td>
		
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
   </div>    
   </div>    
   
   
      
        <footer class="footer">
            <div class="container-fluid">
                
               
            </div>
        </footer>


 

    <!--   Core JS Files   -->
    <?php
include('footer.php');
?>