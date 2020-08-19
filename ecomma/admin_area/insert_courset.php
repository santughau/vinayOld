<?php require_once('/../../includes/db.php'); ?>

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
          <h3 class="panel-title text-center">Insert New Course Here..</h3>
        </div>
        <div class="panel-body">
          <form  action="insert_courset.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Course Name </label>
              <input type="text"  class="form-control input-sm"  placeholder="Enter COurse Name here" name="course_title">
            </div>
            
            <div class="form-group">
              <label >Duration</label>
              <input type="text" class="form-control input-sm"  placeholder="Enter Duration here"  name="duration">
            </div>
            <div class="form-group">
              <label >Fee</label>
              <input type="text" class="form-control input-sm"  placeholder="Enter Duration here"  name="Fee">
            </div>
            <div class="form-group">
              <label >Status</label>
              <input type="text" class="form-control input-sm"  placeholder="Enter Duration here"  name="status">
            </div>
                       
            <div class="form-group">
              <div class="col-sm-offset-4 col-md-4">
                <Input type="submit" name="insert_course"class="btn btn-primary" value="Insert Now">
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
if (isset($_POST['insert_course'])){
// Geting text data fro field
  $course_title = $_POST['course_title'];
  $duration = $_POST['duration'];
 $Fee = $_POST['Fee'];
 $status = $_POST['status'];
 

  
  
  $insert_course = "INSERT INTO course (course_name,duration,fee,stauts ) VALUES ('$course_title', '$duration', '$Fee', '$status')";
  $insert_pro = mysqli_query($con,$insert_course);
   if($insert_pro){
	   echo"<script>alert('Save Sucessful')</script>";
	   echo"<script>window.open('index.php?view_course','_self')</script>";
   }


}

?>
