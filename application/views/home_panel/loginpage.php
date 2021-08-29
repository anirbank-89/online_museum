<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LOGINPAGE</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/loginpage.css?a=<?php echo time();?>">
<script type="text/javascript" src="<?php echo base_url();?>js_libraries/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js_libraries/jcanvas.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/loginpage.js?a=<?php echo time();?>"></script>
</head>
<body bgcolor="">

<!--------------------------------------------------------------------->
                          <!-- Header -->
<!--------------------------------------------------------------------->

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
     <!-- <div id="museum_booking">
       <button onclick="fun()">BOOK TICKET</button>
     </div> -->
  </div>

  <!-- <script type="text/javascript">
    function fun()
    {
      alert("Please log in first");
      window.location.href="";
    }
  </script> -->
<!--------------------------------------------------------------------->
                          <!-- horizontal Navigation Bar -->
<!--------------------------------------------------------------------->

  <div id="topnav_container" style="background-color:green;height:53px;position:sticky;top:0%;z-index:100">
    <div id="topnav">
      <ul>
      <li>
        <a href="<?php echo base_url().'index.php/MuseumController/homepage'?>">HOME</a>
      </li> 
      <li id="about_list">
        <a id="about_link">ABOUT</a>
        <div id="about_div">
          <a href="<?php echo base_url().'index.php/MuseumController/about_us_data'?>">About us</a>
          <a href="<?php echo base_url().'index.php/MuseumController/privacy_policy_data'?>">Privacy Policy</a>
        </div>
      </li>
      <li id="registration_list">
        <a id="registration_link" href="<?php echo base_url().'index.php/MuseumController/user_register_data'?>">REGISTRATION</a>
      </li>
      <li id="view_list">
        <a id="view_link">VIEW</a>
        <div id="view_div">
          <a>Art Gallery</a>
          <a>Bird Gallery</a>
          <a>Animals Gallery</a>
          <a>Painting Gallery</a>
          <a>Egypt Gallery</a>
          <a>Ancient Fossil Gallery</a>
        </div>
      </li>
      <li><a href="<?php echo base_url().'index.php/MuseumController/display_notice_data'?>">NOTICE</a></li>
      <li id="contact_list">
        <a id="contact_link" href="<?php echo base_url().'index.php/MuseumController/contact_data'?>">CONTACT  US</a>
      </li>
      <li id="active" style="background-color:lightgreen;">
        <a id="log_in" href="<?php echo base_url().'index.php/MuseumController/logindata'?>">LOG IN</a>
      </li>
      </ul>
    </div>
  </div>


<!--------------------------------------------------------------------->
                          <!-- BACKGROUND SLIDER  -->
<!--------------------------------------------------------------------->

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

<!--------------------------------------------------------------------->
                          <!-- ALPONA -->
<!--------------------------------------------------------------------->

    <div id="after_background_img">
        <div>
            <canvas id="alpona9"></canvas>
            <canvas id="alpona10"></canvas>
            <canvas id="alpona11"></canvas>
            <canvas id="alpona12"></canvas>
        </div>
     </div>


<!--------------------------------------------------------------------->
                          <!--BRIEF INTRODUCTION-->
<!--------------------------------------------------------------------->

    <div id="white_space" style="height:100px;width:100%;"></div>
    <div id="brief_intro" style="background-color:rgba(235,235,235,0.5);height:500px;width:100%;display:flex;align-items:center;justify-content: center;">
      <div id="brief_intro_msg" style="background-color:;height:400px;width:80%;">
        <label style="background-color:rgba(0,0,0,0.3);font-size:200%;color:rgba(0,0,0,0.8);font-weight:bold;padding:20px">A Brief Disscussion</label><br><br><br><br><br>
        <label style="font-size:110%;color:rgba(0,0,0,0.8);">The purpose of modern museums is to collect, preserve, interpret, and display objects of artistic, cultural, or scientific significance for the education of the public. From a visitor or community perspective, the purpose can also depend on one's point of view. A trip to a local history museum or large city art museum can be an entertaining and enlightening way to spend the day. To city leaders, a healthy museum community can be seen as a gauge of the economic health of a city, and a way to increase the sophistication of its inhabitants. To a museum professional, a museum might be seen as a way to educate the public about the museum's mission, such as civil rights or environmentalism. Museums are, above all, storehouses of knowledge. In 1829, James Smithson's bequest, that would fund the Smithsonian Institution, stated he wanted to establish an institution "for the increase and diffusion of knowledge"</label>
      </div>
    </div>


<!--s------------------------------------------------------------------->
                          <!--LOGIN PAGE-->
