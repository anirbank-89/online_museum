<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FEEDBACK EMAIL</title>
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
        <a href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>">HOME</a>
      </li> 
      </ul>
    </div>
  </div>

<!--------------------------------------------------------------------->
                          <!--ADMIN REPLY-->
<!--------------------------------------------------------------------->

    <div id="white_space" style="height:100px;width:100%;"></div>
    <div id="email_container">
      <div style="background-color:;height:1000px;width:80%;">
        <div style="background-color:;width:100%;height:100px;display:flex;align-items:center;justify-content:center;">
        	<label style="font-size:200%;color:rgba(0,0,0,0.7);">EMAIL</label>
        </div>
        <div style="background-color:pink;width:100%;height:900px;display:flex;align-items:center;justify-content:center;">
        	<div style="background-color:white;width:80%;height:800px">
        	<?php
	            foreach ($data as $row) {
                ?>
        		<form method="post">
        		<div id="col1">
        			<label>Feedbacker Name : </label>
        		</div>
        		<div id="col2">
        			<input type="text" name="name" value="<?php echo $row->name?>">
        		</div>
        		<div id="col1">
        			<label>Feedbacker Email Id : </label>
        		</div>
        		<div id="col2">
        			<input type="email" name="email" value="<?php echo $row->email?>">
        		</div>
        		<div id="col1" style="height:150px">
        			<label>Feedbacker Message : </label>
        		</div>
        		<div id="col2" style="height:150px;">
        			<textarea style="resize:none;width:83%;height:100px;"><?php echo $row->feedback_msg?></textarea>
        		</div>
        		<div id="col1">
        			<label>Subject : </label>
        		</div>
        		<div id="col2">
        			<input type="text" name="subject">
        		</div>
        		<div id="col1" style="height:150px;">
        			<label>Body : </label>
        		</div>
        		<div id="col2" style="height:150px;">
        			<textarea style="resize:none;width:83%;height:100px;" name="body"></textarea>
        		</div>
        		<div id="col1" style="height:100px;width:100%;">
        		</div>
        		<div id="col2" style="height:100px;width:100%;">
        			<input type="submit" name="submit" value="Send">
        		</div>
        	    </form>
        	    <?php
            }
            ?>
        	</div>
        </div>
      </div>
    </div>

    <style type="text/css">
    	#email_container{background-color:rgba(235,235,235,0.5);height:1100px;width:100%;display:flex;align-items:center;justify-content: center;}
    	#col1{background-color:;width:40%;float:left;display:flex;align-items:center;justify-content:center;height:100px}
    	#col2{background-color:;width:60%;float:left;display:flex;align-items:center;justify-content:center;height:100px}
    	#col1 label{font-size:130%}
    	#col2 input{padding:10px 10px;width:80%;}
    	input[type=submit]:hover{background-color:lightgreen;border:1px solid white;}
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




<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->


</body>
</html>

