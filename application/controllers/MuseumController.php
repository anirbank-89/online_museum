<?php
class MuseumController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('MuseumModel');
    $this->load->library('session');
	}
	function homepage()
	{
		$this->load->view('home_panel/homepage.php');
	}
	function logindata()
	{
		$this->load->view('home_panel/loginpage.php');
	}
// ---------------------------------------------------------------------------

// --------------------------------------------------
                #USER BACKEND PANEL 
// --------------------------------------------------
	function user_register_data()
	{
      $this->load->view('home_panel/registrationpage.php');
      if($this->input->post('submit'))
      {
        // normal information
        $name=$this->input->post('name');
        $gender=$this->input->post('gender');
        $email=$this->input->post('email');
        $mobile=$this->input->post('mobile');
        $address=$this->input->post('address');
        // image value
        $filename=$_FILES['image']['name'];
        $tempname=$_FILES['image']['tmp_name'];
        $folder="user_photos/".$filename;
        move_uploaded_file($tempname,$folder);
        // password value
        $password=md5($this->input->post('password'));

        $paid_id="none";
        $seller_id="none";
        $status="user";
        $block="active";

        // echo $name,$gender,$email,$mobile,$address,$folder,$password;
        
        if($this->MuseumModel->email_test_records($email))
        {
          // echo "sorry this email exist already try with a new one";
          ?>
          <script>
            alert("SORRY !! This Email Id Already Exist : Try with new one ");
          </script>
          <?php
        }
        else
        {
          $data=array('name'=>$name,'gender'=>$gender,'email'=>$email,'mobile'=>$mobile,'address'=>$address,'picsource'=>$folder,'password'=>$password,'paid_id'=>$paid_id,'seller_id'=>$seller_id,'status'=>$status,'block'=>$block);

          if($this->MuseumModel->user_register_records($data))
          {
             // echo "inserted successfully";
            ?>
            <script>
              alert("Registration Successful");
              window.location.href="<?php echo base_url().'index.php/MuseumController/homepage'?>";
            </script>
            <?php
          }
          else
          {
            // echo "not inserted";
            ?>
            <script>
              alert("Registration Un-successful");
              window.location.href="<?php echo base_url().'index.php/MuseumController/homepage'?>";
            </script>
            <?php
          }

        }
      }
  }
  function user_login_data()
  {
    if($this->input->post('submit'))
    {
      $_SESSION['email']=$this->input->post('email'); #session applied here
      $password=md5($this->input->post('password'));
      // echo $_SESSION['email'],$password;
      if($this->MuseumModel->user_login_records($_SESSION['email'],$password))
      {
        // echo "login success";
        redirect('MuseumController/blocking_test');
      }
      else
      {
        // echo "login failure";
        ?>
        <script>
          alert("Invalid Email id & Password");
          window.location.href="<?php echo base_url().'index.php/MuseumController/logindata'?>";
        </script>
        <?php
      }
    }
  }
  function blocking_test()
  {
    if($this->MuseumModel->blocking_test_model($_SESSION['email']))
    {
      ?>
      <script>
        alert("Successfully Log In");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_user_data'?>";
      </script>
      <?php
    }
    else
    {
      // echo "You have been blocked by admin";
      ?>
      <script>
        alert("<?php echo $_SESSION['email'] ?> : have been blocked by admin");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_user_data'?>";
      </script>
      <?php
    }
  }
  function display_user_data() #by $_SESSION['email'] 
  {
    $result['data']=$this->MuseumModel->display_user_records($_SESSION['email']);
    // echo $result['data'][0]->status;
    if($result['data'][0]->status=="user")
    {
      $this->load->view('user_panel/user_homepage.php',$result);
    }
    else
    {
      // echo "this is admin display";
      redirect('MuseumController/display_admin_data');
    }
  }
  function user_update_data()
  {
    $id=$this->input->get('id');
    $_SESSION['email']=$this->input->get('email');
    // echo $id,$_SESSION['email'];
    $result['data']=$this->MuseumModel->user_update_records_by_id($id);
    // print_r($result);
    $this->load->view('user_panel/user_updatepage.php',$result);

    if($this->input->post('submit'))
    {
      $name=$this->input->post('name2');
      $gender=$this->input->post('gender2');
      $mobile=$this->input->post('mobile2');
      $address=$this->input->post('address2');
      // image value
      $filename=$_FILES['image2']['name'];
      $tempname=$_FILES['image2']['tmp_name'];
      $folder="user_photos/".$filename;
      move_uploaded_file($tempname,$folder);
      
      // echo $name,$gender,$mobile,$address,$folder;
      $data=array('name'=>$name,'gender'=>$gender,'mobile'=>$mobile,'address'=>$address,'picsource'=>$folder);
      if($this->MuseumModel->user_update_records($data,$id))
      {
        // echo "updated successfully";
        $data1=array('name'=>$name,'picsource'=>$folder);
        $this->MuseumModel->feedback_table_update($data1,$_SESSION['email']);
        ?>
        <script>
          alert("Upadated Successfully");
          window.location.href="<?php echo base_url().'index.php/MuseumController/display_user_data'?>";
        </script>
        <?php

      }
      else
      {
        // echo "updation cancelled";
        ?>
        <script>
          alert("Upadation Un-Successfully");
          window.location.href="<?php echo base_url().'index.php/MuseumController/display_user_data'?>";
        </script>
        <?php
      }    
    }
  }
  // -----------------user email update------------------------------
  function user_email_update_data()
  {
    $_SESSION['id']=$this->input->get('id');
    $_SESSION['email']=$this->input->get('email'); 
    # as it's coming by clicking on a ancher tag & query string so this function user_email_update_data can't be re used without but coming to the same ancher tag;
    // -----to show the data in menu------
    $result['data']=$this->MuseumModel->user_update_records_by_id($_SESSION['id']);
    $this->load->view('user_panel/user_email_updatepage.php',$result);
    // -----------------------------------
    // echo $_SESSION['id'],$_SESSION['email'];
    // $this->load->view('user_panel/user_email_updatepage.php');
    
    if($this->input->post('submit'))
    {
      $password=$this->input->post('password');
      // echo $id,$_SESSION['email'],$password;
      if($this->MuseumModel->user_login_records($_SESSION['email'],$password))
      {
        redirect('MuseumController/user_new_email_update_data');
      }
      else
      {
        // echo "Sorry password Did not match";
        ?>
        <script>
          alert("SORRY !! Password did not match");
          window.location.href="<?php echo base_url().'index.php/MuseumController/display_user_data'?>";
        </script>
        <?php
      }
    }
  }
  function user_new_email_update_data()
  {
    // -----to show the data in menu------
    $result['data']=$this->MuseumModel->user_update_records_by_id($_SESSION['id']);
    $this->load->view('user_panel/user_email_update_confirmpage.php',$result);
    // -----------------------------------
    #this function can be reused as it's not using any query string ,, as well as it is just a page value
    // $this->load->view('user_panel/user_email_update_confirmpage.php');
    if($this->input->post('submit'))
    {
      $new_email=$this->input->post('new_email');
      // echo $new_email;
      if($this->MuseumModel->email_test_records($new_email))
      {
        // echo "sorry This email id already exist";
        ?>
        <script>
          alert("SORRY !! This Email id already Exist : Try with new one");
          window.location.href="<?php echo base_url().'index.php/MuseumController/user_new_email_update_data'?>";
        </script>
        <?php

      }
      else
      {
        // echo "Email Can Be changed";
        $data=array('email'=>$new_email);
        if($this->MuseumModel->user_new_email_update_records($_SESSION['id'],$data))
        {
          // echo "email changed succesfully";
          ?>
          <script>
            alert("Congrats !! Email Changed Successfully");
            window.location.href="<?php echo base_url().'index.php/MuseumController/user_logout_data'?>";
          </script>
          <?php
        }
        else
        {
          // echo "email changing Un-successful";
          ?>
          <script>
            alert("Email Changing Un-successful");
            window.location.href="<?php echo base_url().'index.php/MuseumController/display_user_data'?>";
          </script>
          <?php
        }
      }
    }
  }
  // -----------------user password update------------------------------
  function user_password_update_data()
  {
    $_SESSION['id']=$this->input->get('id');
    $_SESSION['email']=$this->input->get('email'); 
    # as it's coming by clicking on a ancher tag & query string so this function user_email_update_data can't be re used without but coming to the same ancher tag;

    // -----to show the data in menu------
    $result['data']=$this->MuseumModel->user_update_records_by_id($_SESSION['id']);
    $this->load->view('user_panel/user_password_updatepage.php',$result);
    // -----------------------------------

    // echo $_SESSION['id'],$_SESSION['email'];
    // $this->load->view('user_panel/user_password_updatepage.php');
    if($this->input->post('submit'))
    {
      $_SESSION['old_password']=md5($this->input->post('old_password'));
      // echo $old_password;
      if($this->MuseumModel->user_login_records($_SESSION['email'],$_SESSION['old_password']))
      {
        redirect('MuseumController/user_new_password_update_data');
      }
      else
      {
        // echo "Old Password Did not match";
        ?>
        <script>
          alert("SORRY !! Old Password did not match");
          window.location.href="<?php echo base_url().'index.php/MuseumController/display_user_data'?>";
        </script>
        <?php
      }
    }

  }
  function user_new_password_update_data()
  {
     // -----to show the data in menu------
    $result['data']=$this->MuseumModel->user_update_records_by_id($_SESSION['id']);
    $this->load->view('user_panel/user_password_update_confirmpage.php',$result);
    // -----------------------------------
    // $this->load->view('user_panel/user_password_update_confirmpage.php');
    if($this->input->post('submit'))
    {
      $new_password=md5($this->input->post('new_password'));
      $confirm_password=md5($this->input->post('confirm_password'));
      $old_password=$_SESSION['old_password'];
      // echo $_SESSION['old_password'],$new_password,$confirm_password;
      if($new_password!=$old_password)
      {
        if($new_password==$confirm_password)
        {
          // echo "No problem with new & confirm password";
           $data=array('password'=>$confirm_password);
          if($this->MuseumModel->user_new_password_update_records($_SESSION['id'],$data))
          {
            // echo "password changed succesfully";
            ?>
            <script>
              alert("Congrats !! Password Changed Succesfully");
              window.location.href="<?php echo base_url().'index.php/MuseumController/user_logout_data'?>";
            </script>
            <?php
          }
          else
          {
            // echo "password changing Un-succesful";
            ?>
            <script>
              alert("Password Changing Un-succesful !");
              window.location.href="<?php echo base_url().'index.php/MuseumController/display_user_data'?>";
            </script>
            <?php
          }
        }
        else
        {
          // echo "New & Confirm Password should be same";
          ?>
          <script>
            alert("New & Confirm password should be same !");
            window.location.href="<?php echo base_url().'index.php/MuseumController/user_new_password_update_data'?>";
          </script>
          <?php
        }
      }
      else
      {
        // echo "Old & New password should not be same";
        ?>
        <script>
          alert("Old & New password should not be same !");
          window.location.href="<?php echo base_url().'index.php/MuseumController/user_new_password_update_data'?>";
        </script>
        <?php
      }

    }
  }  
  function user_logout_data()
  {
    session_destroy();
    ?>
    <script>
      alert("You Have Been Loged Out : Log In Again");
      window.location.href="<?php echo base_url().'index.php/MuseumController/homepage'?>";
    </script>
    <?php
  }

