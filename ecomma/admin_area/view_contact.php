<?php require_once('/../../includes/db.php'); ?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-state=1"/>
<title>View Contact</title>
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
          <h3 class="panel-title text-center">View all Contact Info..</h3>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-responsive table-striped">
         	<tr>
            	<th >Sr No</th>
                <th style="text-align:center;">Name</th>
                <th style="text-align:center;">Mail ID</th>
                <th style="text-align:center;">Mobile No</th>
                <th style="text-align:center;">Address</th>
                <th style="text-align:center;">Quali</th>
                <th style="text-align:center;">Course</th>
                <th style="text-align:center;">Delete</th>
                
            </tr>
           <?php include('/../../includes/db.php');
		  			 $record_per_page = 5;
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

		   
		   
		   
		   $get_contact = "select * from contact ORDER BY con_id DESC LIMIT $start_from, $record_per_page";
		   $run_contact = mysqli_query($con,$get_contact);
		   $i=0;
		   while ($row_contact=mysqli_fetch_array($run_contact)){
		   $con_id = $row_contact['con_id'];
		   $con_name = $row_contact['con_name'];
		   $con_mail = $row_contact['con_mail'];
		   $con_mobile = $row_contact['con_mobile'];
		   $con_add = $row_contact['con_add'];
		   $con_qua = $row_contact['con_qua'];
		   $con_course = $row_contact['con_course'];
		   $i++;
		   
		   
		   $get_qual = "select * from qualifi where qua_id = '$con_qua'";
		   $run_qual = mysqli_query($con,$get_qual);
		   $row_q=mysqli_fetch_array($run_qual);
		   $con_q = $row_q['qua_name'];
		   
		   
		   
		    $get_course = "select * from course where course_id = '$con_course'";
		   $run_course = mysqli_query($con,$get_course);
		   $row_c=mysqli_fetch_array($run_course);
		   $con_c = $row_c['course_name'];
		   ?>
            
            <tr>
            <td><?php echo $i+($page*$record_per_page-$record_per_page); ?></td>
            <td><?php echo $con_name; ?></td>
            <td><?php echo $con_mail; ?></td>
            <td><?php echo $con_mobile; ?></td>
            <td><?php echo $con_add; ?></td>
            <td><?php echo $con_q; ?></td>
            <td><?php echo $con_c; ?></td>
            <td style="text-align:center;"><a href="delete_contact.php?delete_contact=<?php echo $con_id?>">
            <span class="glyphicon glyphicon-trash"></span></a></td>
            
            </tr>
            <?php  } ?>
  		  </table>
            <div class="container">
  <div class="row">
    <div class="col-md-8">
      <nav>
        <ul class="pagination">
        <?php 
		$page_query = "select * from contact ORDER BY con_id DESC ";
		$page_result = mysqli_query($con,$page_query);
		$total_records = mysqli_num_rows($page_result);
		$total_pages = ceil($total_records/$record_per_page);
		for ($i=1;$i<=$total_pages; $i++)
		{
		echo "<li><a href='index.php?view_contact&page=".$i."'>".$i."</a></li>	";
		}
		?>
          
          
          
         
        </ul>
      </nav>
    </div>
  </div>
</div>
         
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
