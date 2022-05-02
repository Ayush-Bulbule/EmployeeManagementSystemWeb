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
        //hod is accepting the application hence status is become 2
        $this->Io_model->update_status_id($application_id, 2,$remark);
    }
    
    public function decline_io_application($application_id, $remark){
        //hod is accepting the application hence status is become 2
        $this->Io_model->update_status_id($application_id, 5, $remark);
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