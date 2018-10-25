<?php 
include('inc/header.php');
?>


<div class="container">
<div class="text-center">
<div class="row background1">
<div class="col-md-12">
<h2>ARE YOU A TEST TAKER WITH A QUESTION ABOUT YOUR EXAM?</h2>
<p>Please check out our resources below to select the appropriate area you have a question about. Complete and submit the easy-to-follow online form. Your submission will be forwarded to a Prometric representative. Note: To check the status of your testing center location, please visit our Site Status page, where you’ll find a list of all centers that are closed due to inclement weather or other circumstances.</p>
</div>


</div>
</div>
</div>




 <div class="container-fluid">
	  <div class="row footer1">
	  <div class="col-md-3">
	  <div class="icon">
	<i class="fa fa-map-marker fa-2x"></i>
        <p>1207 Mirpur Dhaka,<br>
          Bangladesh-1248</p>
     
      <i class="fa fa-envelope-o fa-2x"></i>
        <p>jahangirdc20@gmail.com</p>
     
     <i class="fa fa-phone fa-2x"></i>
        <p> +801738110373</p>
     
	  </div>
	  </div>
	   <div class="col-md-9">
	   <?php 
	  $mysqli=new mysqli('localhost','root','','school');
      if(isset($_POST['submit'])){
	   $name=$_POST['name'];
	   $email=$_POST['email'];
	   $textarea=$_POST['textarea'];
	   $mysqli->query("insert into contact(name,email,textarea)values('$name',$email,'$textarea')");
	   echo "your info successfully";
	  }
	   ?>
	   
	  <form class="form-horizontal" method="post" action="#">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name"></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email"></label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"></label>
    <div class="col-sm-10"> 
      <textarea type="comment" class="form-control" id="pwd" name="textarea" placeholder="Enter comment"></textarea></div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  
</form>

	  </div>
	   
	  </div>
	  </div>
<?php 
include('inc/footer.php');
?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>