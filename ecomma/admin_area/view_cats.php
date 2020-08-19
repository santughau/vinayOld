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
    <div class="col-md-8 ">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title text-center">View all Category Here..</h3>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-responsive table-striped">
         	<tr>
            	<th >Category ID</th>
                <th style="text-align:center;">Category Title</th>
                
                <th style="text-align:center;">Edit</th>
                <th style="text-align:center;">Delete</th>
            </tr>
           <?php include('/../../includes/db.php');
		   $record_per_page = 8;
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
		   
		   $get_cat = "select * from categories ORDER BY cat_title ASC LIMIT $start_from, $record_per_page ";
		   $run_cat = mysqli_query($con,$get_cat);
		   $i=0;
		   while ($row_cat=mysqli_fetch_array($run_cat)){
		   $cat_id = $row_cat['cat_id'];
		   $cat_title = $row_cat['cat_title'];
		   	   		   
		   $i++;
		  
		   ?>
            
            <tr>
            <td><?php echo $i+($page*$record_per_page-$record_per_page); ?></td>
            <td><?php echo $cat_title; ?></td>
            
            <td style="text-align:center;"><a href="index.php?edit_cat=<?php echo $cat_id?>">
            <span class="glyphicon glyphicon-edit"></span></a></td>
            <td style="text-align:center;"><a href="delete_cat.php?delete_cat=<?php echo $cat_id?>">
            <span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            <?php  } ?>
  		  </table>
          <!------------------------------------------->
          <div class="container">
  <div class="row">
    <div class="col-md-8">
      <nav>
        <ul class="pagination">
        <?php 
		$page_query = "select * from categories ORDER BY cat_title ASC ";
		$page_result = mysqli_query($con,$page_query);
		$total_records = mysqli_num_rows($page_result);
		$total_pages = ceil($total_records/$record_per_page);
		for ($i=1;$i<=$total_pages; $i++)
		{
		echo "<li><a href='index.php?view_cats&page=".$i."'>".$i."</a></li>	";
		}
		?>
          
          
          
         
        </ul>
      </nav>
    </div>
  </div>
</div>
          <!------------------------------------------->
         
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
