<!doctype html>
<?php require_once('functions/functions.php'); ?>
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

<body>

<!---------Nav--------------->
<?php require_once('include/nav.php'); ?>
<!---------Nav---------------> 
<!---------Header--------------->
<div class="container">
  <div class="row">
    <div class="col-md-12"> <img src="img/1.jpg" class="img-responsive img-thumbnail"> </div>
  </div>
</div>
<!---------Header---------------> 

<!---------Menybar--------------->
<div class="container" >
  <div class="row">
    <div class="col-md-2" >
      <div class=" text-danger">
        <h3> <span >Categories</span></h3>
      </div>
      <ul class="list-group">
        <?php getCats();?>
      </ul>
      <div class=" text-danger">
        <h3> <span >Brands</span></h3>
      </div>
      <ul class="list-group">
        <?php getBrand();?>
      </ul>
    </div>
    
    <!---------Menybar---------------> 
    <!---------sidebar--------------->
   <div class="container" >
  <div class="row"> 
    <div class="col-md-10" >
      <h3 class="text-center text-danger"> <span >Today's Offer</span></h3>
         
           <?php
		 if (isset($_GET['pro_id'])){
			 
			 
    $prouct_id = $_GET['pro_id'];
	$get_pro = "select * from products where prouct_id = $prouct_id";
	$run_pro = mysqli_query($con,$get_pro);
	while($row_pro = mysqli_fetch_array($run_pro)){
	$pro_id = $row_pro['prouct_id'];
	$pro_cat = $row_pro['prouct_cat'];
	$pro_brand = $row_pro['prouct_brand'];
	$pro_title = $row_pro['prouct_title'];
	$pro_price = $row_pro['prouct_price'];
	$pro_desc = $row_pro['prouct_desc'];
	$pro_image = $row_pro['prouct_image'];
	$pro_keywords = $row_pro['prouct_keywords'];
	echo "
    		<div class='col-md-12'>
     			 <div class='panel panel-primary'>
       				 <div class='panel-heading'>
          <h3 class='panel-title'>$pro_title</h3>
        </div>
       				 <div class='panel-body'>
       				 <img src='admin_area/product_image/$pro_image' class='img-responsive img-thumbnail'>
       				 <p class='text-center text-danger'>Rs $pro_price</p>
					  <p>$pro_desc</p>
        		</div>
        	<div class='panel-footer'>
        		<a href='index.php?pro_id=$pro_id' class='btn btn-warning btn-xs '>Go Back</a>
       		 
       	 </div>
      	</div>
    	</div>
  	 ";	
	}
		  
 }
		   ?>
          
     
</div></div></div>
<!---------sidebar---------------> 

<!---------Footer--------------->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div style="text-align: center; border-top: 2px solid #999; margin-top: 1em;">
        <p><a href="#">Home</a> • <a href="#">COmputer</a> • <a href="#">Laptop</a> • <a href="#">Printer</a> • <a href="#">Contact Us</a></p>
        <p style="font-size: 0.6em;">©2008 Lorem Ipsum Dolar Lorem ipsum dolor sit amet, consetetur 
          
          sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
          
          dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam 
          
          et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
          
          sanctus est Lorem ipsum dolor sit amet.</p>
      </div>
    </div>
  </div>
</div>
<!---------Footer--------------->

</body>
</html>