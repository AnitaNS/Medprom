<?php
class Tampil_model extends CI_Model{

	function get_all_produk(){
		$hasil=$this->db->get('iklan');
		return $hasil->result();
	}
	
}