<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApplyIOApplication extends CI_Controller
{

    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->model('IO_model');
        $this->load->library('form_validation');

    }
    public function add_io_application()
    {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');

        //if error in form validation reload apply io application screen again
        if ($this->form_validation->run() == false) {
            $this->load_apply_io_application();
        } else {

            $config = array(
                'upload_path' => "uploads/io_applications", //path for upload
                'allowed_types' => "pdf", //restrict extension
                'max_size' => '300000',
                'max_width' => '30000',
                'max_height' => '30000',
            );
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload("io_application")) {
                $error = $this->upload->display_errors();

                $this->session->set_flashdata('error', "Application PDF Not Selected");
                $this->load_apply_io_application();

            } else {

                $fileName = $this->upload->data('file_name');

                $current_emp_id = $this->session->userdata('sevarth_id');
                $curr_user = $this->IO_model->get_employee_by_sevarth_id($current_emp_id);
                $hod_id = $this->IO_model->get_hod_by_department_organization($curr_user->dept_id, $curr_user->org_id);
                $principal_id = $this->IO_model->get_principal_by_organization($curr_user->dept_id, $curr_user->org_id);
                $registrar_id = $this->IO_model->get_registrar_by_organization($curr_user->dept_id, $curr_user->org_id);

                $title = $this->input->post('title');
                $description = $this->input->post('description');
                $application_type = $this->input->post('application_type');
                $date = $this->input->post('date');

                $io_application_data = array(
                    'sevarth_id' => $current_emp_id,
                    'title' => $title,
                    'description' => $description,
                    'remark' => "Applied Application",
                    'date' => $date,
                    'application' => $fileName,
                    'hod_id' => $hod_id,
                    'registrar_id' => $registrar_id,
                    'principal_id' => $principal_id,
                    'status_id' => "1",
                    "application_type" => $application_type,
                );

                $this->Auth_model->save_io_details($io_application_data);
                $this->session->set_flashdata('success', "Application Submitted Successfully");
                redirect(base_url() . 'home'); // redirect to home page

            }
        }

    }

    public function load_apply_io_application()
    {
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/employee/employee_sidebar.php');
        $this->load->view('dashboard/employee/apply_io_application.php');
        $this->load->view('templates/footer.php');

    }

    public function show_applied_io_applications(){
        $sevarth_id = $this->session->userdata('sevarth_id');
        $role_id = $this->session->userdata('role_id');
        $applications = $this->IO_model->getApplicationsById($sevarth_id, $role_id);
        
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/employee/employee_sidebar.php');
        $this->load->view('dashboard/employee/show_applied_application.php', array('applications' => $applications));
        $this->load->view('templates/footer.php');

    }

}