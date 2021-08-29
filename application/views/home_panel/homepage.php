<!DOCTYPE html>
<html>
<head>
<title>MUSEUM | 365</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/homepage.css?a=<?php echo time();?>">
<script type="text/javascript" src="<?php echo base_url();?>js_libraries/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js_libraries/jcanvas.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/homepage.js?a=<?php echo time();?>"></script>
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
    
<!-- ----------------------------------------------------------------- -->
                          <!-- horizontal Navigation Bar -->
<!-- ----------------------------------------------------------------- -->

  <div id="topnav_container" style="background-color:green;height:53px;position:sticky;top:0%;z-index:100">
    <div id="topnav">
      <ul>
      <li style="background-color:lightgreen;">
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
      <li id="active">
        <a id="log_in" href="<?php echo base_url().'index.php/MuseumController/logindata'?>">LOG IN</a>
      </li>
      </ul>
    </div>
  </div>


<!-- ----------------------------------------------------------------- -->
              <!-- Background Image After Header & Intro -->
<!-- ----------------------------------------------------------------- --> 

  <div id="image_container">
    <div id="image">
      <img src="<?php echo base_url()?>pictures/homepage_photos/background_image.jfif">
    </div>
    <div id="introduction">
      <label id="intro">Welcome To The World's Most Ancient Culture</label>
    </div> 
  </div>

<!-- ----------------------------------------------------------------- -->
                          <!-- Floating Notice -->
<!-- ----------------------------------------------------------------- --> 

    <div id="f_notice_container" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5)">
      <h3>The largest museum across India . ( Log In / Registrate first to use all the links )</h3>
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
                          <!-- ARROW -->
<!-- ----------------------------------------------------------------- -->

    <div id="down_slide_arrow">
      <label>&#8595;</label>
    </div>

<!-- ----------------------------------------------------------------- -->
                          <!--History-->
<!-- ----------------------------------------------------------------- -->

    <div id="history_container">
      <div id="history">
        <div id="history_text">
          <h2 style="background-color:;padding:20px">History</h2>
          <p  style="background-color:;padding:20px">Museums of natural history in the late 19th century exemplified the Victorian desire for consumption and for order. Gathering all examples of each classification of a field of knowledge for research and for display was the purpose. As American colleges grew in the 19th century, they developed their own natural history collections for the use of their students. By the last quarter of the 19th century, the scientific research in the universities was shifting toward biological research on a cellular level, and cutting-edge research moved from museums to university laboratories. While many large museums, such as the Smithsonian Institution, are still respected as research centers, research is no longer a main purpose of most museums. While there is an ongoing debate about the purposes of interpretation of a museum's collection, there has been a consistent mission to protect and preserve cultural artifacts for future generations. Much care, expertise, and expense is invested in preservation efforts to retard decomposition in aging documents, artifacts, artworks, and buildings. All museums display objects that are important to a culture. As historian Steven Conn writes, "To see the thing itself, with one's own eyes and in a public place, surrounded by other people having some version of the same experience can be enchanting.</p>
        </div>
      </div>
      <div id="history_image">
        <img src="<?php echo base_url()?>pictures/homepage_photos/history.jpg" width="400px" height="400px">  
      </div>
    </div>


<!-- ----------------------------------------------------------------- -->
                          <!--M/Y Exhibition-->
<!-- ----------------------------------------------------------------- -->
    <div style="background-color: rgba(250,250,250,0.3);width:100%;height: 100px"></div> <!-- white space -->

    <!-- div id="m_y_exhibition_container">
      <div>
        <table border="1" cellspacing="20" cellpadding="20">
          <tr>
            <td width="30%"><h3><a href="#">Monthly Exhibition</a></h3></td>
            <td><h3><a href="#">Yearly Exhibition</a></h3></td>
            <td width="30%"><h3><a href="#">Top Arts</a></h3></td>
          </tr>
        </table>
      </div>
    </div> -->

<!-- ----------------------------------------------------------------- -->
                          <!-- ARROW -->
<!-- ----------------------------------------------------------------- --> 

    <div id="down_slide_arrow">
      <label>&#8595;</label>
    </div>

<!-- ----------------------------------------------------------------- -->
                          <!--What We Have-->
<!-- ----------------------------------------------------------------- -->

    <div id="what_we_have_container">
      <div id="content">
         <!-- <div id="tour">  
          <ul>
            <h3><li>Tour Images</h2>
              <h5><ul>
                <li><a href="">Art Images</a></li>
                <li><a href="">Botanical Garden</a></li>
                <li><a href="">Ground Floor</a></li>
                <li><a href="">Ground Mid</a></li>
                <li><a href="">Ground Top</a></li>
                <li><a href="">Mughel Emperor</a></li>
                <li><a href="">Cosmic Background</a></li>
                <li><a href="">Campus View</a></li>
              </ul></h5>
            </li>
            <h3><li>Tour Videos</h2>
              <h5><ul>
                <li><a href="">Art</a></li>
                <li><a href="">Botanical Garden</a></li>
                <li><a href="">Archiological Section</a></li>
                <li><a href="">Mughel Emperor</a></li>
                <li><a href="">Cosmic Background</a></li>
                <li><a href="">Ground Floor</a></li>
                <li><a href="">Ground Mid</a></li>
                <li><a href="">Ground Top</a></li>
              </ul></h5>
            </li>
          </ul>  
        </div> -->
        <div id="gallery">
          <ul>
            <h2><li>Gallery</h2>
              <h4><ul>
                <li><a href="">Art Gallery</a></li>
                <li><a href="">Bird Gallery</a></li>
                <li><a href="">Animals Gallery</a></li>
                <li><a href="">Painting Gallery</a></li>
                <li><a href="">Egypt Gallery</a></li>
                <li><a href="">Ancient Fossil Gallery</a></li>
              </ul></h4>
            </li>
          </ul>  
        </div>
      </div>
      <div id="video">
        <div>
          <label>MUSEUM | 365 VIEW</label>
        </div>
        <div id="video_museum365">
          <video controls autoplay muted>
          <source src="video/museum.mp4" type="video/mp4">
          <h1>Your browser does not support the video tag.</h1>
          </video>
        </div>  
        <div>
          <label>LET'S TAKE A TOUR</label>
        </div>
      </div>
    </div>