<!---------------------------------------------------------------------->

    <div id="white_space_heading">
      <label>LOGIN PAGE</label>
    </div>

    <div id="login_container">
      <div id="login_panel">
        <!--------------------------------------->
        <div id="login_as">
          <div id="login_as_">
            <label>Login AS </label>
          </div>
          <div id="login_as_button">
            <div id="buttons">
              <div id="col1"><label>USER</label></div><div id="col2"><input type="radio" name="radio" id="user"></div>
              <div id="col11"><label>PAID USER</label></div><div id="col2"><input type="radio" name="radio" id="paid_user"></div>
            </div>

          </div>
        </div>
        <!--------------------------------------->
        <div id="login">
          <div id="logo"><canvas id="login_logo"></canvas></div>
          <div id="login_section">
            <!--------------for normal user ------------->
            <form method="post" action="<?php echo base_url().'index.php/MuseumController/user_login_data'?>">
            <div id="unpaid_user_div" style="background-color:;height:275px;width:100%">
                <div id="row1">
                  <div id="col3"><input type="email" name="email" placeholder="email id ...."></div>
                </div>
                <div id="row4">
                  <div id="col33"><input type="password" name="password" placeholder="password ...."><canvas id="close_eye1"></canvas><canvas id="open_eye1"></canvas></div>
                </div>
                <div id="row5">
                  <div id="col333"><input type="submit" name="submit" value="GO"></div>
                </div>
                <div id="row6">
                  <div id="col3333">New user ? go for &#8594; <a href="<?php echo base_url().'index.php/MuseumController/user_register_data'?>">New Registration </a></div>
                </div>
            </div>
            </form>
            <!--------------for paid user ------------->
            <form method="post" action="<?php echo base_url().'index.php/MuseumController/paiduser_login_data'?>">
            <div id="paid_user_div" style="background-color:;height:275px;width:100%">
                <div id="row1">
                  <div id="col3"><input type="email" name="email" placeholder="email id ...."></div>
                </div>
                <div id="row2">
                  <div id="col3"><input type="text" name="paid_id" placeholder="paid user id ...."></div>
                </div>
                <div id="row4">
                  <div id="col33"><input type="password" name="password" placeholder="password ...."><canvas id="close_eye2"></canvas><canvas id="open_eye2"></canvas></div>
                </div>
                <div id="row5">
                  <div id="col333"><input type="submit" name="submit" value="GO"></div>
                </div>
                <div id="row6">
                  <div id="col3333"><a href="#">New Registration &#8594;</a></div>
                </div>
            </div>
          </form>
          <!--------------------->
          </div>
        </div>

      </div> 
    </div>
    

<!--------------------------------------------------------------------->
                          <!--Before Gallery-->
<!--------------------------------------------------------------------->

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
          <div><a>Click To View</a></div>
        </div>
        <div id="animals_gallery">
          <img src="<?php echo base_url()?>pictures/homepage_photos/gallery_animal.webp">
          <div><a>Click To View</a></div>
        </div>
        <div id="birds_gallery">
          <img src="<?php echo base_url()?>pictures/homepage_photos/gallery_bird.jpg">
          <div><a>Click To View</a></div>
        </div>
      </div>
      <div id="gallery_row2">
        <div id="egypt_gallery">
          <img src="<?php echo base_url()?>pictures/homepage_photos/gallery_egypt.jpg">
          <div><a>Click To View</a></div>
        </div>
        <div id="fossils_gallery">
          <img src="<?php echo base_url()?>pictures/homepage_photos/gallery_fossil.jpg">
          <div><a>Click To View</a></div>
        </div>
        <div id="insects_gallery">
          <img src="<?php echo base_url()?>pictures/homepage_photos/painting.jpg">
          <div><a>Click To View</a></div>
        </div>
      </div>
    </div>


<!-- ----------------------------------------------------------------- -->
                          <!--Footer-->
<!-- ----------------------------------------------------------------- -->
    <!-- thank you to the user for him/her visit -->
    <div style="background-color:rgba(235,235,250,0.8);width:100%;height: 100px;display:flex;align-items:center;justify-content:center">
      <label style="font-size:120%;color:rgba(23,24,20,0.9);">THANK YOU SO MUCH FOR YOUR TIME</label>
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
    <div id="footer_container">
      <div id="visit_number">
        <label style="font-size:150%">Views : <?php echo $_SESSION['views']?></label>
      </div>
      <!----------------->
      <div id="footer_logo">
        <div>
          <label>Our Museum | 365 </label>  
        </div>
        <div>
          <img src="<?php echo base_url()?>pictures/homepage_photos/museum_logo.png">  
        </div>   
      </div>
      <div id="footer_link">
        <div>
          <label>Important Links</label>  
        </div>
        <div> 
          <label><a href="<?php echo base_url().'index.php/MuseumController/privacy_policy_data'?>">Privacy Policy</a></label>
          <br><br>
          <label><a href="<?php echo base_url().'index.php/MuseumController/display_notice_data'?>">Notice</a></label>
          <br><br>
          <label><a href="<?php echo base_url().'index.php/MuseumController/contact_data'?>">contact</a></label>
          <br><br>
          <label><a href="<?php echo base_url().'index.php/MuseumController/about_us_data'?>">About Us</a></label>
          <br><br>
          <label><a href="<?php echo base_url().'index.php/MuseumController/user_register_data'?>">Registration Page</a></label>
        </div> 
      </div>
      <div id="footer_address">
        <div>
          <label>Be in Touch</label>  
        </div>
        <div> 
          <label><b>ADDRESS :</b> 76 Bidhan Sarani , Near Kolkata <br>WB. College Street ; kol : 700067</label>
          <br><br><br>
          <label><b>PHONE : </b> (033)2234-5637</label>
          <br><br><br>
          <label><b>EMAIL : </b> museum365.php@gmail.com</label>  
        </div> 
      </div>
      <div id="footer_social_media"> 
        <div>
          <label>Follow Us On Instagram</label>  
        </div>
        <div> 
          <a href="#"><img src="<?php echo base_url()?>pictures/homepage_photos/follow.gif"></a> 
        </div> 
      </div>
    </div>

    <div id="footer2">
       <label>@2021 - Museum | 365 - All Rights Reserved | </label>
       <label>Powered By PHP GROUP</label>
    </div>
<!------------------------------->
</div>

<!--------------------------------------------------------------------->
<!---------------------------------------------------------------------> 
<!--------------------------------------------------------------------->
<!---------------------------------------------------------------------> 



<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->



</body>
</html>


