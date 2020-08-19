<?php
$page_title= "MS Office Trainging in Nanded | Vinay Computers Degloor";
$page_key= "ms office word excel powerpoint Trainging in degloor Nanded, Vinay Computers, it classes in degloor nanded, Best Computer Institute degloor nanded,Top Computer Courses in degloor nanded,Top Computer  Institute in degloor nanded";

$page_desc= "Launched in May 2004, “Vinay Computers” started with a simple idea of offering users in Degloor with dependable Technical Support and Quality Computer Repair Service, backed by a knowledgeable & certified team of resources; serving & sales";
?>


<?php require_once('includes/header.php'); ?>
<?php require_once('includes/navbar.php'); ?>
<?php require_once('functions/function.php'); ?>


<div class="container-fluid" style="margin-top:70px;">
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-info">Select Course</h3>
            <form class="form-inline" action="youtube.php" method="post">
              <div class="form-group">
                <select class="form-control">
                  <option>Please Select</option>
                  <?php include("includes/db.php");
                       $get_pro = "select * from vid_course ORDER BY vcourse_name ASC";
                       $run_pro = mysqli_query($con,$get_pro);
                       $i=0;
                       while ($row_pro=mysqli_fetch_array($run_pro)){
                       $course_id = $row_pro['vcourse_id'];
                       $course_name = $row_pro['vcourse_name'];
                     ?>
                     <option><?php echo $course_name; ?></option>
                     <?php } ?>
                </select>
                </div>
                <button type="submit" class="btn btn-default" name="submit">Submit</button>
            </form>
            
        </div>
        <div class="col-md-5">
           <?php 
                if (isset($_POST['submit'])){
                // Geting text data fro field
                 $coursr_id = mysqli_real_escape_string($_POST['$course_id ']);
                 
                   $insert_info = "INSERT INTO contact (con_name, con_mail, con_mobile, con_add, con_qua, con_course) VALUES ('$name', '$mail', '$mobile', '$add', '$qua', '$course')";
                   $insert_data = mysqli_query($con,$insert_info);
  

}

?>
        </div>
        <div class="col-md-3">3</div>
    </div>
</div>
<?php require_once('includes/footer.php'); ?>