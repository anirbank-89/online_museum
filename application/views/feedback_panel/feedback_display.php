<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FEEDBACK</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/user_homepage.css?a=<?php echo time();?>">
<script type="text/javascript" src="<?php echo base_url();?>js_libraries/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js_libraries/jcanvas.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/user_homepage.js?a=<?php echo time();?>"></script>
</head>
<body bgcolor="">


<!-- ----------------------------------------------------------------- -->
                          <!-- Header -->
<!-- ----------------------------------------------------------------- -->

  <div id="header_container">
     <div id="museum_logo">
       <img src="<?php echo base_url()?>pictures/homepage_photos/museum_logo.png">
     </div>
     <div id="museum_name">
       <label><b>MUSEUM | 365</b></label>
     </div>
     <div id="museum_address">
       <label><b>76 Bidhan Sarani , near Kolkata <br>WB. College Street ; kol : 700067</b></label>
     </div>
     <div id="museum_booking">
     </div>
     <div id="museum_time">
       <label><b><br><br><br>Wednesday to Monday <br>10:00 AM to 6:00 PM</b></label>
     </div>
  </div>
    
<!-- ----------------------------------------------------------------- -->
                          <!-- horizontal Navigation Bar -->
<!-- ----------------------------------------------------------------- -->

  <div id="topnav_container" style="background-color:green;height:53px;position:sticky;top:0%;z-index:100">
    <div id="topnav">
      <ul>
      <li>
        <a href="<?php echo base_url().'index.php/MuseumController/display_user_data'?>">HOME</a>
      </li> 
      </ul>
    </div>
  </div>

<!-- ----------------------------------------------------------------- -->
                          <!--FEEDBACK DISPLAY-->
<!-- ----------------------------------------------------------------- -->
<div style="background-color:gray;width:100%;height:30px;"></div>

<?php 

  date_default_timezone_set("Asia/Calcutta");
	$live_timestamp=time();
	// echo $live_timestamp;
	$live_years=date("Y",$live_timestamp);
?>

<div id="feedback_container">
	<div id="feedback_section">
    <div id="feedback_container2">
<?php

    foreach ($data as $row) {
    	?>
    	<div id="feedback_panel">
			<div id="row1">
				<div id="feedbacker_img">
					<img src="<?php echo base_url().$row->picsource?>">
				</div>
				<div id="feedbacker_name">
					<label><?php echo $row->name?></label>
				</div>
				<div id="feedback_time">
					<label>
						<?php 
	   		 				$feedback_time=$row->feedback_time;
	   		 				$feedback_time_timestamp=strtotime($feedback_time);
	   		 				$timestamp_difference=($live_timestamp-$feedback_time_timestamp);
	   		 				// echo $timestamp_difference;
	   		 				$seconds=$timestamp_difference;
	   		 				$minutes=(int)(($timestamp_difference/60));
	   		 				$hours=(int)(($timestamp_difference/3600));
	   		 				$days=(int)(($timestamp_difference/86400));
	   		 				// --------------------------------------
	   		 				$months=date("M d",$feedback_time_timestamp);
	   		 				// echo $months;
             				$years=date("Y",$feedback_time_timestamp);
             				// echo $years;
             				$date=date("M d,Y",$feedback_time_timestamp);

	   						if($live_years==$years)
	   						{
	   							if($timestamp_difference<=60)
	   							{
	   								if($seconds==1)
	   								{
                       echo $seconds." second ago";
	   								}
	   								else
	   								{
	   									echo $seconds." seconds ago";
	   								}	
	   							}
	   							if($timestamp_difference>60 && $timestamp_difference<=3600)
	   							{
              			if($minutes==1)
	   								{
                        echo $minutes." minute ago";
	   								}
	   								else
	   								{
	   									echo $minutes." minutes ago";
	   								}
	   							}
	   							if($timestamp_difference>3600 && $timestamp_difference<=86400)
	   							{
              			if($hours==1)
	   								{
                      echo $hours." hour ago";
	   								}
	   								else
	   								{
	   									echo $hours." hours ago";
	   								}
	   							}
	   							if($timestamp_difference>86400 && $timestamp_difference<=604800)
	   							{
              				if($days==1)
	   								{
                      echo $days." day ago";
	   								}
	   								else
	   								{
	   									echo $days." days ago";
	   								}
	   							}
	   							if($timestamp_difference>604800)
	   							{
              						echo $months;
	   							}
        				}
        				else
       					{
            				echo $date;
        				}
	  
	   					?>
					</label>
				</div>	
			</div>
			<div id="row2">
				<div id="feedback_msg">
					<div>
						<label><?php echo $row->feedback_msg?></label>
					</div>
				</div>
			</div>
		</div>
		<!-- <div style="background-color:;width:100%;height:10px;"></div> -->
        <div style="background-color:gray;width:100%;height:10px;"></div>
    	<?php
    }

?>
	</div>	
	</div>
</div>


<div style="background-color:gray;width:100%;height:80px;display:flex;align-items:center;justify-content:center;">
	<button id="show_write_feedback">Write A Feedback</button>
</div>
<form method="post" action="<?php echo base_url().'index.php/MuseumController/feedback_data'?>">
<div id="write_feedback" style="background-color:gray;width:100%;height:200px">
	<div style="background-color:;width:100%;height:200px;display:flex;align-items:center;justify-content:center;">
		<textarea style="resize:none;height:80px;width:40%;padding:20px" name="feedback"></textarea>&emsp;
		<input type="submit" name="submit" value="Send">
	</div>
