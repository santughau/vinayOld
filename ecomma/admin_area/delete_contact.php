<?php
include('/../../includes/db.php');
if (isset($_GET['delete_contact'])){
$delete_id = $_GET['delete_contact'];
$delete_pro = "delete from contact where con_id = '$delete_id'";	
$run_delete = mysqli_query ($con,$delete_pro);
if($run_delete){
echo "<script>alert('COntact has been deleted')</script>";
echo "<script>window.open('index.php?view_contact','_self')</script>";
}

}






?>