<!--------------------------------------------------------------------->
                          <!--Upcoming Exhibition-->
<!--------------------------------------------------------------------->
    <div style="background-color: rgba(250,250,250,0.3);width:100%;height: 100px"></div> <!-- white space -->

    <div id="upcoming_exhibition_indicater">
      <h1>UPCOMING EXHIBITION</h1>  
    </div>

    <div id="upcoming_exhibition_container">
    <!--------------------------------------------------------------------------------------------------------------------------------->
        <div id="upcoming_exhibition">
          <!----------------------------------------------------------------------------------------------->
            <div id="upcoming_exhibition_poster1">
              <!--------------------->
                <div id="upcoming_exhibition_poster1_1"> 
                  <div>
                    <img src="<?php echo base_url()?>pictures/homepage_photos/exhibition_poster_img1.jpg">
                  </div>
                  <div>
                    <!-- <label><a href="">Click here for free registration</a></label> -->
                  </div>
                  <div> 
                      <label><a>AN EXHIBITION ON <br> HAPPY SMILE DAY <br> 2'ND MAY</a></label>  
                  </div>
                </div>
                <!--------------------->
                <div id="upcoming_exhibition_poster1_2">
                  <div>
                      <img src="<?php echo base_url()?>pictures/homepage_photos/exhibition_poster_img1.jpg">
                  </div>
                  <div>
                    <!-- <label><a href="">Click here for free registration</a></label> -->
                  </div>
                  <div> 
                      <label><a>AN EXHIBITION ON <br> WORLD HERITAGE DAY <br> 18'TH APRIL</a></label>  
                  </div>  
                </div>
                <!--------------------->
              </div>
            <!----------------------------------------------------------------------------------------------->
            <div id="upcoming_exhibition_poster2">
              <!--------------------->
                <div id="upcoming_exhibition_poster2_1">
                  <div>
                    <img src="<?php echo base_url()?>pictures/homepage_photos/exhibition_poster_img1.jpg">
                  </div>
                  <div>
                    <!-- <label><a href="">Click here for free registration</a></label> -->
                  </div>
                  <div> 
                      <label><a>AN EXHIBITION ON <br> RABINDRA  JAYANTI DAY <br> 9'TH MAY</a></label>  
                  </div>
                </div>
              <!--------------------->
                <div id="upcoming_exhibition_poster2_2">
                  <div>
                    <img src="<?php echo base_url()?>pictures/homepage_photos/exhibition_poster_img1.jpg">
                  </div>
                  <div>
                    <!-- <label><a href="">Click here for free registration</a></label> -->
                  </div>
                  <div> 
                      <label><a>AN EXHIBITION ON <br> ASTRONOMY DAY ON <br> 15'TH MAY</a></label>  
                  </div>
                </div>
              <!--------------------->
            </div>
            <!----------------------------------------------------------------------------------------------->
            <div id="upcoming_exhibition_photo">
              <img src="<?php echo base_url()?>pictures/homepage_photos/exhibition_poster.jpg"> 
            </div>
            <!----------------------------------------------------------------------------------------------->
        </div>
    
    <!--------------------------------------------------------------------------------------------------------------------------------->
    </div>
    

<!-- ------------------------------------------------------------------->
                          <!--About-->
<!-- ------------------------------------------------------------------->

    <div  style="background-color:;height:100px;">
    </div>
    <div id="about_container">
        <div>
            <label>ABOUT OUR MUSEUM</label>
        </div>
        <div>
            <label>MUSEUM | 365</label>
        </div>
        <div>
            <canvas id="alpona1"></canvas>
            <canvas id="alpona2"></canvas>
            <canvas id="alpona3"></canvas>
            <canvas id="alpona4"></canvas>
        </div>
        <div>
            <label>The British Museum was founded in 1753 and opened its doors in 1759.<br>It was the first national museum to cover all fields of human knowledge, open to visitors from across the world.<br>Enlightenment ideals and values – critical scrutiny of all assumptions, open debate, scientific research,<br>progress and tolerance – have marked the Museum since its foundation.<br>The Museum is driven by an insatiable curiosity for the world, a deep belief in objects as reliable witnesses and documents of human history, sound research,<br>as well as the desire to expand and share knowledge.</label>
        </div>
        <div>
            <label><a href="#">View all special exhibition &#8594;</a>
        </div>
    </div>


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



