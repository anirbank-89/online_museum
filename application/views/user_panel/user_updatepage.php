<!DOCTYPE html>
<html>
<head>
<title>PROFILE UPDATION</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/registration.css?a=<?php echo time()?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/user_homepage.css?a=<?php echo time();?>">
<script type="text/javascript" src="<?php echo base_url()?>js_libraries/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/registration.js?a=<?php echo time()?>"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/user_homepage.js?a=<?php echo time();?>"></script>
</head>
<body>

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
                          <!-- BACKGROUND SLIDER  -->
<!-- ----------------------------------------------------------------- -->

    <div id="background_slider">
      <div id="div1">
        <img id="img1" src="<?php echo base_url()?>pictures/homepage_photos/background_image_slider_img1.jpg">
      </div>
      <div id="div2">
        <img id="img2" src="<?php echo base_url()?>pictures/homepage_photos/background_image_slider_img2.jpg">
      </div>
      <div id="div3">
        <img id="img3" src="<?php echo base_url()?>pictures/homepage_photos/background_image_slider_img3.jpg">
      </div>
    </div>

<!-- ----------------------------------------------------------------- -->
                          <!-- ALPONA -->
<!-- ----------------------------------------------------------------- -->

    <div id="after_background_img">
        <div>
            <canvas id="alpona9"></canvas>
            <canvas id="alpona10"></canvas>
            <canvas id="alpona11"></canvas>
            <canvas id="alpona12"></canvas>
        </div>
     </div>


<!-- ----------------------------------------------------------------- -->
                          <!--BRIEF INTRODUCTION-->
<!-- ----------------------------------------------------------------- -->
    <div id="white_space" style="height:100px;width:100%;"></div>
    <div id="brief_intro" style="background-color:rgba(235,235,235,0.5);height:500px;width:100%;display:flex;align-items:center;justify-content: center;">
      <div id="brief_intro_msg" style="background-color:;height:400px;width:80%;">
        <label style="background-color:rgba(0,0,0,0.3);font-size:200%;color:rgba(0,0,0,0.8);font-weight:bold;padding:20px">WELCOME</label><br><br><br><br><br>
        <label style="font-size:110%;color:rgba(0,0,0,0.8);">The purpose of modern museums is to collect, preserve, interpret, and display objects of artistic, cultural, or scientific significance for the education of the public. From a visitor or community perspective, the purpose can also depend on one's point of view. A trip to a local history museum or large city art museum can be an entertaining and enlightening way to spend the day. To city leaders, a healthy museum community can be seen as a gauge of the economic health of a city, and a way to increase the sophistication of its inhabitants. To a museum professional, a museum might be seen as a way to educate the public about the museum's mission, such as civil rights or environmentalism. Museums are, above all, storehouses of knowledge. In 1829, James Smithson's bequest, that would fund the Smithsonian Institution, stated he wanted to establish an institution "for the increase and diffusion of knowledge"</label>
      </div>
    </div>


<!-- ----------------------------------------------------------------- -->
                          <!--UPDATION PAGE-->
<!-- ----------------------------------------------------------------- -->
<?php
foreach ($data as $row) {
  ?>
    <div id="white_space_heading" style="">
      <label>USER UPDATION PAGE</label>
</div>
<div id="registration_container">
  <div id="container">
  <div id="row" style="background-color:;height:800px">
  <fieldset>
  <legend>Updation</legend>
  <div style="background-color:;width:90%;height:450px">
  <form method="post" enctype="multipart/form-data" name="form">

    <div id="row1">
      <div id="col1">Enter Name :</div>
      <div id="col2"><input type="text" name="name2" onkeyup="fun1u()" value="<?php echo $row->name?>"></div>
      <div id="col3"><span id="span1"></span></div>
    </div>

    <div id="row3">
      <div id="col1">Enter Mobile No :</div>
      <div id="col2"><input type="number" name="mobile2" onkeyup="fun4u()"  value="<?php echo $row->mobile?>"></div>
      <div id="col3"><span id="span5"></span></div>
    </div>

    <div id="row4">
      <div id="col1">Enter Address:</div>
      <div id="col2"><input type="text" name="address2"  value="<?php echo $row->address?>"></div>
      <div id="col3"><span></span></div>
    </div>

    <div id="row5">
      <div id="col1">Gender :</div>
      <div id="col2"><input type="radio" name="gender2" value="male"
                                          <?php
                                            if($row->gender=='male')
                                          {
                                             echo 'checked';
                                          }
                                          ?>>Male 
                   <input type="radio" name="gender2" value="female"
                                          <?php
                                            if($row->gender=='female')
                                          {
                                             echo 'checked';
                                          }
                                          ?>>Female
                   <input type="radio" name="gender2" value="others"
                                          <?php
                                            if($row->gender=='others')
                                          {
                                             echo 'checked';
                                          }
                                          ?>>Others</div>
      <div id="col3"><span></span></div>
    </div>

    <div id="row6">
      <div id="col1">Upload Photo :</div>
      <div id="col2"><input type="file" name="image2"><img height="100" width="100" src="<?php echo base_url().$row->picsource?>"></div>
      <div id="col3"><span></span></div>
    </div>

    <div id="row8">
      <div id="col1"><input type="reset" name="reset" value="Reset"></div>
      <div id="col2"><input type="submit" name="submit" value="Click To Register" onclick="return fun1u(),fun4u(),fun_u()"></div>
    </div>
  
    
  </form>
  </div>
    </fieldset>
  </div>
</div>
    
</div>
<?php
}
?>

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
