<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-state=1"/>
<title>Login Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body style="background-color:#FF3;">

<!--<img src="../img/1.jpg" class="img-responsive img-thumbnail" >-->
<div class="col-md-4 col-sm-4 col-md-offset-4" style="padding-top:150px;">
<h3 class="text-center text-danger">Login Area for Only Santosh & Vinay</h3>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title"> Log In</h3>
    </div>
    <div class="panel-body">
    <form method="post" action="login.php">
      <label>Name:</label>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Username" 					 						 name="user_name"/>
      </div>
      <label>Password:</label>
      <div class="input-group">
        <input type="password" class="form-control" placeholder="Password" 	 							 name="user_pass">
      </div>
     
      <br />
      <input type="submit" name="login" value="Submit" class="btn btn-danger pull-right">
     
      <div><a href="#">Register Now!</a></div>
      <div><a href="#">Forget Password</a> </div>
      
      </form>
      
    </div>
  </div><div class="text-center btn-default"><a href="../../index.php">Back To Main Page</a> </div>
</div>

</body>
</html>

<?php include('/../../includes/db.php');
if(isset($_POST['login'])){
	 $user_name = mysqli_real_escape_string($con,$_POST['user_name']);
	 $user_pass = mysqli_real_escape_string($con,$_POST['user_pass']);
	
	$admin_query="select * from admin_login where user_name='$user_name' AND 
	user_pass='$user_pass'";
	
	
	
	 $run = mysqli_query($con,$admin_query);
	if(mysqli_num_rows($run)>0){
	$_SESSION['user_name']=$user_name;
	echo "<script>window.open('index.php','_self')</script>";
	}
	else {
		echo "<script>alert('UserName or Password is Incorrect')</script>";
		
		}
		}

?>