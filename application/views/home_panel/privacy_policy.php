<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PRIVACY POLICY</title>
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
    <div id="brief_intro" style="background-color:rgba(235,235,235,0.5);height:1000px;width:100%;display:flex;align-items:center;justify-content: center;">
      <div id="brief_intro_msg" style="background-color:;height:800px;width:80%;">
        <label style="background-color:rgba(0,0,0,0.3);font-size:200%;color:rgba(0,0,0,0.8);font-weight:bold;padding:20px">Privacy Policy</label><br><br><br><br><br>
        <label style="font-size:110%;color:rgba(0,0,0,0.8);">We collect the information you provide us through the Site and offline, including your name, address, email address, phone number, date of birth, employment information, financial information, social media information, and any other information you choose to provide.  We collect this information when you create a profile on the Site, submit a membership application, apply for job opportunities, donate to AAM, complete online forms, or interact with us for any other purpose.  If you create an account on our Site, we collect the username and password associated with your account.We may also gather technical information including, but not limited to, browser type, IP address, pages visited and other activities on the Site, device type, and time and date of visit.  We may also receive information about your current location if permitted by your browser settings.  We may use cookies or similar technology to collect such information.We process your personal information, including for the following purposes:<br><br>
        1. To communicate with our members;<br><br>
        2. To fulfill member benefits and provide sponsorship opportunities;<br><br>
        3. To confirm and process online transactions;<br><br>
        4. To create mailing lists, including mailing lists for purchase;<br><br>
        5. To improve the Site, including to improve the features, tools, functionality, and content available on the Site and through AAM;<br><br>
        6. To comply with the law; and/or<br><br>
        As otherwise disclosed at the time personal information is collected.
        Where we intend to process your personal information for a purpose other than the purpose for which it was collected, we will provide you with information regarding the purpose for the processing, as well as other relevant information, prior to processing your personal information for the new purpose.</label>
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

