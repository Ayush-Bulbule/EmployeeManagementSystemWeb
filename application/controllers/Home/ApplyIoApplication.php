<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    
    public function add_io_application(){
        
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('dob', 'D.O.B', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header.php');
            $this->load->view('auth/details.php');
        } else {

            $formArray = array();

            $formArray['first_name'] = $this->input->post('first_name');
            $formArray['middle_name'] = $this->input->post('middle_name');
            $formArray['last_name'] = $this->input->post('last_name');
            $formArray['dob'] = $this->input->post('dob');

            $sevarth_id = $this->input->post('sevarth_id');
            $formArray['sevarth_id'] = $sevarth_id;
            $formArray['qualification'] = $this->input->post('qualification');
            $formArray['cast'] = $this->input->post('cast');
            $formArray['subcast'] = $this->input->post('subcast');

            $designation_id = $this->input->post('designation');
            $formArray['designation'] = $designation_id;
            $formArray['retirement_date'] = $this->input->post('retirement_date');
            $formArray['experience'] = $this->input->post('experience');
            $formArray['aadhar_no'] = $this->input->post('aadhar_no');
            $formArray['pan_no'] = $this->input->post('pan_no');
            $formArray['blood_grp'] = $this->input->post('blood_grp');
            $formArray['identification_mark'] = $this->input->post('identification_mark');
            $formArray['photo'] = $this->input->post('photo');

            $formArray['contact_no'] = $this->input->post('contact_no');
            $formArray['alternative_contact_no'] = $this->input->post('alternative_contact_no');
            $formArray['address'] = $this->input->post('address');
            $formArray['city'] = $this->input->post('city');
            $formArray['pin_code'] = $this->input->post('pin_code');
            $formArray['state'] = $this->input->post('state');
            $formArray['country'] = $this->input->post('country');
            $formArray['gender'] = $this->input->post('gender');

            $this->Auth_model->addDetails($formArray);
            $this->session->set_flashdata('msg', 'You registered successfully');

            // if($insert_id > 0){
            //     $this->session->set_flashdata('msg', 'You registered successfully');
            //     // $this->session->set_userdata('sevarth_id', $designation_id);
            //     $this->session->set_userdata('user_id', $insert_id);

            //        }else{
            //     echo "User cannot be created";
            // // }

        }

    
        
    }
    
}