<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class A_cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cart_model');
	}

	public function index()
	{	
		$this->data['title'] = 'Shopping Carts';

		if (!$this->cart->contents()){
			$this->data['message'] = '<p>please select a plan!</p>';
		}else{
			$this->data['message'] = $this->session->flashdata('message');
		}

		$this->load->view('aftr/cartt', $this->data);
	}

	public function add()
	{
		$this->load->model('Cart_model');
	
		$insert_room = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);		

		$this->cart->insert($insert_room);
			
		redirect('a_paymentw');
    }
    public function addw()
	{
		$this->load->model('Cart_model');
	
		$insert_room = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);		

		$this->cart->insert($insert_room);
			
		redirect('a_cart');
	}
	
	function remove($rowid) {
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}
		
		redirect('a_cart');
	}	

	function update_cart(){
 		foreach($_POST['cart'] as $id => $cart)
		{			
			$price = $cart['price'];
			$amount = $price * $cart['qty'];
			
			$this->Cart_model->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
		}
		
		redirect('a_cart');
	}	
}