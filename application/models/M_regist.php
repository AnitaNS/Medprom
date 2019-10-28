<?php 
 
class M_regist extends CI_Model{
	function tampil_data(){
		return $this->db->get('tbl_users');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}