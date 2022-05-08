<?php

defined('BASEPATH') or exit('No direct script access allowed');

class leaveController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('templates/sidebar.php');
        $this->load->model('leavemodel');
    }

    //APPLY LEAVE
    public function apply_leave()
    {
        //Leave Types
        $leave = $this->leavemodel->getLeaveTypes();
        $data = array();
        $data['leave_types'] = $leave;

        //Employee Details
        $employee = $this->leavemodel->fetchEmployeeDetails("GPAMTCM05"); //GPA2  Passed the Sevarth ID
        $data['employees_details'] = $employee;

        $this->load->view('leave/apply_leave.php', $data);
    }

    //Submitting the leave application
    public function post_apply_leave()
    {
        // print_r($this->input->post());       
        if ($this->input->post('submit') != NULL) {

            // POST data
            $data['sevarth_id'] = $this->input->post('sevarth_id');
            $data['full_name'] = $this->input->post('full_name');
            $data['leave_type'] = $this->input->post('leave_type');
            $data['start_date'] = $this->input->post('start_date');
            $data['end_date'] = $this->input->post('end_date');
            $date1 = date_create($data['start_date']);
            $date2 = date_create($data['end_date']);
            $diff = date_diff($date1, $date2);
            $data['duration'] = $diff->format("%a") + 1;
            $data['leave_reason'] = $this->input->post('leave_reason');

            //sending to model
            $leave = $this->leavemodel->postApplyLeave($data);
            print_r($data);
            if ($leave == true) {
                redirect('/apply_leave');
            } else {
                echo "Insert error !";
            }
        }
    }
    //End of APPLY LEAVE

    //Fetching data of all leave Applications
    public function all_leave()
    {
        $leave = $this->leavemodel->getLeaveApplication();
        $data = array();
        $data['leave_application'] = $leave;
        // print_r($data);
        $this->load->view('leave/all_leave', $data);
    }

    public function approve_leave($application_id)
    {
        $this->leavemodel->approve_leave($application_id);
        redirect(base_url('all_leave'));   
    }

    public function reject_leave($application_id)
    {
        $this->leavemodel->reject_leave($application_id);
        redirect(base_url('all_leave'));   
    }


    public function leave_history()
    {
        $leave = $this->leavemodel->getHistoryLeaveApplication("GPAMTCM05"); //GPAMTCM05  //GPA2
        $data = array();
        $data['leave_application'] = $leave;
        // print_r($data);
        $this->load->view('leave/leave_history', $data);
    }

    public function delete_application($application_id)
    {
        $this->leavemodel->delete_application($application_id);
        redirect(base_url('leave_history'));
    }


    //Fetching Leave Types
    public function leave_types()
    {
        $leave = $this->leavemodel->getLeaveTypes();
        $data = array();
        $data['leave_types'] = $leave;
        // print_r($data);
        $this->load->view('leave/leave_types', $data);
    }

    //Adding Leave Types
    public function post_leave_types()
    {
        // Check form submit or not
        print_r($this->input->post());
        if ($this->input->post('submit') != NULL) {

            // POST data
            $data['leave_type'] = $this->input->post('leave_type');
            $data['leave_description'] = $this->input->post('leave_description');
            $data['total_leaves'] = $this->input->post('total_leaves');
            $data['start_date'] = $this->input->post('start_date');
            $data['end_date'] = $this->input->post('end_date');

            //sending to model
            $leave = $this->leavemodel->setLeaveTypes($data);
            print_r($data);
            if ($leave == true) {
                redirect('/leave_types');
            } else {
                echo "Insert error !";
            }
        }
    }

    //Deleting Leave Type
    public function delete_type($leave_id)
    {
        $this->leavemodel->delete_type($leave_id);
        redirect(base_url('leave_types'));
    }
}
