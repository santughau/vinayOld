<?php
include('/../../includes/db.php');
if (isset($_GET['edit_cat'])){
	  $cat_id = $_GET['edit_cat'];
	  $get_id = "select * from categories where cat_id = '$cat_id'";
	  $run_cat = mysqli_query($con,$get_id);
	  $row_cat = mysqli_fetch_array($run_cat);
	  $cat_id = $row_cat['cat_id'];
	  $cat_title = $row_cat['cat_title'];
	  
	  
	
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
          <h3 class="panel-title text-center">Update Category Here..</h3>
        </div>
        <div class="panel-body">
          <form action="" method="post">
            
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <input type="text" class="form-control" name="new_cat" value="<?php echo"$cat_title";?>" >
            </div>
            <button type="submit" name="add_cat" class="btn btn-primary pull-right">Update Category</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php

if (isset($_POST['add_cat'])){
	$update_id = $cat_id; 
$new_cat=$_POST['new_cat'];
$update_cat="update categories set cat_title = '$new_cat' where cat_id = '$update_id'";
$run_cat = mysqli_query($con,$update_cat);
if($run_cat){
echo "<script>alert('Vinay u r updated $new_cat category ')</script>";
echo "<script>window.open('index.php?view_cats','_self')</script>";
}

}

?>