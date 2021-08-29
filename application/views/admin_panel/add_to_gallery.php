<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADD To Gallery</title>
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
                          <!--ADD TO GALLERY-->
<!--------------------------------------------------------------------->

    <div id="white_space" style="height:100px;width:100%;"></div>
    <div style="background-color:rgba(235,235,235,0.5);height:700px;width:100%;display:flex;align-items:center;justify-content: center;">
      <div style="background-color:;height:600px;width:90%;">

        <form method="post" action="<?php echo base_url().'index.php/MuseumController/add_animals_data'?>" enctype="multipart/form-data">
        <div style="background-color:;width:100%;height:100px;">
          <div style="background-color:;width:30%;float:left;height:100px;">
            <label>Add Animals : </label><br><br><input type="file" name="image">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Name : </label><br><br> <input type="text" name="name">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Date : </label><br><br> <input type="text" name="date">
          </div>
         <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Place : </label><br><br> <input type="text" name="place">
          </div>
          <div style="background-color:;width:10%;float:left;height:100px;display:flex;align-items:center;justify-content: center;">
            <input type="submit" name="submit" value="ADD">
          </div>
        </div>
        </form>

        <form method="post" action="<?php echo base_url().'index.php/MuseumController/add_arts_data'?>" enctype="multipart/form-data">
        <div style="background-color:;width:100%;height:100px;">
          <div style="background-color:;width:30%;float:left;height:100px;">
            <label>Add Arts : </label><br><br><input type="file" name="image">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Name : </label><br><br> <input type="text" name="name">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Date : </label><br><br> <input type="text" name="date">
          </div>
         <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Place : </label><br><br> <input type="text" name="place">
          </div>
          <div style="background-color:;width:10%;float:left;height:100px;display:flex;align-items:center;justify-content: center;">
            <input type="submit" name="submit" value="ADD">
          </div>
        </div>
        </form>





        <form method="post" action="<?php echo base_url().'index.php/MuseumController/add_birds_data'?>" enctype="multipart/form-data">
        <div style="background-color:;width:100%;height:100px;">
          <div style="background-color:;width:30%;float:left;height:100px;">
            <label>Add Birds : </label><br><br><input type="file" name="image">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Name : </label><br><br> <input type="text" name="name">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Date : </label><br><br> <input type="text" name="date">
          </div>
         <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Place : </label><br><br> <input type="text" name="place">
          </div>
          <div style="background-color:;width:10%;float:left;height:100px;display:flex;align-items:center;justify-content: center;">
            <input type="submit" name="submit" value="ADD">
          </div>
        </div>
        </form>


        <form method="post" action="<?php echo base_url().'index.php/MuseumController/add_painting_data'?>" enctype="multipart/form-data">
        <div style="background-color:;width:100%;height:100px;">
          <div style="background-color:;width:30%;float:left;height:100px;">
            <label>Add Painting : </label><br><br><input type="file" name="image">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Name : </label><br><br> <input type="text" name="name">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Date : </label><br><br> <input type="text" name="date">
          </div>
         <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Place : </label><br><br> <input type="text" name="place">
          </div>
          <div style="background-color:;width:10%;float:left;height:100px;display:flex;align-items:center;justify-content: center;">
            <input type="submit" name="submit" value="ADD">
          </div>
        </div>
        </form>



        <form method="post" action="<?php echo base_url().'index.php/MuseumController/add_egypt_data'?>" enctype="multipart/form-data">
        <div style="background-color:;width:100%;height:100px;">
          <div style="background-color:;width:30%;float:left;height:100px;">
            <label>Add Egypt : </label><br><br><input type="file" name="image">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Name : </label><br><br> <input type="text" name="name">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Date : </label><br><br> <input type="text" name="date">
          </div>
         <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Place : </label><br><br> <input type="text" name="place">
          </div>
          <div style="background-color:;width:10%;float:left;height:100px;display:flex;align-items:center;justify-content: center;">
            <input type="submit" name="submit" value="ADD">
          </div>
        </div>
        </form>


        <form method="post" action="<?php echo base_url().'index.php/MuseumController/add_fossil_data'?>" enctype="multipart/form-data">
        <div style="background-color:;width:100%;height:100px;">
          <div style="background-color:;width:30%;float:left;height:100px;">
            <label>Add Fossil : </label><br><br><input type="file" name="image">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Name : </label><br><br> <input type="text" name="name">
          </div>
          <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Date : </label><br><br> <input type="text" name="date">
          </div>
         <div style="background-color:;width:20%;float:left;height:100px;">
            <label>Discovery Place : </label><br><br> <input type="text" name="place">
          </div>
          <div style="background-color:;width:10%;float:left;height:100px;display:flex;align-items:center;justify-content: center;">
            <input type="submit" name="submit" value="ADD">
          </div>
        </div>
        </form>

      </div>
    </div>


<!--------------------------------------------------------------------->
                          <!--Footer-->
<!--------------------------------------------------------------------->
    <!-- thank you to the user for him/her visit -->
    <div style="background-color:rgba(235,235,250,0.8);width:100%;height: 100px;display:flex;align-items:center;justify-content:center">
      <label style="font-size:120%;color:rgba(23,24,20,0.9);"></label>
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

