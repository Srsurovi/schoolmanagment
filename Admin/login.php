
  <!-- Navigation-->
  <?php include('navbar.php');?> 
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dastabase</a>
        </li>
        <li class="breadcrumb-item active">data</li>
      </ol>
	 <div class="container blog-form">
	
		<?php 
		if(isset($_POST["submit"])){
			$username = $_POST["username"];
			$password = $_POST["password"];
			
 $mysqli = new mysqli('localhost','root','','final');
 $query = "SELECT * FROM frame1 WHERE username='$username' and password='$password'";
 $result=$mysqli->query($query,MYSQLI_STORE_RESULT);
 $count =mysqli_num_rows($result);
 if($count == 1){
	echo $_SESSION['username'] = $username;
 
			
		

	                   // header("Location: index.php");						

			       // die();						
 }else {
 echo "<p>invalid login credentals.</p>";
	 }
	}
		
		?>
	
		<h1>Secure Login</h1>
		<div class="row">
		<form role="form" action="#" method="POST">
			<div class="col-md-9">
				<i class="fa fa-user-o" aria-hidden="true"></i><input type="text" name="username" placeholder="User Name"/>
			<hr/>
			</div>
			<div class="col-md-9">
				<i class="fa fa-key" aria-hidden="true"></i><input type="password" name="password" placeholder="Password"/>
			<hr/>
			</div>
			<div class="col-md-9">	
			<input class="rsv-btn2" type="submit" name="submit" value="Login"/>
			</div>
			<div class="mx-auto">
			</div>
		</form>		
		</div>
	</div>

		

     
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php include('footer.php')?>

    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
  </div>
</body>

</html>
