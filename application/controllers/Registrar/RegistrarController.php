<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegistrarController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor

    }
    public function index()
    {
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/registrar/registrar_sidebar.php');
        $this->load->view('dashboard/registrar/registrar_dashboard.php');
        $this->load->view('templates/footer.php');
    }

    // public function show_report_applications(){
    //     $sevarth_id = $this->session->userdata('user_id');
        
    //     $date = $this->input->post('date');
    //     print_r($date);

    //     if($date == null){
    //         echo "null";
    //     }
    //     else{
    //         $applications = $this->IO_model->getApplicationsByDate("123456789014", $date);

    //         print_r($applications);
    
    //         $this->load->view('templates/header.php');
    //         $this->load->view('templates/navbar.php');
    //         $this->load->view('dashboard/hod/hod_sidebar.php');
    //         $this->load->view("dashboard/hod/show_report_application.php", array('application' => $applications));
    
    //     }
     
    // }
    
}