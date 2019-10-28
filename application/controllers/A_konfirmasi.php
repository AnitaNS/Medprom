<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_konfirmasi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_invoice');
		$this->load->model('Login_model');
		
	}

	public function index()
	{
		

		if($this->Login_model->logged_id())
		{
			$x['invoice']=$this->m_invoice->get_no_invoice();
		
			$this->load->view('aftr/konfirmasi',$x);
		
		}else{

		redirect("L_login");
		}
	}

	function do_upload()
	{
		$url = "../images";
		$image=basename($_FILES['pic']['name']);
		$image=str_replace(' ','|',$image);
		$type = explode(".",$image);
		$type = $type[count($type)-1];
		if (in_array($type,array('jpg','jpeg','png','gif')))
		{
			$tmppath="images/".uniqid(rand()).".".$type;
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
			{
				move_uploaded_file($_FILES['pic']['tmp_name'],$tmppath);
				return $tmppath;
			}
		}
		else
		{
			redirect(base_url() . 'a_aftr/not_img', 'refresh');
		}
	}

	function image_upload()
	{
		$data ['image_url']= $this->do_upload();
		$data ['kodeorder']= $this->input->post('kodeorder');
		$no_invoice=$this->input->post('no_invoice');
		$this->m_invoice->simpan_invoice($no_invoice);
		
		$data ['nama']= $this->input->post('nama');
		$data ['email']= $this->input->post('email');
		$data ['tf']= $this->input->post('tf');
		$this->db->insert('konfirm_order', $data);
 		redirect(base_url() . 'a_aftr', 'refresh');
	}

	function images()
	{
		$this->load->view('images');
	}

	function not_img()
	{
		$this->load->view('not_img');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('W_web');
	}
}
