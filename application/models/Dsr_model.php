<?php 
class Dsr_model extends CI_Model {
     /*View*/
    function display_master_cs()
    {
      $query=$this->db->get("master_cs");
      return $query->result();
    }

    function display_cs_distribution()
    {
      $query=$this->db->get("cs_distribution");
      return $query->result();
    }  

    function get_comp_dsr(){
      $d = $_GET['dept'];
      $this->db->select("*");
      $this->db->from("cs_distribution");
      $this->db->where('head_initials', $d);
      $query = $this->db->get();
      return $query->result();
  }

  function add_cs($data){
    $this->db->insert('master_cs' , $data);   
    return true;
  }

  function dsr_cs_distribute_items($data)
  {
    $this->db->insert('cs_distribution' , $data);   
    return true;

  }

  function send_request($data)
  {
    $this->db->insert('notification_table' , $data);   
    return true;

  }

  function transfer_insert($data){
    $this->db->insert('transfer_table' , $data);   
    return true;
  }

}
  
?>