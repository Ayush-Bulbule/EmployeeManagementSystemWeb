<?php
class IO_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get_employee_by_sevarth_id($sevarth_id){
        if($sevarth_id == null){
            echo "sevarth_id is null at io_model line 11";
        }
        return $this->db->where('sevarth_id', $sevarth_id)->get('employees')->result()[0];
    }

    public function save_io_details(
        $io_application_data
    ) {
        
        $this->db->insert('applications', $io_application_data);

    }
    public function get_hod_by_department_organization($department_id, $organization_id)
    {
        $condition = array(
            'dept_id' => $department_id,
            'org_id' => $organization_id,
            'role_id' => 2, // role id of hod
        );

        if ($this->db->where($condition)->get('employees')->num_rows() > 0) {
            $hod_id = (array) $this->db->where($condition)->get('employees')->result()[0];

            return $hod_id['sevarth_id'];

        } else {
            return "not found";
        }

    }

    public function getDepartment()
    {
        $query = "SELECT * FROM departments";
        $dept = $this->db->query($query)->result_array();
        return $dept;
    }

    public function add_curr_remark($remark, $application_id)
    {
        $this->db->insert('applications', $remark)->where('applicaiton_id', $application_id);

    }

    public function get_principal_by_organization($department_id, $organization_id)
    {
        $condition = array(
            'dept_id' => $department_id,
            'org_id' => $organization_id,
            'role_id' => 3, // role id of principal
        );

        

        if ($this->db->where($condition)->get('employees')->num_rows() > 0) {
            $principal_id = (array) $this->db->where($condition)->get('employees')->result()[0];

            return $principal_id['sevarth_id'];
        } else {
            return "not found";
        }
    }

    public function get_registrar_by_organization($department_id, $organization_id)
    {
        $condition = array(
            'dept_id' => $department_id,
            'org_id' => $organization_id,
            'role_id' => 4, // role id of principal
        );

        if ($this->db->where($condition)->get('employees')->num_rows() > 0) {
            $registrar_id = (array) $this->db->where($condition)->get('employees')->result()[0];

            return $registrar_id['sevarth_id'];
        } else {
            return "not found";
        }
    }

    public function getApplicationsById($sevarthId, $role_id)
    {
        // if employee then directly return all matching sevarthId
        if ($role_id == 1) {
            return $this->db->where('sevarth_id', $sevarthId)->order_by("id", "DESC")->get('applications')->result_array();
        }
        // for hod 
        else if ($role_id == 2) {
            $condition = array(
                'hod_id' => $sevarthId,
                'status_id' => 1, //show application which are applied by hod 
            );
            return $this->db->where($condition)->order_by("id", "DESC")->get('applications')->result_array();
        }
        // for principle
        else if ($role_id == 3) {
            $condition = array(
                'principal_id' => $sevarthId,
                'status_id' => 3, //show application which are approved by registrar
            );

            return $this->db->where($condition)->order_by("id", "DESC")->get('applications')->result_array();
        }
        // for registrar
        else if ($role_id == 4) {
            $condition = array(
                'registrar_id' => $sevarthId,
                'status_id' => 2, //show application which are approved by employee
            );

            return $this->db->where($condition)->order_by("id", "DESC")->get('applications')->result_array();
        }

    }

    public function update_status_id($application_id, $status_id, $remark)
    {
        $data = array(
            "status_id" => $status_id,
            "remark" => $remark
        );

        $this->db->where('id', $application_id)->update('applications', $data);

        return array("status" => "Application Status ID Updated");

    }
    public function get_application_by_id($application_id)
    {
        return $this->db->where('id', $application_id)->get('applications')->result();
    }
} ?>