<?php
include('/../../includes/db.php');
if (isset($_GET['edit_brand'])){
	  $brand_id = $_GET['edit_brand'];
	  $get_brand = "select * from brands where brand_id = '$brand_id'";
	  $run_brand = mysqli_query($con,$get_brand);
	  $row_brand = mysqli_fetch_array($run_brand);
	  $brand_id = $row_brand['brand_id'];
	  $brand_title = $row_brand['brand_title'];
	  
	  
	
}
?>





<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-state=1"/>
<title>Home Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body >
<div class="container">
  <div class="row">
    <div class="col-md-8 ">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Update Brand Here..</h3>
        </div>
        <div class="panel-body">
          <form action="" method="post">
            
            <div class="form-group">
              <label for="exampleInputEmail1">Brand Name</label>
              <input type="text" class="form-control" name="new_brand" value="<?php echo"$brand_title";?>" >
            </div>
            <button type="submit" name="add_brand" class="btn btn-primary pull-right">Update Brand</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php

if (isset($_POST['add_brand'])){
	$update_id = $brand_id; 
$new_brand=$_POST['new_brand'];
$update_brand="update brands set brand_title = '$new_brand' where brand_id = '$update_id'";
$run_brand = mysqli_query($con,$update_brand);
if($run_brand){
echo "<script>alert('Vinay u r updated $new_brand category ')</script>";
echo "<script>window.open('index.php?view_brands','_self')</script>";
}

}

?>