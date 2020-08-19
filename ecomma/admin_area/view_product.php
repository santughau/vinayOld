<?php require_once('/../../includes/db.php'); ?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-state=1"/>
<title>View Products</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body >
<div class="container">
  <div class="row">
    <div class="col-md-10 ">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title text-center">View all Product Here..</h3>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-responsive table-striped">
         	<tr>
            	<th >Sr No</th>
                <th style="text-align:center;">Title</th>
               
                <th style="text-align:center;">Price</th>
                <th style="text-align:center;">Edit</th>
                <th style="text-align:center;">Delete</th>
            </tr>
           <?php include('/../../includes/db.php');
			 $record_per_page = 4;
			$page = '';
			if (isset($_GET["page"]))
			{
			$page = $_GET["page"];
			}
			else 
			{
			$page = 1;	
			}
			$start_from = ($page-1)*$record_per_page;
			
			$get_pro = "select * from products ORDER BY prouct_title ASC LIMIT $start_from, $record_per_page";
		   $run_pro = mysqli_query($con,$get_pro);
		   $i=0;
		   while ($row_pro=mysqli_fetch_array($run_pro)){
		   $pro_id = $row_pro['prouct_id'];
		   $pro_title = $row_pro['prouct_title'];
		   $pro_price = $row_pro['prouct_price'];
		   $prouct_image = $row_pro['prouct_image'];
		   
		   
		   $i++;
		   
		   
		  
		   
		   ?>
            
            <tr>
            <td><?php echo $i+($page*$record_per_page-$record_per_page); ?></td>
            <td><?php echo $pro_title; ?></td>
            
            
            <td style="text-align:right;"><?php echo $pro_price; ?></td>
            <td style="text-align:center;"><a href="index.php?edit_pro=<?php echo $pro_id?>">
            <span class="glyphicon glyphicon-edit"></span></a></td>
            <td style="text-align:center;"><a href="delete_pro.php?delete_pro=<?php echo $pro_id?>">
            <span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            <?php  } ?>
  		  </table>

<!---------------------------------------------->
          <div class="container">
  <div class="row">
    <div class="col-md-8">
      <nav>
        <ul class="pagination">
        <?php 
		$page_query = "select * from products ORDER BY prouct_title ASC";
		$page_result = mysqli_query($con,$page_query);
		$total_records = mysqli_num_rows($page_result);
		$total_pages = ceil($total_records/$record_per_page);
		for ($i=1;$i<=$total_pages; $i++)
		{
		echo "<li><a href='index.php?view_product&page=".$i."'>".$i."</a></li>	";
		}
		?>
          
          
          
         
        </ul>
      </nav>
    </div>
  </div>
</div>

<!----------------------------------------------->         
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
