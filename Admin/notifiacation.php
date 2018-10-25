<?php

include('header.php');

?>

<?php 
      $mysqli=new mysqli('localhost','root','','school');
	      if(isset($_POST['submit'])){
		   $cat_name=$_POST['category'];
		   $mysqli->query("insert into tbl_category(cat_name)values('$cat_name')");
		   echo "add category succefully";
	   }
	   
?>
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <ul class="breadcrumb">
                <li><i class="fa fa-file-text"></i></li>
                <li><a href="#">ADD Category</a></li>
            </ul>
    <div class="col-md-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="well bs-component">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">

                                <div class="col-lg-12">
                                    <input class="form-control" name="category" type="text" placeholder="Add category Title ">
                                </div>
                            </div>
                            
                
                <div class="form-group">
                    <div class="col-lg-12">
                        <button  name ="submit" class="btn btn-primary btn-block">ADD category</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
					
					
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>
<?php
include('footer.php');
?>