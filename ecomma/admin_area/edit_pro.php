<?php require_once('/../../includes/db.php'); 
if (isset($_GET['edit_pro'])){
$get_id = $_GET['edit_pro'];
$get_pro = "select * from products where prouct_id='$get_id'";
		   $run_pro = mysqli_query($con,$get_pro);
		   $i=0;
		  $row_pro=mysqli_fetch_array($run_pro);
		   $pro_id = $row_pro['prouct_id'];
		   $pro_title = $row_pro['prouct_title'];
		   
		   $pro_price = $row_pro['prouct_price'];
		   
		   $pro_cat = $row_pro['prouct_cat'];
		   
		   
		   $get_cat = "select * from categories where cat_id='$pro_cat'";
		   $run_cat = mysqli_query($con, $get_cat);
		   $row_cat = mysqli_fetch_array($run_cat);
		   $category_title = $row_cat['cat_title'];
		   
		   $get_brand = "select * from brands where brand_id='$pro_brand'";
		   $run_brand = mysqli_query($con, $get_brand);
		   $row_brand = mysqli_fetch_array($run_brand);
		   $brand_title = $row_brand['brand_title'];	
				
	
	
}

?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-state=1"/>
<title>Update Product</title>
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
          <h3 class="panel-title text-center">Update Product Here..</h3>
        </div>
        <div class="panel-body">
          <form  action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Product Title </label>
              <input type="text"  class="form-control input-sm"  placeholder="Enter Product Title here" name="produt_title" value="<?php echo $pro_title; ?>">
            </div>
            <div class="form-group">
              <label>Product Category</label>
              <select class="form-control input-sm" name="product_cat" >
                <option><?php echo $category_title; ?></option>
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
              <input type="text" class="form-control input-sm"  placeholder="Enter Product Price here"  name="produt_price" value="<?php echo $pro_price; ?>">
            </div>
            
            
            <div class="form-group">
              <div class="col-sm-offset-4 col-md-4">
                <Input type="submit" name="update_post"class="btn btn-primary" value="Update Now">
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
if (isset($_POST['update_post'])){
// Geting text data fro field
 $update_id=$pro_id;
 $produt_title = $_POST['produt_title'];
 $produt_cat = $_POST['product_cat'];
 
 $produt_price = $_POST['produt_price'];
 

  
  
   $update_product = "update products set prouct_cat='$produt_cat',prouct_title='$produt_title',prouct_price='$produt_price' where prouct_id='$update_id'";
   $run_product = mysqli_query($con,$update_product);
   if($run_product){
	   echo"<script>alert('Update Sucessful')</script>";
	   echo"<script>window.open('index.php?view_product','_self')</script>";
   }


}

?>