// -------------for showing menu in every user_page-------------

  
// ---------------------------------------------------------------
                #ADMIN BACKEND PANEL 
// ---------------------------------------------------------------

function display_admin_data()
{
  $result['data']=$this->MuseumModel->display_admin_records();
  // print_r($result);
  $this->load->view('admin_panel/admin_display.php',$result);
}
function admin_delete_data()
{
  $id=$this->input->get('id');
  // echo $id;
  if($this->MuseumModel->admin_delete_records($id))
  {
    // echo "deleted successfully";
    ?>
    <script>
      alert("Deleted Succesfully");
      window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
    </script>
    <?php

  }
  else
  {
    // echo "delete Un-successful";
    ?>
    <script>
      alert("Deletation Un-successful");
      window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
    </script>
    <?php

  }
}
function block_id()
{
  $id=$this->input->get('id');
  $block=$this->input->get('block');
  $name=$this->input->get('name');
  // echo $id,$block;
  if($block=="active")
  {
    $block="deactive";
    $data=array('block'=>$block);
    if($this->MuseumModel->deactive_records($id,$data))
    {
      // echo "account blocked";
      ?>
      <script>
        alert("<?php echo $name ?> : Is Blocked ");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
    else
    {
      // echo "account blocking failed";
      ?>
      <script>
        alert("<?php echo $name ?> : Blocking Failed ");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
  }
  else
  {
    $block="active";
    $data=array('block'=>$block);
    if($this->MuseumModel->active_records($id,$data))
    {
      // echo "account unblocked";
      ?>
      <script>
        alert("<?php echo $name ?> : Is Un-blocked ");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
    else
    {
      // echo "account unblocking failed";
      ?>
      <script>
        alert("<?php echo $name ?> : Un-blocking Failed ");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
  }

}
function admin_edit_user_data()
{
    $id=$this->input->get('id');
    // echo $id;
    $result['data']=$this->MuseumModel->user_update_records_by_id($id);
    // print_r($result);
    $this->load->view('user_panel/user_updatepage.php',$result);

    if($this->input->post('submit'))
    {
      $name=$this->input->post('name2');
      $gender=$this->input->post('gender2');
      $mobile=$this->input->post('mobile2');
      $address=$this->input->post('address2');
      // image value
      $filename=$_FILES['image2']['name'];
      $tempname=$_FILES['image2']['tmp_name'];
      $folder="user_photos/".$filename;
      move_uploaded_file($tempname,$folder);
      
      // echo $name,$gender,$mobile,$address,$folder;
      $data=array('name'=>$name,'gender'=>$gender,'mobile'=>$mobile,'address'=>$address,'picsource'=>$folder);
      if($this->MuseumModel->user_update_records($data,$id))
      {
        // echo "updated successfully";
        ?>
        <script>
          alert("Upadated Successfully");
          window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
        </script>
        <?php

      }
      else
      {
        // echo "updation cancelled";
        ?>
        <script>
          alert("Upadation Un-Successfully");
          window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
        </script>
        <?php
      }    
    }
}


// -------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------

function feedback_data()
{
  if($this->input->post('submit'))
  {
    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
    $image=$_SESSION['image'];
    $feedback=$this->input->post('feedback');
    // echo $name,$email,$feedback;
    #--------add feedback msg time to the table--------
    // $delay=strtotime("3 hours 30 minutes");
    // $feedback_time=date("Y-m-d h:i:sa", $delay);
    #--------------------------------------------------
    date_default_timezone_set("Asia/Calcutta");
    $timestamp=time();
    $feedback_time=date("Y-m-d h:i:sa", $timestamp);
    
    $data=array('name'=>$name,'email'=>$email,'feedback_msg'=>$feedback,'feedback_time'=>$feedback_time,'picsource'=>$image);
    if($this->MuseumModel->feedback_records($data))
    {
      // echo "feedback sent";
      ?>
      <script>
        alert("Feedback Added Succesfully");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_feedback_data'?>";
      </script>
      <?php
    }
    else
    {
      // echo "feedback not sent";
      ?>
      <script>
        alert("Feedback Not Sent");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_feedback_data'?>";
      </script>
      <?php
    }
  }
}
function feedback_data2()
{
  $_SESSION['name']=$this->input->get('name');
  $_SESSION['email']=$this->input->get('email');
  $_SESSION['image']=$this->input->get('img');
  // echo $_SESSION['id'],$_SESSION['email'],$_SESSION['img'];
  ?>
  <script>
    window.location.href="<?php echo base_url().'index.php/MuseumController/display_feedback_data'?>";
  </script>
  <?php

}
function display_feedback_data()
{
  $result['data']=$this->MuseumModel->display_feedback_records();
  // print_r($result);
  $this->load->view('feedback_panel/feedback_display',$result);
}
function display_feedback_data_admin()
{
  $result['data']=$this->MuseumModel->display_feedback_records();
  // print_r($result);
  $this->load->view('admin_panel/feedback_display',$result);
}
function feedback_admin_reply()
{
  $id=$this->input->get('id');
  // echo $id;
  $result['data']=$this->MuseumModel->display_feedback_records_by_id($id);
  // print_r($result);
  $this->load->view('feedback_panel/feedback_admin_replypage.php',$result);
  if($this->input->post('submit'))
  {
    $email=$this->input->post('email');
    $subject=$this->input->post('subject');
    $body=$this->input->post('body');
    // echo $email,$subject,$body;
    $config=array(
      'protocol'=>'smtp',
      'smtp_host'=>'ssl://smtp.googlemail.com',
      'smtp_port'=>465,
      'smtp_user'=>'museum365.php@gmail.com',
      'smtp_pass'=>'Museum365@o9project',
      'charset'=>'iso-8859-1',
      'mailtype'=>'html',
      'wordwrap'=>TRUE
    );
    $this->load->library('email',$config);
    $this->email->set_newline("\r\n");

    $this->email->from('museum365.php@gmail.com','');
    $this->email->to($email);
    $this->email->subject($subject);
    $this->email->message($body);
    
    if($this->email->send())
    {
           // echo "mail sent successfully";
      ?>
      <script>
        alert("Mail Sent Succesfully");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_feedback_data'?>";
      </script>
      <?php
    }
    else
    {
           // echo "mail not sent";
      ?>
      <script>
        alert("Mail Not Sent");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_feedback_data'?>";
      </script>
      <?php
    }
  }
}

// -------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------



function about_us_data()
{
  $this->load->view('home_panel/about_us.php');
}
function privacy_policy_data()
{
  $this->load->view('home_panel/privacy_policy.php');
}
function notice_data()
{
  $this->load->view('home_panel/notice.php');
}
function contact_data()
{
  $this->load->view('home_panel/contact.php');
}
function user_about_us_data()
{
  $this->load->view('user_panel/user_about_us.php');
}
function user_privacy_policy_data()
{
  $this->load->view('user_panel/user_privacy_policy.php');
}
function user_notice_data()
{
  $this->load->view('user_panel/user_notice.php');
}
function user_contact_data()
{
  $this->load->view('user_panel/user_contact.php');
}

// --------------------------------------------------------
// --------------------------------------------------------


function add_to_gallery()
{
  $this->load->view('admin_panel/add_to_gallery.php');
}
function add_notice()
{
  $this->load->view('admin_panel/add_notice.php');
}
// -------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------
function add_animals_data()
{
  if($this->input->post('submit'))
  {
    $name=$this->input->post('name');
    $date=$this->input->post('date');
    $place=$this->input->post('place');

    $filename=$_FILES['image']['name'];
      $tempname=$_FILES['image']['tmp_name'];
      $folder="gallery_photos/".$filename;
      move_uploaded_file($tempname,$folder);

    // echo $name,$date,$place,$folder;
    $data=array('name'=>$name,'discovery_date'=>$date,'discovery_place'=>$place,'picsource'=>$folder);
    if($this->MuseumModel->add_animals_records($data))
    {
      // echo "inserted animal succesfully";
      ?>
      <script>
        alert("Animals Inserted Succesfully");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
    else
    {
      // echo "inserted animal Un-succesful";
      ?>
      <script>
        alert("Animals Not Inserted");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
  }
}
function display_animals_data()
{
  $result['data']=$this->MuseumModel->display_animals_records();
    // print_r($result);
  $this->load->view('gallery/animals_gallery.php',$result);
}
function add_arts_data()
{
  if($this->input->post('submit'))
  {
    $name=$this->input->post('name');
    $date=$this->input->post('date');
    $place=$this->input->post('place');

    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder="gallery_photos/".$filename;
    move_uploaded_file($tempname,$folder);

    // echo $name,$date,$place,$folder;
    $data=array('name'=>$name,'discovery_date'=>$date,'discovery_place'=>$place,'picsource'=>$folder);
    if($this->MuseumModel->add_arts_records($data))
    {
      // echo "inserted animal succesfully";
      ?>
      <script>
        alert("Arts Inserted Succesfully");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
    else
    {
      // echo "inserted animal Un-succesful";
      ?>
      <script>
        alert("Arts Not Inserted");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
  }
}
function display_arts_data()
{
  $result['data']=$this->MuseumModel->display_arts_records();
    // print_r($result);
  $this->load->view('gallery/arts_gallery.php',$result);
}
function add_birds_data()
{
  if($this->input->post('submit'))
  {
    $name=$this->input->post('name');
    $date=$this->input->post('date');
    $place=$this->input->post('place');

    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder="gallery_photos/".$filename;
    move_uploaded_file($tempname,$folder);

    // echo $name,$date,$place,$folder;
    $data=array('name'=>$name,'discovery_date'=>$date,'discovery_place'=>$place,'picsource'=>$folder);
    if($this->MuseumModel->add_birds_records($data))
    {
      // echo "inserted animal succesfully";
      ?>
      <script>
        alert("Birds Inserted Succesfully");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
    else
    {
      // echo "inserted animal Un-succesful";
      ?>
      <script>
        alert("Birds Not Inserted");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
  }
}
function display_birds_data()
{
  $result['data']=$this->MuseumModel->display_birds_records();
    // print_r($result);
  $this->load->view('gallery/birds_gallery.php',$result);
}
function add_painting_data()
{
  if($this->input->post('submit'))
  {
    $name=$this->input->post('name');
    $date=$this->input->post('date');
    $place=$this->input->post('place');

    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder="gallery_photos/".$filename;
    move_uploaded_file($tempname,$folder);

    // echo $name,$date,$place,$folder;
    $data=array('name'=>$name,'discovery_date'=>$date,'discovery_place'=>$place,'picsource'=>$folder);
    if($this->MuseumModel->add_painting_records($data))
    {
      // echo "inserted animal succesfully";
      ?>
      <script>
        alert("painting Inserted Succesfully");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
    else
    {
      // echo "inserted animal Un-succesful";
      ?>
      <script>
        alert("Painting Not Inserted");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
  }
}
function display_painting_data()
{
  $result['data']=$this->MuseumModel->display_painting_records();
    // print_r($result);
  $this->load->view('gallery/painting_gallery.php',$result);
}
function add_egypt_data()
{
  if($this->input->post('submit'))
  {
    $name=$this->input->post('name');
    $date=$this->input->post('date');
    $place=$this->input->post('place');

    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder="gallery_photos/".$filename;
    move_uploaded_file($tempname,$folder);

    // echo $name,$date,$place,$folder;
    $data=array('name'=>$name,'discovery_date'=>$date,'discovery_place'=>$place,'picsource'=>$folder);
    if($this->MuseumModel->add_egypt_records($data))
    {
      // echo "inserted animal succesfully";
      ?>
      <script>
        alert("Egypt Inserted Succesfully");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
    else
    {
      // echo "inserted animal Un-succesful";
      ?>
      <script>
        alert("Egypt Not Inserted");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
  }
}
function display_egypt_data()
{
  $result['data']=$this->MuseumModel->display_egypt_records();
    // print_r($result);
  $this->load->view('gallery/egypt_gallery.php',$result);
}
function add_fossil_data()
{
  if($this->input->post('submit'))
  {
    $name=$this->input->post('name');
    $date=$this->input->post('date');
    $place=$this->input->post('place');

    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder="gallery_photos/".$filename;
    move_uploaded_file($tempname,$folder);

    // echo $name,$date,$place,$folder;
    $data=array('name'=>$name,'discovery_date'=>$date,'discovery_place'=>$place,'picsource'=>$folder);
    if($this->MuseumModel->add_fossil_records($data))
    {
      // echo "inserted animal succesfully";
      ?>
      <script>
        alert("Fossil Inserted Succesfully");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
    else
    {
      // echo "inserted animal Un-succesful";
      ?>
      <script>
        alert("Fossil Not Inserted");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
  }
}
function display_fossil_data()
{
  $result['data']=$this->MuseumModel->display_fossil_records();
    // print_r($result);
  $this->load->view('gallery/fossil_gallery.php',$result);
}
function add_notice_data()
{
  if($this->input->post('submit'))
  {
    $notice=$this->input->post('notice');
    
    date_default_timezone_set("Asia/Calcutta");
    $timestamp=time();
    $time=date("Y-m-d h:i:sa", $timestamp);
    // echo $name,$date,$place,$folder;
    $data=array('notice'=>$notice,'time'=>$time);
    if($this->MuseumModel->add_notice_records($data))
    {
      // echo "Notice Added succesfully";
      ?>
      <script>
        alert("Notice Inserted Succesfully");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
    else
    {
      // echo "Notice not inserted";
      ?>
      <script>
        alert("Notice Not Inserted");
        window.location.href="<?php echo base_url().'index.php/MuseumController/display_admin_data'?>";
      </script>
      <?php
    }
  }
}
function display_notice_data()
{
  $result['data']=$this->MuseumModel->display_notice_records();
    // print_r($result);
  $this->load->view('home_panel/notice.php',$result);
}
function display_notice_data2()
{
  $result['data']=$this->MuseumModel->display_notice_records();
    // print_r($result);
  $this->load->view('user_panel/user_notice.php',$result);
}



}

?>



