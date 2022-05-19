<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IoApplication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->model('IO_model');
        $this->load->library("Fpdf");

    }

    public function ad_io_application($application_id)
    {
        if($this->input->post('submit')=="Accept")
        {
            $this->accept_io_application($application_id);
        }else{
            $this->decline_io_application($application_id);

        }
    }

    public function accept_io_application($application_id){
        $remark = $this->input->post('remark');

        if ($remark == "") {
            $this->session->set_flashdata('msg', 'Add Remark!!');
            redirect('Registrar/IoApplication/show_applied_io_applications');

        }else{
            //Principle is accepting the application hence status is become 4
            $this->IO_model->update_status_id($application_id, 3,$remark);
            redirect('Registrar/IoApplication/show_applied_io_applications');
        }    
    }
    
    
    
    public function decline_io_application($application_id){
        $remark = $this->input->post('remark');

        if ($remark == "") {
            $this->session->set_flashdata('msg', 'Add Remark!!');
            redirect('Registrar/IoApplication/show_applied_io_applications');

        }else{
        //Principle is accepting the application hence status is become 6
        $this->IO_model->update_status_id($application_id, 6, $remark);
        redirect('Registrar/IoApplication/show_applied_io_applications');
        }
    }
    
     public function show_applied_io_applications(){
        $sevarth_id = $this->session->userdata('sevarth_id');
        $role_id = $this->session->userdata('role_id');
        
        $applications = $this->IO_model->getApplicationsById("123456789014", "4");

      
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/registrar/registrar_sidebar.php');
        $this->load->view('dashboard/registrar/show_applied_application.php', array('applications' => $applications));
        $this->load->view('templates/footer.php');

    }

    
    public function show_report_io_applications(){
        $sevarth_id = $this->session->userdata('sevarth_id');
        $date = $this->input->post('date');
        $type = $this->input->post('application_type');
        $applications = $this->IO_model->getApplicationsByDate("123456789014", $date, $type);

        $getRow = $this->IO_model->getRowsByDate("123456789014", $date, $type);
        print_r($getRow);

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/registrar/registrar_sidebar.php');
        $this->load->view('dashboard/registrar/show_report_application.php', array('applications' => $applications ) );
        $this->load->view('templates/footer.php');

    }

    public function generate_pdf(){
        
        $sevarth_id = $this->session->userdata('user_id');
        $date = $this->input->post('date');
        $type = $this->input->post('application_type');        
       
        $application = $this->IO_model->getApplicationsByDate("123456789014", $date, $type);

        
        
        $pdf = new FPDF('P', 'mm', array(300, 350));

        // Column headings
        $header = array('Application Name', 'Sevarth ID', 'Department', 'Date', 'Type', 'Status', 'Remark');
        // Data loading
        
        $pdf->SetFont('Arial', '', 9);
        $pdf->AddPage();
        $this->FancyTable($header, $application, $pdf);
        $pdf->AddPage();
        $pdf->Output();

                    
                    
        
                                  
    }

    function FancyTable($header, $data, $pdf)
    {
        // Colors, line width and bold font
        $pdf->SetFillColor(255, 0, 0);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(128,0,0);
        $pdf->SetLineWidth(.10);
        $pdf->SetFont('','B');
       
        // Header
        $w = array(50, 30, 20, 30, 30, 40, 50, 30);
        for($i=0; $i<count($header); $i++)
            $pdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
        $pdf->Ln();
        
        // Color and font restoration
        $pdf->SetFillColor(224, 235, 255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
        
        // Data
        $fill = false;
        foreach($data as $row)
        {
            $pdf->Cell($w[0], 6, $row['title'], 'LR', 0, 'L', $fill);
            $pdf->Cell($w[1], 6, $row['sevarth_id'], 'LR', 0, 'L',  $fill);
            $pdf->Cell($w[2], 6, $this->getApplicationDepartment($row['from_dept']), 'LR', 0, 'L', $fill);
            $pdf->Cell($w[3], 6, $row['date'], 'LR', 0, 'L', $fill);
            $pdf->Cell($w[4], 6, $this->getApplicationType($row['application_type']), 'LR', 0, 'L', $fill);
            $pdf->Cell($w[5], 6, $this->getApplicationStatus($row['status_id']), 'LR', 0, 'L', $fill);
            $pdf->Cell($w[6], 6, $row['remark'], 'LR', 0, 'L', $fill);
            
            $pdf->Ln();
            $fill = !$fill;
        }
        // Closing line
        $pdf->Cell(30*7, 0, '', 'T');
    }


    public function getApplicationStatus($status_id){
        if($status_id==1)
        {
        return 'Applied';
        }else if($status_id==2)
        {
            return 'APPROVED BY HOD';
        }else if($status_id==3)
        {
            return 'APPROVED BY REGISTRAR';
        }else if($status_id==4)
        {
            return 'APPROVED BY PRINCIPAL';
        }else if($status_id==5)
        {
            return 'Declined By Hod';
        }else if($status_id==6)
        {
            return 'Declined By Registrar';
        }else if($status_id==7)
        {
            return 'Declined By Principle';
        }else if($status_id==8)
        {
            return 'Applied By HOD';
        }
        else if($status_id==9)
        {
            return 'Applied By Principal';
        }
        else if($status_id==10)
        {
            return 'Applied By Registrar';
        }

    }

    public function getApplicationType($application_type){
        if($application_type==1)
        {
        return 'INWARD';
        }else
        {
            return 'OUTWARD';
        }

    }

    public function getApplicationDepartment($from_dept){
        if($from_dept==1)
        {
        return 'CS';
        }else if($from_dept==2)
        {
            return 'IT';
        }else if($from_dept==3)
        {
            return 'ME';
        }else if($from_dept==4)
        {
            return 'EXTC';
        }else if($from_dept==5)
        {
            return 'CE';
        }

    }
}






// 4
// APPROVED BY PRINCIPAL
	


// 7
// Declined By Principle