<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class A_payment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Payment_model');
	}

	public function index()
	{	
		$this->data['title'] = 'Products';

		$this->data['products'] = $this->Payment_model->get_all();
		
		$this->load->view('aftr/payment', $this->data);
	}
}