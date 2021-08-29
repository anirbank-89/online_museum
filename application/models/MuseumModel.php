<?php
class MuseumModel extends CI_Model
{
    function email_test_records($email)
    {
      $this->db->select('*');
      $this->db->from('registration_table');
      $this->db->where('email',$email);
      $query=$this->db->get();
      if($query->num_rows())
      {
        return true;
      }
      else
      {
        return false;
      }
    }
    function blocking_test_model($email)
    {
      $block="active";
      $query=$this->db->query("SELECT * FROM registration_table WHERE email='$email' AND block='$block'");

      if($query->num_rows())
      {
        return true;
      }
      else
      {
        return false;
      }
    }
    function user_register_records($data)
    {
    	$query=$this->db->insert('registration_table',$data);
    	if($query)
    	{
           return true;
    	}
    	else
    	{
           return false;
    	}

    }
    function user_login_records($email,$password)
    {
      $this->db->select('*');
      $this->db->from('registration_table');
      $this->db->where('email',$email);
      $this->db->where('password',$password);
      $query=$this->db->get();
      if($query->num_rows())
      {
        return true;
      }
      else
      {
        return false;
      }

    }
    function display_user_records($email)
    {
      $this->db->select('*');
      $this->db->from('registration_table');
      $this->db->where('email',$email);
      $query=$this->db->get();
      return $query->result();
    }
    function user_update_records_by_id($id)
    {
      $this->db->select('*');
      $this->db->from('registration_table');
      $this->db->where('id',$id);
      $query=$this->db->get();
      return $query->result();
    }
    function user_update_records($data,$id)
    {
      $this->db->where('id',$id);
      $query=$this->db->update('registration_table',$data);
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }

    }
    function user_new_email_update_records($id,$data)
    {
      $this->db->where('id',$id);
      $query=$this->db->update('registration_table',$data);
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }

    }
    function user_new_password_update_records($id,$data)
    {
      $this->db->where('id',$id);
      $query=$this->db->update('registration_table',$data);
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }
    }



    // -----------------------------------------------------------
    function display_admin_records()
    {
      $this->db->select('*');
      $this->db->from('registration_table');
      $query=$this->db->get();
      return $query->result();
    }
    function admin_delete_records($id)
    {
      $this->db->where('id',$id);
      $query=$this->db->delete('registration_table');
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }

    }
    function deactive_records($id,$data)
    {
      $this->db->where('id',$id);
      $query=$this->db->update('registration_table',$data);
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }

    }
    function active_records($id,$data)
    {
      $this->db->where('id',$id);
      $query=$this->db->update('registration_table',$data);
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }

    }





















    // function user_email_id_match_records($id,$email)
    // {
    //   $this->db->select('*');
    //   $this->db->from('registration_table');
    //   $this->db->where('id',$id);
    //   $this->db->where('email',$email);
    //   $query=$this->db->get();
    //   if($query->num_rows())
    //   {
    //     return true;
    //   }
    //   else
    //   {
    //     return false;
    //   }
    // }


// -------------------------------------------------------------
// -------------------------------------------------------------
// -------------------------------------------------------------
    function feedback_table_update($data1,$email)
    {
      $this->db->where('email',$email);
      $this->db->update('feedback_table',$data1);
    }
    function feedback_records($data)
    {
      $query=$this->db->insert('feedback_table',$data);
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }
    }
    function display_feedback_records()
    {
      $this->db->select('*');
      $this->db->from('feedback_table');
      $query=$this->db->get();
      return $query->result();
    }
    function display_feedback_records_by_id($id)
    {
      $this->db->select('*');
      $this->db->from('feedback_table');
      $this->db->where('id',$id);
      $query=$this->db->get();
      return $query->result();
    }



    function add_animals_records($data)
    {
      $query=$this->db->insert('animals_table',$data);
      if($query)
      {
           return true;
      }
      else
      {
           return false;
      }
    }
    function display_animals_records()
    {
      $this->db->select('*');
      $this->db->from('animals_table');
      $query=$this->db->get();
      return $query->result();
    }
    function add_arts_records($data)
    {
      $query=$this->db->insert('arts_table',$data);
      if($query)
      {
           return true;
      }
      else
      {
           return false;
      }
    }
    function display_arts_records()
    {
      $this->db->select('*');
      $this->db->from('arts_table');
      $query=$this->db->get();
      return $query->result();
    }
    function add_birds_records($data)
    {
      $query=$this->db->insert('birds_table',$data);
      if($query)
      {
           return true;
      }
      else
      {
           return false;
      }
    }
    function display_birds_records()
    {
      $this->db->select('*');
      $this->db->from('birds_table');
      $query=$this->db->get();
      return $query->result();
    }
    function add_painting_records($data)
    {
      $query=$this->db->insert('painting_table',$data);
      if($query)
      {
           return true;
      }
      else
      {
           return false;
      }
    }
    function display_painting_records()
    {
      $this->db->select('*');
      $this->db->from('painting_table');
      $query=$this->db->get();
      return $query->result();
    }
    function add_egypt_records($data)
    {
      $query=$this->db->insert('egypt_table',$data);
      if($query)
      {
           return true;
      }
      else
      {
           return false;
      }
    }
    function display_egypt_records()
    {
      $this->db->select('*');
      $this->db->from('egypt_table');
      $query=$this->db->get();
      return $query->result();
    }
    function add_fossil_records($data)
    {
      $query=$this->db->insert('fossil_table',$data);
      if($query)
      {
           return true;
      }
      else
      {
           return false;
      }
    }
    function display_fossil_records()
    {
      $this->db->select('*');
      $this->db->from('fossil_table');
      $query=$this->db->get();
      return $query->result();
    }
    function add_notice_records($data)
    {
      $query=$this->db->insert('notice_table',$data);
      if($query)
      {
           return true;
      }
      else
      {
           return false;
      }
    }
    function display_notice_records()
    {
      $this->db->select('*');
      $this->db->from('notice_table');
      $query=$this->db->get();
      return $query->result();
    }

    
}

?>



