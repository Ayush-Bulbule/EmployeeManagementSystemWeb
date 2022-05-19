<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HodController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor

    }
    public function index()
    {

        //clear session
        $this->session->sess_destroy();

        // add hod session sevarth id
        $this->session->set_userdata('sevarth_id', '123456789013');
        $this->session->set_userdata('role_id', '2');

        

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/hod/hod_sidebar.php');
        $this->load->view('dashboard/hod/hod_dashboard.php');
        $this->load->view('templates/footer.php');
    }


    
}