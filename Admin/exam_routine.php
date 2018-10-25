<?php session_start(); 

include('header.php');


?>


    


 <div class="container">
  <div class="row">
  <div class="col-md-2">
<?php

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$round=$_POST['round'];
	$subject=$_POST['subject'];
	$db->query("insert into jahangir(name,email,phone,round,subject)values('$name','$email','$phone','$round','$subject')");
	echo "yuor informatin succefully";
	
}
?>
<div class="container">
	<div class="card card-header">
		<h2>
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New</button>
		</h2>
		
	</div>
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Write Your information</h4>
        </div>
        <div class="modal-body">
         <form action="#" method="POST">
<p> update information:-</p>
Teacher name:<input type="text" name="name"/><br/><br/>
Class name:<select name="email">
<option value="">select</option>
<option value="six">Six</option>
<option value="seven">Seven</option>
<option value="Eight">Eight</option>
<option value="Nine">Nine</option>
<option value="Ten">Ten</option>
          </select>
<br/><br/>
Subject:<input type="text" name="phone"/><br/><br/>
class time:<input type="text" name="round"/><br/><br/>
Time:<input type="Time" name="subject"/><br/><br/>
<input type="submit" name="submit" value="submit"/>
<input type="reset" name="submit" value="Reset"/>
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
 </div>
 
 <div class="row">
 <div class="col-md-12">
<script>
$(document).ready( function () {
    $('#dataTable').DataTable();
} );

</script>

 
 <div class="card mb-3">
        <div class="card-header">
        <div class="card-body">
          <div class="table-responsive">
<div class='text-center'>
<h1>Exam routine<h1>
 </div>
 <?php
echo " <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
 

<thead>
        <tr>
           <th>Serial</th>
           <th>Teacher name</th>
            <th>Class</th>
           <th>subject</th>
            <th>class time</th>
            <th>Time</th>
            <th>action</th>
        </tr>
    </thead><tbody>";


	$query="SELECT * FROM jahangir ";
	$result1=$db->query($query);
	while(list($id,$name,$email,$phone,$round,$subject)=$result1->fetch_row()){
		echo "
		  
	  <tr>
        <td>$id</td>
	    <td>$name</td>
	    <td>$email</td>
	    <td>$phone</td>
	    <td>$round</td>
	    <td>$subject</td>
	    <td><a href='delete.php?id=$id'><button type='button' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i>Delete</button></a>
		<a href='edit.php?id=$id&name=$name & email=$email&phone=$phone &round=$round &subject=$subject'><button type='button' class='btn btn-success'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>Edit</button></a></td>
	  
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
    </div>
</body>

    <!--   Core JS Files   -->
<?php
include('footer.php');
?>