<?php require_once('/../../includes/db.php'); ?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-state=1"/>
<title>INsert Product  Page</title>
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
          <h3 class="panel-title text-center">Insert New Product Here..</h3>
        </div>
        <div class="panel-body">
          <form  action="insert_product.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Product Title </label>
              <input type="text"  class="form-control input-sm"  placeholder="Enter Product Title here" name="produt_title">
            </div>
            <div class="form-group">
              <label>Product Category</label>
              <select class="form-control input-sm" name="product_cat" >
                <option>Select a Category</option>
                <?php
		  global $con;
		$get_cats = "select * from categories ORDER BY cat_title ASC";
		$run_cats = mysqli_query($con,$get_cats);
		while ($row_cats = mysqli_fetch_array($run_cats)){
		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];
		$cat_item = $row_cats['cat_item'];
		echo "<option value='$cat_id'>$cat_title</option>";
		
		}
		?>
              </select>
            </div>
            
           
            <div class="form-group">
              <label >Product Price</label>
              <input type="text" class="form-control input-sm"  placeholder="Enter Product Price here"  name="produt_price">
            </div>
            
            
            <div class="form-group">
              <div class="col-sm-offset-4 col-md-4">
                <Input type="submit" name="insert_post"class="btn btn-primary" value="Insert Now">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php 
if (isset($_POST['insert_post'])){
// Geting text data fro field
 $produt_title = $_POST['produt_title'];
 $produt_cat = $_POST['product_cat'];
 
 $produt_price = $_POST['produt_price'];
 
  
  
   $insert_product = "INSERT INTO products (prouct_cat,prouct_title, prouct_price) VALUES ('$produt_cat',  '$produt_title', '$produt_price')";
   $insert_pro = mysqli_query($con,$insert_product);
   if($insert_pro){
	   echo"<script>alert('Save Sucessful')</script>";
	   echo"<script>window.open('index.php?view_product','_self')</script>";
   }


}

?>
