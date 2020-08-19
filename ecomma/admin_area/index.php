<?php
session_start();
	
if(!isset($_SESSION['user_name'])){
header("location:login.php");	
}
else{

?>

<!doctype html>
<?php require_once('../functions/functions.php'); ?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-state=1"/>
<title>Admin Area For Vinay</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
</head>

<body>

<!---------Nav---------------> 

<!---------Nav---------------> 
<!---------Header--------------->
<div class="container">
  <div class="row">
    <div class="col-md-12"> <img src="../img/header.jpg" class="img-responsive img-thumbnail"> </div>
  </div>
</div>
<!---------Header---------------> 

<!---------Menybar--------------->
<div class="container">
  <div class="row">
    <div class="col-md-10" style="margin-top:30px;">
    <?php
	if(isset($_GET['insert_product'])){
	include('insert_product.php'); 
	
	}
	?>
    <?php
	if(isset($_GET['view_product'])){
	include('view_product.php'); 
	
	}
	?>
     <?php
	if(isset($_GET['edit_pro'])){
	include('edit_pro.php'); 
	
	}
	?>
     <?php
	if(isset($_GET['insert_cats'])){
	include('insert_cats.php'); 
	
	}
	?>
     <?php
	if(isset($_GET['view_cats'])){
	include('view_cats.php'); 
	
	}
	?>
     <?php
	if(isset($_GET['edit_cat'])){
	include('edit_cat.php'); 
	
	}
	?>
    <?php
	if(isset($_GET['insert_brand'])){
	include('insert_brand.php'); 
	
	}
	?>
     <?php
	if(isset($_GET['view_brands'])){
	include('view_brands.php'); 
	
	}
	?>
     <?php
	if(isset($_GET['edit_brand'])){
	include('edit_brand.php'); 
	
	}
	?>
     <?php
	if(isset($_GET['view_contact'])){
	include('view_contact.php'); 
	
	}
	?>
    <?php
	if(isset($_GET['insert_courset'])){
	include('insert_courset.php'); 
	
	}
	?>
     <?php
	if(isset($_GET['view_course'])){
	include('view_course.php'); 
	
	}
	?>
     <?php
	if(isset($_GET['edit_course'])){
	include('edit_course.php'); 
	
	}
	?>
    
    
    
    </div>
    
    <!---------Menybar---------------> 
    <!---------sidebar--------------->
    
    <div class="col-md-2" style="margin-top:30px;">
    <h4>Control Panel</h4>
	<a href="index.php?insert_product" >Insert New Product</a><br><br>
    <a href="index.php?view_product" >View All Product</a><br><br>
    <a href="index.php?insert_cats" >Insert New Category</a><br><br>
    <a href="index.php?view_cats" >View All Category</a><br><br>
    <a href="index.php?insert_brand" >Insert New Brands</a><br><br>
    <a href="index.php?view_brands" >View All Brands</a><br><br>
    <a href="index.php?view_contact" >View Contacts</a><br><br>
    <a href="index.php?insert_courset" >Insert Course</a><br><br>
    <a href="index.php?view_course" >View Course</a><br><br>
    <a href="logout.php" >Admin LogOut</a><br><br>
    
    </div>
  </div>
</div>
<!---------sidebar---------------> 


<!---------Footer--------------->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div style="text-align: center; border-top: 2px solid #999; margin-top: 1em;">
        
        <p style="font-size:12px;">© 2016 Developed By Gaurav Sontakke & Vinay Pawar Degloor Dist Nanded 
        .</p>
      </div>
    </div>
  </div>
</div>
<!---------Footer--------------->

</body>
</html>
<?php } ?>

          