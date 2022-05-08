<?php

class leavemodel extends CI_model
{
    //leave_types.php
    public function getLeaveTypes()
    {
        return $leave = $this->db->get('leave_type')->result_array();  // SELECT * from users        
    }

    public function setLeaveTypes($data)
    {
        $this->db->insert('leave_type', $data);
        return true;
    }

    public function delete_type($leave_id)
    {
        return $this->db->delete('leave_type',['leave_id'  => $leave_id]);
    }
 
    //apply_leave.php
    //retrieve leave types in apply_leave (DropDown)
    // public function  fetchLeaveTypes()
    // {
    //     // return $leave = $this->db->get_where('leave_type',array('leave_type'=>'Casual Leave'));
    //     return $leave = $this->db->get('leave_type')->result_array('leave_type', 'total_leaves');
    // }

    public function fetchEmployeeDetails($sevarth_id)
    {
        return $leave = $this->db->where("sevarth_id", $sevarth_id)->get('employees_details')->result_array()[0];
    }

    public function postApplyLeave($data)
    {
        $this->db->insert('leave_application', $data);
        return true;
    }

    public function getLeaveApplication()
    {
        return $leave = $this->db->get('leave_application')->result_array();  // SELECT * from users  
    }

    public function getHistoryLeaveApplication($sevarth_id)
    {
        return $leave = $this->db->where("sevarth_id", $sevarth_id)->get('leave_application')->result_array();
    }
    public function delete_application($application_id)
    {
        return $this->db->delete('leave_application',['application_id'  => $application_id]);
    }

    

    public function approve_leave( $application_id)
    {
        $query = "UPDATE leave_application SET leave_status = 'approved' WHERE application_id = $application_id ";
        $this->db->query($query);
      
    }

    public function reject_leave( $application_id)
    {
        $query = "UPDATE leave_application SET leave_status = 'rejected' WHERE application_id = $application_id ";
        $this->db->query($query);
      
    }
}
