<?php 
class notification_model extends CI_Model {
     /*View*/
    
  function view_notification()
  {
      /*
      In below code, for roleID instead of 1 we have to allot the variable 
      containing roleID of the logged in user then accordingly we can fetch the
      role_name of the logged in user and can show notifications only of the 
      logged in user.
      */
      $roleID = 1;

      $this->db->select("role_name");
      $this->db->from("role");
      $this->db->where('role_id', $roleID);
      $que = $this->db->get();

      foreach ($que->result('notification_model') as $user)
      {
              $role = $user->role_name; // access attributes   
      }

     
      /*
      Here firstly we have to get role_id then we have ti find the role_name of 
      given role_id then we have to replace the role_name with the Principal in 
      the below code
      */

      $this->db->select("*");
      $this->db->from("notification_table");
      $this->db->where('msg_to', $role);
      $query = $this->db->get();
      return $query->result();

      //below is the code to display whole notification table
      //$query=$this->db->get("notification_table");
      //return $query->result();

  }

  function deleterecords($srNO)
  {
    $sr = $_GET['sr_no'];
    $this->db->where("sr_no", $srNO);
    $this->db->delete("notification_table");
    return true;
  }

}
  
?>