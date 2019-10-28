<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_aftr extends CI_Controller {
		function __construct(){
		parent::__construct();		
		$this->load->model('M_userpost');
		$this->load->helper('url');
 
	}

    public function index()
    {
    	$data['post'] = $this->M_userpost->tampil_data();
        $this->load->view('aftr/home',$data);
        
    }

}

