<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor

    }
    public function index()
    {
        $this->session->set_userdata('sevarth_id', '123456789015');   
        $this->session->set_userdata('role_id', '1');   
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/employee/employee_sidebar.php');
        $this->load->view('dashboard/employee/employee_dashboard.php');
        $this->load->view('templates/footer.php');
    }

    public function apply_io_application()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/employee/employee_sidebar.php');
        $this->load->view('dashboard/employee/apply_io_application.php');
        $this->load->view('templates/footer.php');

    }

    
}