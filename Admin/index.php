<?php

$message = "";

$conn=mysqli_connect('localhost','root','','school');
if(!$conn){
	echo ("Error connection:".mysqli_connect_errno());
	
};
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql="select * from login1 where email = '$email' and password = '$password'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){
		header('location:dashboard.php');
		die();
	}else{
		$message = "<p>login email and password wrong</p>";
	}
	
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Management System      </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style1.css">

</head>
    <body>
       
		<div class="main-content-wrapper">
			<div class="login-area">
				<div class="login-header">
					<a href="index.php" class="logo">
						<img src="image/logo.png" alt="" height="60">
					</a>
					<h2 class="title">Newport School Management System</h2>
				</div>
				<div class="login-content">

					<!-- <div class="login-bottom-links">
						<a href="index.php?login/forgot_password" class="link">
							 ?
						</a>
					</div> -->
				  <button type="button" onclick="admin_login()" class="btn btn-default" >Admin</button>
				  <button type="button" onclick="teacher_login()" class="btn btn-default" >Teacher</button>
				  <button type="button" onclick="parent_login()" class="btn btn-default" >Parent</button>
				  <br><br>
				  <div class="butn_bottom">
					  <button type="button" onclick="student_login()" class="btn btn-default" >Student</button>
					  <button type="button" onclick="accountant_login()" class="btn btn-default" >Accountant</button>
					  <button type="button" onclick="librarian_login()" class="btn btn-default margin-top" >Librarian</button>
				  </div>
				  <form method="post" role="form" id="" action="">
						<div class="form-group">
							<input class="input-field" name="email" placeholder="Email" required="" autocomplete="off" id="email" type="email">
						</div>
						<div class="form-group">
							<input class="input-field" name="password" placeholder="Password" required="" id="password" type="password">
						</div>
						
						<div class="btn btn-primary">
							<input type="submit" name="submit" value="Login" />
						</div>
						
					</form>
				  
				  
				</div>
			</div>
			<div class="image-area">
				<img src="image/bg.jpg"/>
			</div>
		</div>

	</body>
</html>