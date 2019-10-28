<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W_blank extends CI_Controller {

	public function index()
	{
		$this->load->view('web/blank');
	}

}