<?php
require_once('includes/db.php'); 

function carosoul($img1,$img2,$img3,$img4,$img5){
    
    
 echo "  
<div  style='padding-top:70px;'>
  <section>
    <div class='carousel slide' id='screenshorcarousel' data-ride='carousel'>
      <ol class='carousel-indicators'>
        <li data-target='#screenshorcarousel' data-slide-to='0' class='active'></li>
        <li data-target='#screenshorcarousel' data-slide-to='1'></li>
        <li data-target='#screenshorcarousel' data-slide-to='2'></li>
        <li data-target='#screenshorcarousel' data-slide-to='3'></li>
        <li data-target='#screenshorcarousel' data-slide-to='4'></li>
        
      </ol>
      <div class='carousel-inner'>
        <div class='item active'><img src='img/$img1' class='img-responsive'/></div>
        <div class='item'><img src='img/$img2' class='img-responsive'/></div>
        <div class='item'><img src='img/$img3' class='img-responsive'/></div>
        <div class='item'><img src='img/$img4' class='img-responsive'/></div>
        <div class='item'><img src='img/$img5' class='img-responsive'/> </div>
        
      </div>
      <a href='#screenshorcarousel' class='left carousel-control' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a><a href='#screenshorcarousel' class='right carousel-control' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a></div>
  </section>
</div>
<hr/>";
}


?>