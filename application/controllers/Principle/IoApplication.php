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
        //Principle is accepting the application hence status is become 4
        $this->Io_model->update_status_id($application_id, 4,$remark);
    }
    
    public function decline_io_application($application_id, $remark){
        //Principle is accepting the application hence status is become 6
        $this->Io_model->update_status_id($application_id, 6, $remark);

    }

}