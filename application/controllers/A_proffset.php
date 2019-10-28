<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_proffset extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        //load model admin
		$this->load->model('Login_model');
	
    }
	public function index()
	{
		if($this->Login_model->logged_id())
		{
		$this->load->view('aftr/proffset');
		
		}else{

		redirect("L_login");
		}
	}

 
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('W_web');
	}
}
