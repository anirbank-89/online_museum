<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADMIN</title>
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
      <li style="background-color:lightgreen;">
        <a href="<?php echo base_url().'index.php/MuseumController/homepage'?>">HOME</a>
      </li> 
      </ul>
    </div>
  </div>

<!--------------------------------------------------------------------->
                          <!--BRIEF INTRODUCTION-->
<!--------------------------------------------------------------------->
    <div id="brief_intro" style="background-color:rgba(235,235,235,0.5);height:700px;width:100%;display:flex;align-items:center;justify-content: center;">
      <div id="brief_intro_msg" style="background-color:;height:600px;width:90%;overflow:auto;">
        <div style="background-color:;width:100%;height:60px;display:flex;align-items:center;justify-content: center;">
            <label style="font-size:200%;color:blue;">Welcome Admin</label>
        </div>
        <div style="background-color:;width:100%;height:540px";>
            <table border="1" style="width:100%;">
                <label><a href="<?php echo base_url().'index.php/MuseumController/add_to_gallery'?>">ADD to Gallery</a></label><br>
                <label><a href="<?php echo base_url().'index.php/MuseumController/add_notice'?>">ADD Notice</a></label><br>
                <label><a href="<?php echo base_url().'index.php/MuseumController/display_feedback_data_admin'?>">Feedback</a></label>
    <tr id="tr0">
        <th>Sr.No.</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Photo</th>
        <th>Password</th>
        <th>Paid Id</th>
        <th>Seller Id</th>
        <th>Action</th>
        <th>Status</th>
        <th>Block</th>
    </tr>
<!----Printing Data---->
<?php
        $sr=1;
        foreach ($data as $row) {

    ?>
        <tr>
            <td><?php echo $sr++?></td>
            <td><?php echo $row->name?></td>
            <td><?php echo $row->gender?></td>
            <td><?php echo $row->email?></td>
            <td><?php echo $row->mobile?></td>
            <td><?php echo $row->address?></td>
            <td><?php echo $row->picsource?></td>
            <td><?php echo $row->password?></td>
            <td><?php echo $row->paid_id?></td>
            <td><?php echo $row->seller_id?></td>
            <td><a href="admin_edit_user_data?id=<?php echo $row->id?>">Edit</a>
                <br>
                <a id="delete" onclick="return fun()" href="admin_delete_data?id=<?php echo $row->id?>">Delete</a>
            </td>
            <td><?php echo $row->status?></td>
            <td>
                <a href="block_id?id=<?php echo $row->id?>& block=<?php echo $row->block?>& name=<?php echo $row->name?>">
                    <!-- don't give a space before & in query string -->
                    <button id="block"><?php echo $row->block?></button>
                </a>
            </td>   
        </tr>
    <?php   
}

?>
</table>
        </div>
      </div>
    </div>


<style type="text/css">
    h1{color:blue;text-align: center}
    table{background-color:#35363A;color:white;text-align:center;}
    a{color:red;}
    #tr0{background-color:orange;color:black;font-weight:bold;}
</style>

<!---------------------------------------------------------------->

<!-------To confirm the delete------->
<script type="text/javascript">
    function fun()
    {
        if(confirm(" To Delete Press 'Ok' "))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
</script>

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

