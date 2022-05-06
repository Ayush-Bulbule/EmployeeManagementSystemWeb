<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IoApplication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->model('IO_model');
    }
   


    public function accept_io_application($application_id, $remark)
    
    {
     
        $remark = $this->input->post('remark');

        if ($remark == "null") {
            $this->session->set_flashdata('msg', 'Add Remark!!');
            redirect('Hod/IoApplication/show_applied_io_applications');

        } else {
            //hod is accepting the application hence status is become 2
            // echo $remark;
            $this->IO_model->update_status_id($application_id, 2, $remark);
            redirect('Hod/IoApplication/show_applied_io_applications');
        }

    }

    public function decline_io_application($application_id)
    {
        $remark = $this->input->post('remark');

        if ($remark == "null") {
            $this->session->set_flashdata('msg', 'Add Remark!!');
            redirect('Hod/IoApplication/show_applied_io_applications');

        }else{
            //hod is accepting the application hence status is become 2
            $this->IO_model->update_status_id($application_id, 5, $remark);
            redirect('Hod/IoApplication/show_applied_io_applications');
        }

    }

   

    public function show_applied_io_applications()
    {
        $sevarth_id = $this->session->userdata('sevarth_id');
        $role_id = $this->session->userdata('role_id');

        $applications = $this->IO_model->getApplicationsById("123456789013", "2");

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/hod/hod_sidebar.php');
        $this->load->view('dashboard/hod/show_applied_application.php', array('applications' => $applications));
        $this->load->view('templates/footer.php');

    }

}

// 3
// APPROVED BY REGISTRAR

// 4
// APPROVED BY PRINCIPAL

// 6
// Declined By Registrar

// 7
// Declined By Principle