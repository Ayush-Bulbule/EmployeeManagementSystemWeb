<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('Auth_model');
    }
    public function index()
    {
        $this->load->view('templates/header.php');
        $this->load->view('auth/login.php');
        // $this->load->view('templates/navbar.php');
        // $this->load->view('templates/sidebar.php');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|alpha_numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $encrypted_password = $this->encrypt->encode($this->input->post('password'));
            echo $encrypted_password;
            $result = $this->Auth_model->can_login($this->input->post('email'), $this->input->post('password'));
            if ($result == '') {
                redirect('home');
            } else {
                $this->session->set_flashdata('message', $result);
                redirect('login');
            }
        }
    }
}
