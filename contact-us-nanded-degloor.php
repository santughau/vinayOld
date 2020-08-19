<?php
$page_title= "Contact Us | Vinay Computers Degloor";
$page_key= "Antivirus in degloor nanded, Quickheal in degloor nanded, netprotector in degloor nanded, NP, virus removal in degloor nanded,spyware malware in degloor nanded,vinay computers in degloor nanded,pc tuneup , boost your pc,antivirus update, malicious software, pyware and virus removal,infected computer, ";
$page_desc= "Launched in May 2004, “Vinay Computers” started with a simple idea of offering users in Degloor with dependable Technical Support and Quality Computer Repair Service, backed by a knowledgeable & certified team of resources; serving & sales";
?>


<?php require_once('includes/header.php'); ?>
<?php require_once('includes/navbar.php'); ?>
<?php require_once('functions/function.php'); ?>


<div class="container">
 <div class="row">
     <div class="col-md-12 col-sm-12" style="margin-top:70px;"id="add">
        Ad      
        </div>
 </div>
  
</div>


<!-------------------------------------------------------------------------->
 
<div class="container" style="margin-top:20px;">
  <div class="row">
    <div class="col-md-4 col-sm-4 ">
      <div class="panel panel-primary" style=" border:2px solid #F90;">
        <div class="panel-heading" style="background-color:#F90;">Register Your Name</div>
        <div class="panel-body" style="text-align:justify; ">
          <form action="contact-us-nanded-degloor.php" method="post">
            <div class="form-group">
              <label >Your Name</label>
              <input type="text" name="name" class="form-control"  placeholder="Enter Your Name here.." required>
            </div>
            <div class="form-group">
              <label >Your Email</label>
              <input type="text" name="mail" class="form-control"  placeholder="Enter Your mail here..">
            </div>
            <div class="form-group">
              <label >Your Mobile No</label>
              <input type="text" name="mobile" class="form-control"  placeholder="Enter Your Mobile No here.." required>
            </div>
            <div class="form-group">
              <label >Your Address</label>
              <textarea class="form-control" name="add" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label >Select Your Qualification</label>
              <select class="form-control input-sm" name="qua">
                <option>Select a your Qualification</option>
                <?php
		 	 $con;
			 $get_qua = "select * from qualifi ORDER BY qua_name ASC";
			 $run_qua = mysqli_query($con,$get_qua);
			 while ($row_qua = mysqli_fetch_array($run_qua)){
			 $qua_id = $row_qua['qua_id'];
			 $qua_name = $row_qua['qua_name'];
			 echo "<option value='$qua_id'>$qua_name</option>";
		
			}
	
		 ?>
              </select>
            </div>
            <div class="form-group">
              <label >Select Course to join</label>
              <select class="form-control input-sm" name="course">
                <option>Select Course to join</option>
                <?php
		 	global $con;
			$get_course = "select * from course ORDER BY course_name ASC ";
			$run_course = mysqli_query($con,$get_course);
			while ($row_course = mysqli_fetch_array($run_course)){
			$course_id = $row_course['course_id'];
			$course_name = $row_course['course_name'];
			echo "<option value='$course_id'>$course_name</option>";
		
			}
	
		 ?>
              </select>
            </div>
            <button type="submit" class="btn btn-default pull-right" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
    <!------------------------------------------------------->
    
    <div class="col-md-5 col-sm-5">
      <table class="table-responsive table-striped table-bordered">
        <tr class="text-danger">
          <th style="text-align:center;">Sr No</th>
          <th style="text-align:center;">Course Name</th>
          <th style="text-align:center;">Duration</th>
          <th style="text-align:center;">Fee (INR)</th>
          <th style="text-align:center;">Batch Starts</th>
        </tr>
        <?php include("includes/db.php");
		   $get_pro = "select * from course ORDER BY course_name ASC";
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
          <td style="text-align:center;"><?php echo $i; ?></td>
          <td><?php echo $course_name; ?></td>
          <td style="text-align:center;"><?php echo $duration; ?></td>
          <td style="text-align:center;"><?php echo $fee; ?></td>
          <td style="text-align:center;"><?php echo $status; ?></td>
        </tr>
        <?php  } ?>
      </table>
    </div>
    
    <!---------------------------------------------------------->
    
    <div class="col-md-3 col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Degloor Branch</h3>
        </div>
        <div class="panel-body">
          <h3 class="text-center text-danger">Vinay Pawar</h3>
          <p class="text-center">
          <address>
          Shivneri Nagar,<br/>
          Rampur Road<br/>
          Degloor Dist Nanded<br/>
          Pin -431717<br/>
          Maharashtra<br/>
          Mobile: 9420846838<br/>
          Mobile: 9175318253
          </address>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Nanded Branch</h3>
        </div>
        <div class="panel-body">
          <h3 class="text-center text-danger">Gaurav Kumar</h3>
          <p class="text-center ">
          <address>
          Flat No 9,<br/>
          Aman Complex<br/>
          Deep Nagar,BMC Colony<br/>
          Taroda Naka <br>
          Nanded<br>
          Pin -431605<br/>
          Maharashtra<br/>
          Mobile: 9420846838<br/>
          Mobile: 9175318253
          </address>
          </p>
        </div>
      </div>
    </div>
    <!---------------------------------------------------------> 
</div><hr>
<div class="col-md-12">
    <h4 class="text-center text-info">Find Us on Google Map</h4>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyASSRYOZpuH65YKf2Kyu3ZQV9n2rzOlzn8'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://indiatvnow.com/'>TV Soap from India</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=771adbb8393dc2f28fd01595020073d70b7c595e'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(18.540363,77.57486700000004),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(18.540363,77.57486700000004)});infowindow = new google.maps.InfoWindow({content:'<strong>Degloor</strong><br>vinay computers<br>431717 degloor<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
</div>
  
<?php require_once('includes/footer.php'); ?>

<?php 
if (isset($_POST['submit'])){
// Geting text data fro field
 $name = mysqli_real_escape_string($con,$_POST['name']);
 $mail = mysqli_real_escape_string($con,$_POST['mail']);
 $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
 $add = mysqli_real_escape_string($con,$_POST['add']);
 $qua = mysqli_real_escape_string($con,$_POST['qua']);
 $course = mysqli_real_escape_string($con,$_POST['course']);
 
   $insert_info = "INSERT INTO contact (con_name, con_mail, con_mobile, con_add, con_qua, con_course) VALUES ('$name', '$mail', '$mobile', '$add', '$qua', '$course')";
   $insert_data = mysqli_query($con,$insert_info);
    
    if($insert_info){
            echo "<script>alert('Your Message send successfully to Vinay Computers Degloor')</script>";
            
        }
  

}

?>