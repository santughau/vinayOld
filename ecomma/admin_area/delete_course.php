<?php
include('/../../includes/db.php');
if (isset($_GET['delete_course'])){
$delete_id = $_GET['delete_course'];
$delete_course = "delete from course where course_id = '$delete_id'";	
$run_delete = mysqli_query ($con,$delete_course);
if($run_delete){
echo "<script>alert('COntact has been deleted')</script>";
echo "<script>window.open('index.php?view_course','_self')</script>";
}

}






?>