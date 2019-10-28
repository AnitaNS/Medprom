<?php
class Member_model extends CI_Model{

	function get_all_post(){
		$hasil=$this->db->get('post');
		return $hasil->result();
	}
	
}



