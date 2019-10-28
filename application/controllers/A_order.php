<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class A_order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Order_model');
	}

	public function index()
	{	
		$this->data['title'] = 'order';
		
		$this->load->view('aftr/order', $this->data);
	}
	
	public function save_order()
	{
		$customer = array(
			'nama' 		=> $this->input->post('nama'),
			'email' 	=> $this->input->post('email'),
			'alamat' 	=> $this->input->post('alamat'),
			'phone' 	=> $this->input->post('phone')
		);		

		$cust_id = $this->Order_model->insert_customer($customer);

		$order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id
		);		

		$ord_id = $this->Order_model->insert_order($order);
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price']
				);		

				$cust_id = $this->Order_model->insert_order_detail($order_detail);
			endforeach;
		endif;
		
		redirect('a_success');
	}
}