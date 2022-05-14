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

    
}