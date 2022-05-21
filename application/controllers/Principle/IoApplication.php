<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IoApplication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->model('IO_model');
    }
    
    public function ad_io_application($application_id)
    {
        if($this->input->post('submit')=="Accept")
        {
            $this->accept_io_application($application_id);
        }else{
            $this->decline_io_application($application_id);

        }
    }

    public function accept_io_application($application_id){
        $remark = $this->input->post('remark');

        if ($remark == "") {
            $this->session->set_flashdata('msg', 'Add Remark!!');
            redirect('Hod/IoApplication/show_applied_io_applications');

        }else{
            //Principle is accepting the application hence status is become 4
            $this->IO_model->update_status_id($application_id, 4, $remark);
            $this->session->set_flashdata('msgSuccess', 'Accepted Successfully!!');

            redirect('Principle/IoApplication/show_applied_io_applications');

        }

       
    }
    
    public function decline_io_application($application_id){
        $remark = $this->input->post('remark');

        if ($remark == "") {
            $this->session->set_flashdata('msg', 'Add Remark!!');
            redirect('Hod/IoApplication/show_applied_io_applications');

        }else{
            //Principle is accepting the application hence status is become 6
            $this->IO_model->update_status_id($application_id, 7, $remark);
            $this->session->set_flashdata('msg', 'Declined Successfully!!');

            redirect('Principle/IoApplication/show_applied_io_applications');
        }
    }

     public function show_applied_io_applications(){
        $sevarth_id = $this->session->userdata('sevarth_id');
        $role_id = $this->session->userdata('role_id');
        
        $applications = $this->IO_model->getApplicationsById("123456789012", "3");

      
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/principle/principle_sidebar.php');
        $this->load->view('dashboard/principle/show_applied_application.php', array('applications' => $applications));
        $this->load->view('templates/footer.php');

    }

}