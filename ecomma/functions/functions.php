<?php include('/../../includes/db.php'); ?>
<?php
//$con= mysqli_connect("localhost","root","","ecommerce");

// Geting the Categories

function getCats(){
	global $con;
	$get_cats = "select * from categories ORDER BY cat_title ASC";
	$run_cats = mysqli_query($con,$get_cats);
	while ($row_cats = mysqli_fetch_array($run_cats)){
		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];
		$cat_item = $row_cats['cat_item'];
		echo "<li class='list-group-item list-group-item-success'><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
				
		}
	}

// Geting the Brands

function getBrand(){
	global $con;
	$get_brands = "select * from brands ORDER BY brand_title ASC";
	$run_brands = mysqli_query($con,$get_brands);
	while ($row_brands = mysqli_fetch_array($run_brands)){
		$brand_id = $row_brands['brand_id'];
		$brand_title = $row_brands['brand_title'];
		$brand_item = $row_brands['brand_item'];
		echo "<li class='list-group-item list-group-item-success'><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
		
		}
}
//Displaying Products


/*-----------------------*/
//Displaying Catwise Products
function getCatPro(){
	if(isset($_GET ['cat'])){
		$cat_id = $_GET['cat'];
		global $con;
	$get_cat_pro = "select * from products where prouct_cat='$cat_id'";
	$run_cat_pro = mysqli_query($con,$get_cat_pro);
	$count_row = mysqli_num_rows($run_cat_pro);
	if($count_row==0){
	echo"	";	
	}
	else{
	echo "
	
	";	
	}
	
	while($row_cat_pro = mysqli_fetch_array($run_cat_pro)){
	$pro_id = $row_cat_pro['prouct_id'];
	$pro_cat = $row_cat_pro['prouct_cat'];
	$pro_brand = $row_cat_pro['prouct_brand'];
	$pro_title = $row_cat_pro['prouct_title'];
	$pro_price = $row_cat_pro['prouct_price'];
	$pro_desc = $row_cat_pro['prouct_desc'];
	$pro_image = $row_cat_pro['prouct_image'];
	$pro_keywords = $row_cat_pro['prouct_keywords'];
	echo "
    		<tr>
              
              <td width='65%' >$pro_title</td>
              <td width='35%'>$pro_price</td>
            </tr>
  	 ";	
	}
		}
	
}




//--------------------------------------------------

















?>
