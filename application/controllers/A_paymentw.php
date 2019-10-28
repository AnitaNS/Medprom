<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class A_paymentw extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Paymentw_model');
	}

	public function index()
	{	
		$this->data['title'] = 'Durasi';

		$this->data['durasi'] = $this->Paymentw_model->get_all();
		
		$this->load->view('aftr/paymentw', $this->data);
	}
}