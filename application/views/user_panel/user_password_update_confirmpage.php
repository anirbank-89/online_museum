<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PASSWORD CONFIRM</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/user_change.css?a=<?php echo time();?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/user_homepage.css?a=<?php echo time();?>">
<script type="text/javascript" src="<?php echo base_url();?>js_libraries/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js_libraries/jcanvas.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/user_change.js?a=<?php echo time();?>"></script>
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
    
<!--------------------------------------------------------------------->
                          <!-- horizontal Navigation Bar -->
<!--------------------------------------------------------------------->

  <div id="topnav_container" style="background-color:green;height:53px;position:sticky;top:0%;z-index:100">
    <div id="topnav">
      <ul>
      <li id="menu_button"><a style="cursor:pointer;">MENU</a></li>
      <li>
        <a href="<?php echo base_url().'index.php/MuseumController/display_user_data'?>">HOME</a>
      </li>
      </ul>
    </div>
  </div>

<!-- ----------------------------------------------------------------- -->
                          <!--PASSWORD CHANGE CONFIRM-->
<!-- ----------------------------------------------------------------- -->

<form method="post" name="form">
  <div id="change_container">
    <div id="change_section">
      <div id="row1">
        <div id="col1"></div>
        <div id="col2"></div>
      </div>
      <div id="row2">
        <div id="col1">
          <label>Enter New Password : </label>
        </div>
        <div id="col2">
          <input type="password" name="new_password" onkeyup="fun_p()">&emsp;<input type="checkbox" name="check3"><label id="show_hide3">show</label>
        </div>
      </div>
      <div id="row3">
        <div id="col3">
          <label id="error_password"></label><label id="success_password"></label>
        </div>
      </div>
      <div id="row4">
        <div id="col1">
          <label>Enter Confirm Password : </label>
        </div>
        <div id="col2">
          <input type="password" name="confirm_password">&emsp;<input type="checkbox" name="check4"><label id="show_hide4">show</label>
        </div> 
      </div>
      <div id="row5">
        <div id="col1"> 
        </div>
        <div id="col2">
          <input type="submit" name="submit" value="CHANGE" onclick="return fun_p(),fun2()">
        </div> 
      </div>
    </div>
  </div>
</form>

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
<!-- ----------------------------------------------------------------- -->
                          <!--USER MENU-->
<!-- ----------------------------------------------------------------- -->
<?php

foreach ($data as $row) {


  ?>
  <div id="menu_container">   
    <div id="menu_section">
      <div id="user_photo_container">
        <div id="user_photo">
          <img src="<?php echo base_url().$row->picsource?>" alt="user photo" title="user photo">
        </div>
      </div>
      <div id="user_name">
        <label><?php echo $row->name?></label>
      </div>
      <div id="user_email">
        <label><?php echo $row->email?></label>
      </div>
      <div id="user_email_change">
        <label><b><a href="user_email_update_data?id=<?php echo $row->id?> & email=<?php echo $row->email?>">CHANGE &#8594;</a></b></label>
      </div>
      <div id="user_udpdate_profile">
        <label id="update_personal_informations">UPDATE PERSONAL INFORMATION</label>
      </div>
      <div id="pop_up_update_menu_container">
        <div id="pop_up_update_menu">
          <div id="pop_up_update_col"><label><a href="user_update_data?id=<?php echo $row->id?> & email=<?php echo $row->email?>">Update Profile</a></label></div>
          <div id="pop_up_update_col"><label><a href="user_email_update_data?id=<?php echo $row->id?> & email=<?php echo $row->email?>">Update Email</a></label></div>
          <div id="pop_up_update_col"><lable><a href="user_password_update_data?id=<?php echo $row->id?> & email=<?php echo $row->email?>">Update Password</a></lable></div>
        </div>
      </div>
      <div id="user_promotion">
        <label><a href="#">PROMOTE TO PAID VERSION  &#8594;</a></label>
      </div>
      <div id="user_logout">
        <label><a href="<?php echo base_url().'index.php/MuseumController/user_logout_data'?>">LOG OUT</a></label>
      </div>
      <div id="user_close_window">
        <button id="close_window_button">CLOSE</button>
      </div>
    </div>
</div>


  <?php
}


?>



<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->

</body>
</html>

