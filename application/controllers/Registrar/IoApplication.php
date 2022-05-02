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
        //registrar is accepting the application hence status is become 3
        $this->Io_model->update_status_id($application_id, 3,$remark);
    }
    
    public function decline_io_application($application_id, $remark){
        //registrar is accepting the application hence status is become 6
        $this->Io_model->update_status_id($application_id, 6, $remark);

    }

}






// 4
// APPROVED BY PRINCIPAL
	


// 7
// Declined By Principle