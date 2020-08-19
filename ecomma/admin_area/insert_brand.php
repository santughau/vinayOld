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
          <h3 class="panel-title text-center">Insert New Brand Here..</h3>
        </div>
        <div class="panel-body">
          <form action="" method="post">
            
            <div class="form-group">
              <label for="exampleInputEmail1">Brand Name</label>
              <input type="text" class="form-control" name="new_brand" placeholder="Insert New Brand:" required>
            </div>
            <button type="submit" name="add_brand" class="btn btn-primary pull-right">Add Brand</button>
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
if (isset($_POST['add_brand'])){
$new_brand=$_POST['new_brand'];
$insert_brand="insert into brands (brand_title) values('$new_brand')";
$run_brand = mysqli_query($con,$insert_brand);
if($run_brand){
echo "<script>alert('Vinay u r enterd $new_brand Brand ')</script>";
echo "<script>window.open('index.php?view_brands','_self')</script>";
}

}

?>