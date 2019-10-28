<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W_product extends CI_Controller {

	public function index()
	{
		$this->load->view('web/product');
	}

}