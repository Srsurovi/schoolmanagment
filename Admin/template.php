<?php
include('header.php');
?>
<style>
.cat_top{
	margin-top:20px;
}
</style>


<div class="content-wrapper">
    <div class="page-title">

        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-file-text"></i></li>
                <li><a href="#">ADD Data</a></li>
            </ul>
            
        </div>
    </div>
<?php 

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
	      if(isset($_POST['submit'])){
		    $title=$_POST['title'];
		    $body=$_POST['body'];
		    $category=$_POST['category'];
		   
		$target_dir="uploads/";

	 $target_file=$target_dir.basename($_FILES["datafile"]["name"]);
	
	if(move_uploaded_file($_FILES["datafile"]["tmp_name"],$target_file)){
		echo"This file successful<br/>y";
	}else{
		echo"Sorry,It is not uploaded";
	}
	
	
$db->query("INSERT INTO content(title,body,category ,file)VALUES('$title','$body','$category','$target_file')");

echo"your data insert successfully";
	   }
	   
?>
	
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-lg-8">
                <div class="well bs-component">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

						<div class="form-group">
							<div class="col-lg-12">
								<input class="form-control" name="title" type="text" placeholder="Add Title ">
							</div>
						</div>
                        <div class="form-group">

							<div class="col-lg-12" style="margin-bottom:20px;z-index: 1;">
								<textarea name="body" rows="20" class="form-control" placeholder="Add news content here"></textarea>
							</div>
						</div>      
					<div class="col-lg-4 cat_top">  
						<div class="form-group">
							<label>Select categories from here</label>
							<select  class="form-control" name="category">

							   <?php

								if (!$db) {
									die("Connection failed: " . mysqli_connect_error());
								}

									$query="SELECT id, cat_name FROM tbl_category ORDER BY id";
									$result=$db->query($query);
									
									while($row = mysqli_fetch_assoc($result)) {
										echo "<option value=". $row['cat_name'].">". $row['cat_name']."</option>";
									}
								?>                
							</select>
						</div>
                    </div>
                </div>				
					<div class="col-lg-6 tem_top">
						<div class="form-group">
							<label for="">New Image <span style="color: red;"> *</span> </label>
							<input class="form-control" name="datafile" type="file" >
						</div>				
					   
					</div>	
						<div class="form-group">
							<div class="col-lg-12">
							  <input class="btn btn-success" type="submit" Value="Submit" name="submit" />  
							  
							</div>
						</div>
					</form>
                </div>
            </div>
             

        </div>
    </div>
</div>



<?php
include('footer.php');
?>
