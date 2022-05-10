<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notification_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
  
	/*load database libray manually*/
	$this->load->database();
  
	/*load Model*/
	$this->load->model('notification_model');
	}

	public function index()
	{
		$result['data']=$this->notification_model->view_notification();
		$this->load->view('notification',$result);
		
		$this->load->model('notification_model');
	
	}

	public function delete()
	{
		$sr=$this->input->get('sr_no');
		$response=$this->notification_model->deleterecords($sr);
  			if($response==true)
			{
    			//echo "Data deleted successfully !";
				redirect(base_url().'index.php/notification_controller_folder/notification_controller/index');

			}
  			else
			{
    			echo "Error !";
  			}

	}
	
}?>
