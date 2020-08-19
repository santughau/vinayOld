<div class="container">
  <div class="row">
    <div class="col-md-8 ">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title text-center">View all Course Here..</h3>
        </div>
        <div class="panel-body">
      <table class="table table-responsive table-striped table-bordered">
        <tr class="text-danger">
          <th style="text-align:center;">Sr No</th>
          <th style="text-align:center;">Course Name</th>
          <th style="text-align:center;">Duration</th>
          <th style="text-align:center;">Fee (INR)</th>
          <th style="text-align:center;">Batch Starts</th>
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
		
		
		   $get_pro = "select * from course ORDER BY course_name ASC LIMIT $start_from, $record_per_page";
		   $run_pro = mysqli_query($con,$get_pro);
		   $i=0;
		   while ($row_pro=mysqli_fetch_array($run_pro)){
		   $course_id = $row_pro['course_id'];
		   $course_name = $row_pro['course_name'];
		   $duration = $row_pro['duration'];
		   $fee = $row_pro['fee'];
		   $status = $row_pro['stauts'];
		 		   
		   $i++;
	   
		   ?>
        <tr>
          <td style="text-align:center;"><?php echo $i+($page*$record_per_page-$record_per_page); ?></td>
          <td><?php echo $course_name; ?></td>
          <td style="text-align:center;"><?php echo $duration; ?></td>
          <td style="text-align:center;"><?php echo $fee; ?></td>
          <td style="text-align:center;"><?php echo $status; ?></td>
           <td style="text-align:center;"><a href="index.php?edit_course=<?php echo $course_id?>">
            <span class="glyphicon glyphicon-edit"></span></a></td>
            <td style="text-align:center;"><a href="delete_course.php?delete_course=<?php echo $course_id?>">
            <span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
        <?php  } ?>
      </table>

<!---------------------- ---------- -------->
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <nav>
        <ul class="pagination">
        <?php 
		$page_query = "select * from course ORDER BY course_name ASC ";
		$page_result = mysqli_query($con,$page_query);
		$total_records = mysqli_num_rows($page_result);
		$total_pages = ceil($total_records/$record_per_page);
		for ($i=1;$i<=$total_pages; $i++)
		{
		echo "<li><a href='index.php?view_course&page=".$i."'>".$i."</a></li>	";
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