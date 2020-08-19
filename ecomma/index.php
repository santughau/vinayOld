
<?php require_once('functions/functions.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-state=1"/>
<title>Product  Page</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>

<!---------Nav--------------->
<?php require_once('include/nav.php'); ?>

<!---------Nav---------------> 
<!---------Header--------------->
<div class="container-fluid" style="margin-top:60px;">
  <div class="row">
    <div class="col-xs-12 col-md-12" style="height:120px; background-color:black;">
              
    </div>
  </div>
</div>
<!---------Header---------------> 

<!---------Menybar--------------->
<div class="container-fluid" >
<div class="row">
<div class="col-md-2 col-xs-5 col-sm-5" >
  <div class=" text-danger">
    <h4> <span >Categories</span></h4>
  </div>
  <ul class="list-group" style="margin-left:-12px;">
    <?php getCats();?>
  </ul>
  
  
</div>

<!---------Menybar---------------> 
<!---------sidebar--------------->

<div class="col-md-8 col-xs-7 col-sm-5" style="margin-left:-28px;" >
     <table class="table table-responsive table-striped table-bordered" style="margin-top:40px;">
 <tr>
  
  <td class="success" width="65%">Product Name</td>
  <td class="warning"width="35%">Price</td>
  </tr>
  

      
      
      <?php
		  getCatPro();
		  ?>
      
      </table>
    </div>
 
<!---------sidebar---------------> 


  
  
  
    </div>
</div>
<!---------Footer--------------->

<!---------Footer--------------->

</body>
</html>