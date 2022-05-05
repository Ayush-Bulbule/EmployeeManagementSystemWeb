<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IoApplication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->model('IO_model');
    }

    public function accept_io_application($application_id, $remark){
        if ($remark == "null") {
            $this->session->set_flashdata('msg', 'Add Remark!!');
            redirect('Hod/IoApplication/show_applied_io_applications');

        }else{
            //Principle is accepting the application hence status is become 4
            $this->IO_model->update_status_id($application_id, 3,$remark);
            redirect('Registrar/IoApplication/show_applied_io_applications');
        }    
    }
    
    
    
    public function decline_io_application($application_id, $remark){
        if ($remark == "null") {
            $this->session->set_flashdata('msg', 'Add Remark!!');
            redirect('Hod/IoApplication/show_applied_io_applications');

        }else{
        //Principle is accepting the application hence status is become 6
        $this->IO_model->update_status_id($application_id, 6, $remark);
        redirect('Registrar/IoApplication/show_applied_io_applications');
        }
    }
    
     public function show_applied_io_applications(){
        $sevarth_id = $this->session->userdata('sevarth_id');
        $role_id = $this->session->userdata('role_id');
        
        $applications = $this->IO_model->getApplicationsById("976789789987", "4");

      
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/registrar/registrar_sidebar.php');
        $this->load->view('dashboard/registrar/show_applied_application.php', array('applications' => $applications));
        $this->load->view('templates/footer.php');

    }

}






// 4
// APPROVED BY PRINCIPAL
	


// 7
// Declined By Principle