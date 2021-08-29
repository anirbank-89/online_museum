<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BIRD GALLERY</title>
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

<!--------------------------------------------------------------------->
                          <!--Birds Gallery-->
<!--------------------------------------------------------------------->
    <div id="brief_intro" style="background-color:rgba(235,235,235,0.5);height:2000px;width:100%;display:flex;align-items:center;justify-content: center;">
      <div id="brief_intro_msg" style="background-color:;height:1800px;width:70%;overflow:auto;">
<?php
foreach ($data as $row) {
  ?>
    
        <div style="background-color:;width:100%;height:500px;">
        	<img src="<?php echo base_url().$row->picsource?>" style="width:100%;height:500px;">
        </div>
        <div style="background-color:;width:100%;height:150px;">
        	<div style="background-color:white;width:100%;height:50px;display:flex;align-items:center;justify-content: center;">
        		<label>Name : <?php echo $row->name?></label>
        	</div>
        	<div style="background-color:;width:100%;height:50px;display:flex;align-items:center;justify-content: center;">
        		<label>Date of Discovery : <?php echo $row->discovery_date?></label>
        	</div>
            <div style="background-color:white;width:100%;height:50px;display:flex;align-items:center;justify-content: center;">
            	<label>view Place : <?php echo $row->discovery_place?></label>
            </div>
        </div>
      
    <?php
    }

?>
        </div>
    </div>
    <div id="white_space" style="height:100px;width:100%;"></div>




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
<!------------------------------->


<!--------------------------------------------------------------------->
<!---------------------------------------------------------------------> 
<!--------------------------------------------------------------------->
<!---------------------------------------------------------------------> 




<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->


</body>
</html>

