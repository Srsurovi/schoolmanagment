
<?php 
include ('header.php');
?>




<?php

    $serial=$_GET['serial'];
    $Exam=$_GET['Exam'];
	$Class=$_GET['Class'];
	$pass=$_GET['pass'];
	$fail=$_GET['fail'];
	$total=$_GET['total'];
if(isset($_POST['submit'])){
	$Exam=$_POST['Exam'];
	$Class=$_POST['Class'];
	$pass=$_POST['pass'];
	$fail=$_POST['fail'];
	$total=$_POST['total'];
$mysqli=new mysqli('localhost','root','','school');
$query = "UPDATE  result SET Exam='$Exam',Class='$Class',
 pass='$pass', fail='$fail', total='$total' WHERE serial=$serial";

 $result=$mysqli->query($query,MYSQLI_STORE_RESULT);


}
?>


<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">data update</h4>
        </div>
        <div class="modal-body">
        <form action="#" method="POST">
Exam Name:<input type="text" name="Exam" value="<?php echo $Exam; ?>"/><br/><br/>
Class:<input type="text" name="Class" value="<?php echo $Class; ?>"/><br/><br/>
pass:<input type="text" name="pass"value="<?php echo $pass; ?>"/><br/><br/>
fail:<input type="text" name="fail" value="<?php echo $fail; ?>"/><br/><br/>
total:<input type="text" name="total" value="<?php echo $total; ?>"/><br/><br/>
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





 <?php 
include ('footer.php');
?>