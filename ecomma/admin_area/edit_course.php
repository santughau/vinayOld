
<?php require_once('/../../includes/db.php'); 
if (isset($_GET['edit_course'])){
$get_id = $_GET['edit_course'];
$get_pro = "select * from course where course_id='$get_id'";
		   $run_pro = mysqli_query($con,$get_pro);
		   $i=0;
		  $row_pro=mysqli_fetch_array($run_pro);
		   $course_id = $row_pro['course_id'];
		   $course_title = $row_pro['course_name'];
		   $duration = $row_pro['duration'];
		   $fee = $row_pro['fee'];
		   $stauts = $row_pro['stauts'];
		   
		
}

?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-state=1"/>
<title>Insert Product  Page</title>
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
          <h3 class="panel-title text-center">Update Course Here..</h3>
        </div>
        <div class="panel-body">
          <form  action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Course Name </label>
              <input type="text"  class="form-control input-sm"  placeholder="Enter COurse Name here" name="course_title" value="<?php echo $course_title; ?>">
            </div>
            <div class="form-group">
              <label >Duration</label>
              <input type="text" class="form-control input-sm"  placeholder="Enter Duration here"  name="duration" value="<?php echo $duration; ?>">
            </div>
            <div class="form-group">
              <label >Fee</label>
              <input type="text" class="form-control input-sm"  placeholder="Enter Duration here"  name="Fee" value="<?php echo $fee; ?>">
            </div>
            <div class="form-group">
              <label >Status</label>
              <input type="text" class="form-control input-sm"  placeholder="Enter Duration here"  name="status" value="<?php echo $stauts; ?>">
            </div>
            <div class="form-group">
              <div class="col-sm-offset-4 col-md-4">
                <Input type="submit" name="update_course"class="btn btn-primary" value="Update Now">
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
if (isset($_POST['update_course'])){
// Geting text data fro field
$update_id =$course_id;
  $course_title = $_POST['course_title'];
  $duration = $_POST['duration'];
 $Fee = $_POST['Fee'];
 $status = $_POST['status'];
 

  
  
  $update_course = "update course set course_name='$course_title',duration='$duration',
  fee='$Fee',stauts='$status' where course_id = '$update_id'";
  $insert_pro = mysqli_query($con,$update_course);
   if($insert_pro){
	   echo"<script>alert('Save Sucessful')</script>";
	   echo"<script>window.open('index.php?view_course','_self')</script>";
   }


}

?>
