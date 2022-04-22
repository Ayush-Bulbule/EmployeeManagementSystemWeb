<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeaveController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('templates/sidebar.php');
    }
    public function index()
    {
        // echo "Hello";

        $this->load->view('leave/apply_leave.php');
        $this->load->view('templates/footer.php');
    }
    public function apply_leave()
    {
        $this->load->view('leave/apply_leave.php');
        $this->load->view('templates/footer.php');
    }
    public function leave_history()
    {
        $this->load->view('leave/leave_history.php');
        $this->load->view('templates/footer.php');
    }
    public function leave_types()
    {
        $this->load->view('leave/leave_types.php');
        $this->load->view('templates/footer.php');
    }
}
