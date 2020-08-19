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
          <h3 class="panel-title text-center">Insert New Category Here..</h3>
        </div>
        <div class="panel-body">
          <form action="" method="post">
            
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <input type="text" class="form-control" name="new_cat" placeholder="Insert New Category:" required>
            </div>
            <button type="submit" name="add_cat" class="btn btn-primary pull-right">Add Category</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php
include('/../../includes/db.php');
if (isset($_POST['add_cat'])){
$new_cat=$_POST['new_cat'];
$insert_cat="insert into categories (cat_title) values('$new_cat')";
$run_cat = mysqli_query($con,$insert_cat);
if($run_cat){
echo "<script>alert('Vinay u r enterd $new_cat category is Inserted')</script>";
echo "<script>window.open('index.php?view_cats','_self')</script>";
}

}

?>