<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_userpost extends CI_Controller {

	public function index()
	{
		$data['post'] = $this->M_userpost->getAll('user');
		$this->load->view('aftr/userpost',$data);
		
	}
	function __construct(){
		parent::__construct();		
		$this->load->model('M_userpost');
		$this->load->helper('url');
 
	}
 

	function tambah(){
		$this->load->view('aftr/userpost');
	}
 
	function tambah_aksi(){
		$id_kategori			= $this->input->post('myList');
		$judul					= $this->input->post('judul');
		$isipost				= $this->input->post('isipost');
		$gambarpost				= $this->input->post('judul');
		$id_author				= $this->input->post('id_author');
		$statuspost				= $this->input->post('statuspost');



		// $this->M_postuser->input_data($data,'post');
		$gambar = $this->M_userpost->uploadImage($judul,'post');
		 
		$data = array(
			'id_kategori' => $id_kategori,
			'judul' => $judul,
			'isipost' => $isipost,
			'gambarpost' => $gambar,
			'id_author' => $id_author,
			'statuspost' => 1,
        );
		$this->db->insert('post',$data);
		redirect('A_aftr');
	}

	//this for get user from database
    public function get_post($key,$val)
    {
      $query = $this->db->get_where('post',array($key=>$val ));
      if (!empty($query->row_array())) {
        return $query->row_array();
      }
      return false;
    }
    


}




