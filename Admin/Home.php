<style>
.login-form form{
	width:250px;
	height:250px;
	padding:30px;
	 position: absolute;
    left: 35%;
    top: 35%;
	background:black;
	color:white;
	border:4px red solid;
}
.login-form{
	
}
body{
	background:gray;
}
input[type="text"],input[type="password"] {
    width: 79%;
    padding: 10px;
}
input[type="submit"]{
	width:50%;
	padding:10px;
}
</style>
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
<html>
<body onload="myFunction()">
<div class="login-form">

<form action="" method="POST">
<p>login email and password</p>
<input type="text" name="email"style="background:green" placeholder="email address"required="required"/><br/><br/>
<input type="password" name="password"style="background:green" placeholder="password name"required="required"/><br/><br/>
<div class="checkbox">
<label><input type="checkbox" name="remember"> Remember me</label>
    </div>
<input type="submit" name="submit" value="Login"/>

<?php echo $message; ?>
</form>
</div>

</body>
</html>

