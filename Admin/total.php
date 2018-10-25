
<?php
include('header.php');
?>
<div class="container">
  <div class="row">
  <div class="col-md-12">
 <?php
$mysqli=new mysqli('localhost','root','','school');
if(isset($_POST['submit'])){
	$Exam=$_POST['Exam'];
	$Class=$_POST['Class'];
	$pass=$_POST['pass'];
	$fail=$_POST['fail'];
	$total=$_POST['total'];
	$mysqli->query("insert into result(Exam,Class,pass,fail,total)values('$Exam','$Class','$pass','$fail','$total')");
	echo "<div class='alert alert-success'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>";
	
	
}
?>


  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Information</h4>
        </div>
        <div class="modal-body">
         <form action="#" method="POST">
<p> update information:-</p>
Exam Name:<input type="text" name="Exam"/><br/><br/>
Class name:<select name="Class">
<option value="">select</option>
<option value="six">Six</option>
<option value="seven">Seven</option>
<option value="Eight">Eight</option>
<option value="Nine">Nine</option>
<option value="Ten">Ten</option>
          </select>
<br/><br/>
pass:<input type="text" name="pass"/><br/><br/>
fail:<input type="text" name="fail"/><br/><br/>
Total:<input type="text" name="total"/><br/><br/>
<input type="submit" name="submit" value="submit"/>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
$(document).ready( function () {
    $('#dataTable').DataTable();
} );

</script>

<div class="row">
<div class="col-md-12">
 <p>Result Sheet:-</p>
 
 <div class="card mb-3">
        <div class="card-header">
        <div class="card-body">
          <div class="table-responsive">
           
<?php
  
	
	
	echo " <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
<thead>
<tr>
<th>serial</th>
<th>Exam name</th>
<th>Class </th>
<th>Passed</<th>>
<th>fail</th>
<th>Total</th>
<th>action</th>
</tr>
 </thead><tbody>";


	$query="SELECT * FROM result ";
	$result1=$mysqli->query($query);
	while(list($serial,$Exam,$Class,$pass,$fail,$total)=$result1->fetch_row()){
		
		echo"
		 <tr>
<td>$serial</td>
<td>$Exam</td>
<td>$Class</td>
<td>$pass</td>
<td>$fail</td>
<td>$total</td>

<td><a href='rdelete.php?serial=$serial'><button type='button' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i>Delete</button></a>
<a href='redit.php?serial=$serial & Exam=$Exam & Class=$Class & pass=$pass & fail=$fail & total=$total'><button type='button' class='btn btn-success'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>Edit</button></a></td>
		
		
	</tr>";
	
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
  
        



</body>

  <?php
include('footer.php');
?>