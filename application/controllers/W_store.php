<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W_store extends CI_Controller {

	public function index()
	{
		$this->load->view('web/store');
	}

}