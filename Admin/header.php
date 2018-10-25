<!doctype html>
<?php

$db=new mysqli("localhost","root","","school");	

?>



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
	  <!--edit-->
	 <link href="bower_components/google-code-prettify/src/prettify.css" rel="stylesheet" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
		
	
	<link href="css/stylee.css" rel="stylesheet" /> 


	
 
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="gray" data-image="assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                   <img src="uploads/logo.png" height="40"/>
                </a>
            </div>

            <ul class="nav">
                <li>
					<div class="sidenav">
						<div class="dropdown-btn">Student
							<i class="pe-7s-science"></i>
						</div>
						<div class="dropdown-container">
							<a href="show_all_student.php">All Students</a>
							<a href="student.php">Add Student</a>
							<a href="student_search.php">Find Student</a>
						</div>
					</div>	
				</li>
				
				<li>
					<div class="sidenav">
						<div class="dropdown-btn">Teachers
							 <i class="pe-7s-news-paper"></i>
						</div>
						<div class="dropdown-container">
							<a href="show_teacher.php">All Teacher</a>
							<a href="teacher.php">Add Teacher</a>
						</div>
					</div>	
				</li>
				
				<li>
					<div class="sidenav">
						<div class="dropdown-btn">Attendence
							<i class="fa fa-blind"></i>
						</div>
						<div class="dropdown-container">
							<a href="st_add.php">All Attendance</a>
							<a href="add.php">Manage Attendance</a>
						</div>
					</div>	
				</li>
                
				<li>
                    <a href="add.php">
                    
                        <p></p>
                    </a>
                </li>
                <li class="">
                    <a href="exam_routine.php">
                        <i class="pe-7s-graph"></i>
                        <p> Exam Routine</p>
                    </a>
                </li>
				<li class="">
                    <a href="show_routine.php">
                        <i class="pe-7s-graph"></i>
                        <p> Class Routine</p>
                    </a>
                </li>
				<li>
					<div class="sidenav">
						<div class="dropdown-btn">Student Result
							<i class="pe-7s-note2"></i>
						</div>
						<div class="dropdown-container">
							<a href="search_result.php">Show Result</a>
							<a href="add_resultcat.php">Manage Marks</a>
						</div>
					</div>	
				</li>
                <li>
                    <a href="admark.php">
                        
                        <p></p>
                    </a>
                </li>
				 <li>
                    <a href="teacher_payment.php">
                       <i class="fa fa-dollar"></i>
                        <p>Payment Salary</p>
                    </a>
                </li>
				
				<li>
					<div class="sidenav">
						<div class="dropdown-btn">Student payment
							<i class="fa fa-dollar"></i>
						</div>
						<div class="dropdown-container">
							<a href="paymentcat.php">Add Category</a>
							<a href="studentpayment.php">Studdent Payment</a>
							<a href="paymentsearch.php">Manage Payment</a>
						</div>
					</div>	
				</li>
				<li>
                    <a href="show_notice.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notice</p>
                    </a>
                </li>
				<li>
                    <a href="add_holiday.php">
                        <div>Holidays
							<i class="pe-7s-bell"></i>
						</div>
                    </a>
                </li>
				<li>
                    <a href="template.php">
                       <i class="fa fa-clipboard"></i>
                        <p>Add post</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
	
	
<script>

	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var dropdownContent = this.nextElementSibling;
		if (dropdownContent.style.display === "block") {
		  dropdownContent.style.display = "none";
		} else {
		  dropdownContent.style.display = "block";
		}
	  });
	}
</script>
		
	
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