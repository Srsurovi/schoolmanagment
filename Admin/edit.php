
<?php 
include ('header.php');
?>
<?php

    $id=$_GET['id'];
    $name=$_GET['name'];
	$email=$_GET['email'];
	$phone=$_GET['phone'];
	$round=$_GET['round'];
	$subject=$_GET['subject'];
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$round=$_POST['round'];
	$subject=$_POST['subject'];
$db=new mysqli('localhost','root','','school');
$query = "UPDATE  jahangir SET name='$name',email='$email',
 phone='$phone', round='$round', subject='$subject' WHERE id=$id";

 $result=$db->query($query,MYSQLI_STORE_RESULT);


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
				Exam Name:<input type="text" name="name" value="<?php echo $name; ?>"/><br/><br/>
				Class:<input type="text" name="email" value="<?php echo $email; ?>"/><br/><br/>
				Subject:<input type="text" name="phone"value="<?php echo $phone; ?>"/><br/><br/>
				Date:<input type="date" name="round" value="<?php echo $round; ?>"/><br/><br/>
				Time:<input type="Time" name="subject" value="<?php echo $subject; ?>"/><br/><br/>
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
  