</div>
</form>







<script type="text/javascript">
	

$("document").ready(function(){

  $("#show_write_feedback").click(function(){
   $("#write_feedback").toggle(function(){
   $("#write_feedback").animate({
    display:'block',
    opacity:'1',
    backgroundColor: '',
    
   });
  });
 });
});

</script>



<style type="text/css">

	body{margin: 0;}

	#feedback_container{background-color:gray;width:100%;display:flex;align-items:center;justify-content:center;height:700px;}
	#feedback_container2{background-color:;width:100%;height:700px;overflow:auto}
	#feedback_section{background-color:white;width:60%;}
	#feedback_panel{background-color:;width:100%;height:140px;box-shadow:-7px 0 5px 0 rgba(0,0,0,0.7)}
  #row1{background-color:;height:40px;width:100%;}
  #feedbacker_img{background-color:;width:10%;float:left;height:40px;display:flex;align-items:center;justify-content:cent}
  #feedbacker_img img{height:35px;width:35px;border-radius:50%;}
  #feedbacker_name{background-color:;width:60%;float:left;height:40px;display:flex;align-items:center;}
  #feedback_time{background-color:;width:28%;float:left;height:40px;display:flex;align-items:center;justify-content:center}
  #feedback_time label{font-size:80%;width:100%;background-color:;text-align:right;float:right;}
  #row2{background-color:;height:100px;width:100%;}
  #feedback_msg{background-color:rgba(0,0,0,0.2);width:70%;float:left;max-height:100px;border-radius:100px;display:flex;align-items:center;justify-content:center;}
  #feedback_msg div{background-color:;width:80%;max-height:80px;overflow:auto;}
  #feedback_action{background-color:;width:30%;float:left;height:80px;display:flex;align-items:center;justify-content:center;}
  #feedback_panel button{background-color:rgba(0,0,0,0.1);border:1px solid rgba(0,0,0,0.3);}
  #write_feedback{display:none;opacity:;}
	
</style>


<!-- ----------------------------------------------------------------- -->
                          <!--Before Gallery-->
<!-- ----------------------------------------------------------------- -->

    <div id="before_gallery">
        <div>
            <label>MUSEUM VIEW</label>
        </div>
        <div>
            <label>GALLERY</label>
        </div>
        <div>
            <canvas id="alpona5"></canvas>
            <canvas id="alpona6"></canvas>
            <canvas id="alpona7"></canvas>
            <canvas id="alpona8"></canvas>
        </div>
    </div>

<!-- ----------------------------------------------------------------- -->
                          <!--Gallery-->
<!-- ----------------------------------------------------------------- -->

    <div id="gallery_container">
      <div id="gallery_row1">
        <div id="arts_gallery">
          <img src="<?php echo base_url()?>pictures/homepage_photos/gallery_art.jpg">
          <div><a href="<?php echo base_url().'index.php/MuseumController/display_arts_data'?>">Click To View</a></div>
        </div>
        <div id="animals_gallery">
          <img src="<?php echo base_url()?>pictures/homepage_photos/gallery_animal.webp">
          <div><a href="<?php echo base_url().'index.php/MuseumController/display_animals_data'?>">Click To View</a></div>
        </div>
        <div id="birds_gallery">
          <img src="<?php echo base_url()?>pictures/homepage_photos/gallery_bird.jpg">
          <div><a href="<?php echo base_url().'index.php/MuseumController/display_birds_data'?>">Click To View</a></div>
        </div>
      </div>
      <div id="gallery_row2">
        <div id="egypt_gallery">
          <img src="<?php echo base_url()?>pictures/homepage_photos/gallery_egypt.jpg">
          <div><a href="<?php echo base_url().'index.php/MuseumController/display_egypt_data'?>">Click To View</a></div>
        </div>
        <div id="fossils_gallery">
          <img src="<?php echo base_url()?>pictures/homepage_photos/gallery_fossil.jpg">
          <div><a href="<?php echo base_url().'index.php/MuseumController/display_fossil_data'?>">Click To View</a></div>
        </div>
        <div id="insects_gallery">
          <img src="<?php echo base_url()?>pictures/homepage_photos/painting.jpg">
          <div><a href="<?php echo base_url().'index.php/MuseumController/display_painting_data'?>">Click To View</a></div>
        </div>
      </div>
    </div>


<!-- ----------------------------------------------------------------- -->
                          <!--Footer-->
<!-- ----------------------------------------------------------------- -->
    
    <!-- thank you to the user for him/her visit -->
    <div style="background-color:rgba(235,235,250,0.8);width:100%;height: 100px;display:flex;align-items:center;justify-content:center;">
    </div>
    <!-- ------------------------------>
    <?php
    if(isset($_SESSION['views']))
    {
      $_SESSION['views']=$_SESSION['views']+1;
    }
    else
    {
      $_SESSION['views']=1;
    }
    ?>
    <div id="visit_number" style="background-color:rgba(0,0,0,0.6);height:80px;display:flex;align-items:center;justify-content:center;">
        <label style="font-size:150%;color:white">Views : <?php echo $_SESSION['views']?></label>
    </div>
      <!----------------->

    <div id="footer2">
       <label>@2021 - Museum | 365 - All Rights Reserved | </label>
       <label>Powered By PHP GROUP</label>
    </div>

<!--------------------------------------------------------------------->
<!---------------------------------------------------------------------> 
<!--------------------------------------------------------------------->
<!---------------------------------------------------------------------> 




</body>
</html>




