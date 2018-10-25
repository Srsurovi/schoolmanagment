<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/index.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>www.deshboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
     <link href="file/css/font-awesome.css" rel="stylesheet">
	  <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                   <img src="uploads/jahangir alam.jpg" style="width:30px;height:30px;border-radius:20px;"/>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p> Add Routine</p>
                    </a>
                </li>
                <li>
                    <a href="total.php">
                        <i class="pe-7s-user"></i>
                        <p>All result</p>
                    </a>
                </li>
                <li>
                    <a href="admark.php">
                        <i class="pe-7s-note2"></i>
                        <p>Result show</p>
                    </a>
                </li>
                <li>
                    <a href="teacher.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>All Teacher</p>
                    </a>
                </li>
                <li>
                    <a href="student.php">
                        <i class="pe-7s-science"></i>
                        <p> All Student</p>
                    </a>
                </li>
                <li>
                    <a href="maps.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
						
                    </ul>
                  
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Logout
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                
                                <li class="divider"></li>
                                <li><a href="logout.php">Logout</a></li>
                              </ul>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


 <div class="container">
  <div class="row">
  <div class="col-md-3">
 <?php
$mysqli = new mysqli('localhost','root','','school');
if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $father=$_POST['father'];
 $mother=$_POST['mother'];
 $class=$_POST['class'];
 $target_dir="uploads/";
	echo $target_file=$target_dir.basename($_FILES["datafile"]["name"]);
	if(move_uploaded_file($_FILES["datafile"]["tmp_name"],$target_file)){
		echo"This file successfully";
	}else{
		echo"Sorry,It is not uploaded";
	}
	$target_dir1="uploads/";
	echo $target_file1=$target_dir1.basename($_FILES["datafile1"]["name"]);
	if(move_uploaded_file($_FILES["datafile1"]["tmp_name"],$target_file1)){
		echo"This file successfully";
	}else{
		echo"Sorry,It is not uploaded";
	}
$mysqli->query("insert into teacher1(name,father,mother,class,file,file1)values('$name','$father','$mother','$target_file','$target_file1')");
echo"your data insert successfully";
}

 ?>
<div class="container">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Click here</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">     
          <h4 class="modal-title">Write Your information</h4>
        </div>
        <div class="modal-body">


    <form action="#" method="POST" enctype="multipart/form-data" >
	 Name: <input type="text" name="name" required="required"/><br/><br/>
	 father: <input type="text" name="father" required="required"/><br/><br/>
	 mother: <input type="text" name="mother" required="required"/><br/><br/>
	 class: <input type="text" name="class" required="required"/><br/><br/>
	 Photo: <input type="file" name="datafile"/><br/><br/>
	 signature: <input type="file" name="datafile1"/><br/><br/>
	  <input type="submit" name="submit" value="submit"/>
	  <input type="reset" name="reset" value="Refreah"/>
      </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

 
 </div><br/>
 <div class="col-md-9">
 <p>Exam routine:-</p>
 <?php
echo"
<div class='row'>
<div class='col-md-1'>serial</div>
<div class='col-md-2'>Exam name</div>
<div class='col-md-1'>Class </div>
<div class='col-md-1'>subject</div>
<div class='col-md-1'>Date</div>
<div class='col-md-1'>Time</div>
<div class='col-md-1'>action</div>
</div>";
	$query="SELECT * FROM jahangir ";
	$result1=$mysqli->query($query);
	while(list($id,$name,$email,$phone,$round,$subject)=$result1->fetch_row()){
		echo"<div class='row'>
<div class='col-md-1'>$id</div>
<div class='col-md-2'>$name</div>
<div class='col-md-1'>$email</div>
<div class='col-md-1'>$phone</div>
<div class='col-md-1'>$round</div>
<div class='col-md-1'>$subject</div>

<div class='col-md-2'><a href='delete.php?id=$id'><i class='fa fa-trash' aria-hidden='true'></i></a>
<a href='edit.php?id=$id&name=$name & email=$email&phone=$phone &round=$round &subject=$subject'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a></div>
		
		
	</div>";
		
	}
	

?>

 
 </div>
 </div>
 </div>
 


    </div>
</div>


</body>

    <!--   Core JS Files   -->

	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
   

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	

</html>
