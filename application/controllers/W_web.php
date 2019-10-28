<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W_web extends CI_Controller {

	public function index()
	{
		$this->load->view('web/home');
	}

}