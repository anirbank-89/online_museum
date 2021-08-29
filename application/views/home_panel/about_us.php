<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ABOUT US</title>
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
        <a href="<?php echo base_url().'index.php/MuseumController/homepage'?>">HOME</a>
      </li> 
      </ul>
    </div>
  </div>

<!--------------------------------------------------------------------->
                          <!--BRIEF INTRODUCTION-->
<!--------------------------------------------------------------------->

    <div id="white_space" style="height:100px;width:100%;"></div>
    <div id="brief_intro" style="background-color:rgba(235,235,235,0.5);height:500px;width:100%;display:flex;align-items:center;justify-content: center;">
      <div id="brief_intro_msg" style="background-color:;height:400px;width:80%;">
        <label style="background-color:rgba(0,0,0,0.3);font-size:200%;color:rgba(0,0,0,0.8);font-weight:bold;padding:20px">About Us</label><br><br><br><br><br>
        <label style="font-size:110%;color:rgba(0,0,0,0.8);">The purpose of modern museums is to collect, preserve, interpret, and display objects of artistic, cultural, or scientific significance for the education of the public. From a visitor or community perspective, the purpose can also depend on one's point of view. A trip to a local history museum or large city art museum can be an entertaining and enlightening way to spend the day. To city leaders, a healthy museum community can be seen as a gauge of the economic health of a city, and a way to increase the sophistication of its inhabitants. To a museum professional, a museum might be seen as a way to educate the public about the museum's mission, such as civil rights or environmentalism. Museums are, above all, storehouses of knowledge. In 1829, James Smithson's bequest, that would fund the Smithsonian Institution, stated he wanted to establish an institution "for the increase and diffusion of knowledge"</label>
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

